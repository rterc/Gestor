@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-sm-flex d-block">
        <div class="mr-auto mb-sm-0 mb-3">
            <h4 class="card-title mb-2">Listado de Roles</h4>
            <span>Esta pantalla permite realizar el mantenimiento de todos los ROL del sistema</span>
        </div>
       
        <a href="javascript:void(0);" class="btn btn-info">+ Agregar Nuevo ROL</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="input-group mb-3">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Buscar</button>
                </div>
            </div>


            <table class="table style-1" id="ListDatatableView">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ROL</th>
                        <th>ESTATUS</th>
                        <th>ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6>01</h6>
                        </td>
                      
                        <td>
                            <div>
                                <h6>Director de Proyecto</h6>
                               
                            </div>
                        </td>
                      
                     
                        <td><span class="badge badge-success">Activo</span></td>
                        <td>
                            <div class="d-flex action-button">
                                <a href="javascript:void(0);" class="btn btn-primary btn-xs light px-2">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                             
                           
                                <a href="javascript:void(0);" class="ml-2 btn btn-xs px-2 light btn-primary">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                  
                                    
                                </a>

                            
                            </div>
                        </td>
                    </tr>



                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection