@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-sm-flex d-block">
        <div class="mr-auto mb-sm-0 mb-3">
            <h4 class="card-title mb-2">Agregar Rol</h4>
            <span>Esta pantalla permite agregar un Rol al Sistema </span>
        </div>


    </div>

  



    <div class="card-body">
        <div class="basic-form">
            <form method="POST" action="{{ "ruta" }}">
                @csrf
              

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre_rol">Rol</label>
                        <input type="nombre_rol" id="nombre_rol" class="form-control @error('nombre_rol') is-invalid @enderror"
                            name="nombre_rol" placeholder="Rol">
                        @error('nombre_rol')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                   
                </div>

                

              






                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</div>

@endsection