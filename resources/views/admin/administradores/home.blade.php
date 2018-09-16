@extends('admin.layout.layout')

@section('title', 'Page Title')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="padding-nav-bar col-6">
              <a href="/admin/productos/nuevo"><button class="btn btn-secondary">Nuevo</button></a>
              <button class="btn btn-secondary">Editar</button>
              <button class="btn btn-secondary">Eliminar</button>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <table id="productos_table" class="table">
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
        new DataTable("#productos_table", {
          searchable: true,
          fixedHeight: true,
        });
      </script>
@endpush