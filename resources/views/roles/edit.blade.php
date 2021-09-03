@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-sm-flex d-block">
        <div class="mr-auto mb-sm-0 mb-3">
            <h4 class="card-title mb-2">Editar Rol</h4>
            <span>Esta pantalla permite editar Rol en el Sistema </span>
        </div>


    </div>


    <div class="card-body">
        <div class="basic-form">
            <form method="POST" action="{{ "ruta" }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre_rol">Rol</label>
                        <input type="nombre_rol" id="nombre_rol"
                            class="form-control @error('nombre_rol') is-invalid @enderror" name="nombre_rol"
                            placeholder="Rol">
                        @error('nombre_rol')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="correo">Estatus</label>


                        <select name="correo" id=""
                            class="form-control default-select @error('correo') is-invalid @enderror">
                            <option>Activo</option>
                            <option>Option 2</option>

                        </select>
                        @error('correo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection