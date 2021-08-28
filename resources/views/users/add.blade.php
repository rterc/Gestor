@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-sm-flex d-block">
        <div class="mr-auto mb-sm-0 mb-3">
            <h4 class="card-title mb-2">Agregar usuario</h4>
            <span>Esta pantalla permite agregar usuario al Sistema </span>
        </div>


    </div>

  



    <div class="card-body">
        <div class="basic-form">
            <form>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" class="form-control @error('usuario') is-invalid @enderror"
                            name="usuario" placeholder="Usuario">

                        @error('usuario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="nombres">Nombres</label>
                        <input type="nombres" id="nombres" class="form-control @error('nombres') is-invalid @enderror"
                            name="nombres" placeholder="Nombres">
                        @error('nombres')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" id="apellidos" class="form-control @error('apellidos') is-invalid @enderror"
                            name="apellidos" placeholder="Apellidos">

                        @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="correo">Correo Electrónico </label>
                        <input type="text" id="correo" class="form-control @error('correo') is-invalid @enderror"
                            name="correo" placeholder="Correo Electrónico">

                        @error('correo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="correo">Imagen de Usuario</label>
                        <div class="custom-file">

                            <input type="file" class="custom-file-input" name="imagen" id="imagen">
                            <label class="custom-file-label">Elija el archivo</label>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</div>

@endsection