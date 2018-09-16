@extends('admin.layout.layout')

@section('title', 'Page Title')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="padding-nav-bar col-6">
              {{-- <a href="/admin/productos/nuevo"><button class="btn btn-secondary">Nuevo</button></a> --}}
              {{-- <button class="btn btn-secondary">Editar</button> --}}
              <button id="btn-eliminar" class="btn btn-secondary btn-hidden">Eliminar</button>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <table id="inscripciones_table" class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>Institucion/Empresa</th>
                  <th>Cod. Promocional</th>
                  <th>Forma de Pago</th>
                  <th>Ingresado</th>
                </tr>
              </thead>
              <tbody>
                @foreach($inscripciones as $i)
                    <tr id="{{ $i->id }}">
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->email }}</td>
                        <td>{{ $i->telefono }}</td>
                        <td>{{ $i->institucion }}</td>
                        <td>{{ $i->promocional }}</td>
                        <td>{{ array_forma_pago($i->forma_pago) }}</td>
                        <td>{{ $i->created_at }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
      </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){

            let selected_tr_id = 0;

            $("#inscripciones_table").delegate('tr', 'click', function(e) {
                
                if($(e.currentTarget).parent()[0].tagName.toLowerCase() == 'tbody'){
                    if($(e.currentTarget).hasClass('tr-active')){
                        selected_tr_id = 0;
                        $('#btn-eliminar').addClass('btn-hidden');
                        $(e.currentTarget).removeClass('tr-active');
                    } else {
                        selected_tr_id = $(e.currentTarget).attr('id');
                        $('#btn-eliminar').removeClass('btn-hidden');
                        $(e.currentTarget).addClass('tr-active');
                    }
                }
                
            });

            $('#btn-eliminar').on('click', () => {
                console.log(selected_tr_id);
            });
        });

        new DataTable("#inscripciones_table", {
          searchable: true,
          fixedHeight: true,
        });
    </script>
@endpush