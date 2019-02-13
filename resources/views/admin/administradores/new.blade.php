@extends('admin.layout.layout', ['section' => $section])

@section('content')
    <div class="row padding-nav-bar">
        <div class="col-6">
        <form method="POST" action="{{ url('admin/administradores/nuevo') }}">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre *</label>
                    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email *</label>
                    <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Contrasena *</label>
                    <input name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                </div>
                <button id="btn-guardar" type="submit" class="btn btn-secondary btn-admin">Guardar</button>
                {!! csrf_field() !!}
            </form>
        </div>
    </div>

@endsection

@push('scripts')

@endpush