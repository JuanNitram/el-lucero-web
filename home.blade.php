@extends('admin.layout.layout', ['section' => $section])

@section('content')
        <div class="row">
            <div class="padding-nav-bar col-12">
                <div class="form-row">
                    <div class="col-2">
                        <input id="from-date" type="text" class="form-control" placeholder="Desde">
                    </div>
                    <div class="col-2">
                        <input id="to-date" type="text" class="form-control" placeholder="Hasta">
                    </div>
                    <div class="col-2">
                            <button id="btn-buscar" class="btn btn-secondary">Buscar</button>
                    </div>
                    <div class="col-6 text-right">
                            <button id="btn-eliminar" class="btn btn-secondary btn-hidden">Eliminar</button>
                            <button id="btn-exportar" class="btn btn-secondary">Exportar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div id="inscripciones_table_holder" class="col-12">
            <table id="inscripciones_table" class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>Institucion/Empresa</th>
                  <th>Cargo</th>
                  <th>Cod. Promocional</th>
                  <th>Forma de Pago</th>
                  <th>Taller</th>
                  <th>Ingresado</th>
                </tr>
              </thead>
              <tbody>
                @foreach($inscripciones as $i)
                    <tr id="{{ $i->id }}">
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->surname }}</td>
                        <td>{{ $i->email }}</td>
                        <td>{{ $i->telefono }}</td>
                        <td>{{ $i->institucion }}</td>
			@if($i->cargo == null || $i->cargo == '')
	                        <td>{{ 'No definido' }}</td>
			@else
				<td>{{ $i->cargo }}</td>
			@endif
                        <td>{{ $i->promocional }}</td>
                        <td>{{ array_forma_pago($i->forma_pago) }}</td>
                        <td>{{ array_talleres($i->taller_id) }}</td>
                        <td>{{ date_to_YMD_pretty($i->created_at) }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
@endsection

@push('scripts')
    <script src="{{asset('assets/admin/js/table2csv.js')}}"></script>
    <script src="{{asset('assets/admin/js/flatpickr.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            let inscripciones_table = new DataTable("#inscripciones_table", {
                searchable: true,
                fixedHeight: true,
                perPage: 10,
                perPageSelect: [10,30,50,100]
            });

            let selected_tr_id = 0;
            let tr_anterior; //undefined
            
            $("#inscripciones_table").delegate('tr', 'click', function(e) {
                if($(e.currentTarget).parent()[0].tagName.toLowerCase() == 'tbody'){
                    if(!$(e.currentTarget).hasClass('tr-active') && selected_tr_id > 0){
                        if(tr_anterior != undefined){
                            tr_anterior.removeClass('tr-active');
                            $(e.currentTarget).addClass('tr-active');
                            selected_tr_id = $(e.currentTarget).attr('id');
                        }
                    } else if($(e.currentTarget).hasClass('tr-active')){
                        selected_tr_id = 0;
                        $('#btn-eliminar').addClass('btn-hidden');
                        $(e.currentTarget).removeClass('tr-active');
                    } else {
                        selected_tr_id = $(e.currentTarget).attr('id');
                        $('#btn-eliminar').removeClass('btn-hidden');
                        $(e.currentTarget).addClass('tr-active');
                    }
                }
                tr_anterior = $(e.currentTarget);
            });

            $('#btn-exportar').on('click', () => {
                $("#inscripciones_table").table2csv({
                    filename: 'el_lucero_' + moment().format('DD-MM-YYYY') + ".csv"
                });
            });

            $('#btn-eliminar').on('click', () => {
                $.post('/admin/inscripciones/eliminar/'+selected_tr_id, {
                    _token: "{!! csrf_token() !!}",
                }).done(function(res){
                    inscripciones_table.destroy();
                    $('tr#'+selected_tr_id).remove();
                    inscripciones_table = new DataTable("#inscripciones_table", {
                        searchable: true,
                        fixedHeight: true,
                    });
                    // window.history.pushState("", "", "/");
                });
            });

            $('#btn-buscar').on('click', () => {
                let from_date = $('#from-date').val();
                let to_date = $('#to-date').val();

                if(from_date == '' || to_date == '') return;
                
                $.get('/admin/inscripciones/buscar', {
                    from_date,
                    to_date,
                    _token: "{!! csrf_token() !!}",
                }).done(function(res){
                    let inscripciones = res.data;
                    let table_ins_body = '';

                    inscripciones.forEach((i) => {
                        table_ins_body +=
                        '<tr id="'+ i.id +'"><td>'+ i.name + '</td>'+ 
                        '<td>'+ i.surname + '</td>'+
                        '<td>'+ i.email + '</td>'+
                        '<td>'+ i.telefono + '</td>'+
                        '<td>'+ i.institucion + '</td>'+
                        '<td>'+ i.cargo + '</td>'+
                        '<td>'+ i.promocional + '</td>'+
                        '<td>'+ array_forma_pago(i.forma_pago) + '</td>'+
                        '<td>'+ array_talleres(i.taller_id) + '</td>'+    
                        '<td>'+ i.created_at + '</td></tr>'
                    });
                    
                    let table_ins = `
                    <table id="inscripciones_table" class="table">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Institucion/Empresa</th>
                            <th>Cargo</th>
                            <th>Cod. Promocional</th>
                            <th>Forma de Pago</th>
                            <th>Taller</th>
                            <th>Ingresado</th>
                            </tr>
                        </thead>
                        <tbody>
                            ` + table_ins_body + `
                        </tbody>
                    </table>`;

                    inscripciones_table.destroy();
                    $('#inscripciones_table_holder').empty().append(table_ins);
                    inscripciones_table = new DataTable("#inscripciones_table", {
                        searchable: true,
                        fixedHeight: true,
                    });
                    // window.history.pushState("", "", "/");
                });

            });
        });

        const from_date = flatpickr("#from-date", {
            enableTime: true,
            dateFormat: "d/m/Y",
        });

        const to_date = flatpickr("#to-date", {
            enableTime: true,
            dateFormat: "d/m/Y",
        });

        function array_talleres(value){
            data = ['Taller Colonia', 'Taller Mercedes', 'Taller Paysandu'];
            return data[value];
        }

        function array_forma_pago(value){
            data = ['Presencial','Transferencia'];
            return data[value];
        }
    </script>
@endpush