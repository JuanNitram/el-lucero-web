@extends('admin.layout.layout', ['section' => $section])

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="padding-nav-bar col-6">
      <a href="{{ url('admin/administradores') . "/nuevo" }}"><button class="btn btn-secondary btn-admin">Nuevo</button></a>
        <button id="btn-eliminar" class="btn btn-secondary btn-hidden btn-admin">Eliminar</button>
        <button id="btn-editar" class="btn btn-secondary btn-hidden btn-admin">Editar</button>
        
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table id="administradores_table" class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Creado</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->created_at }}</td>
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
        new DataTable("#administradores_table", {
          searchable: true,
          fixedHeight: true,
        });
      </script>
@endpush