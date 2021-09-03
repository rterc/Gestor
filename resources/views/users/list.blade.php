@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-sm-flex d-block">
        <div class="mr-auto mb-sm-0 mb-3">
            <h4 class="card-title mb-2">Listado de usuarios</h4>
            <span>Esta pantalla permite realizar el mantenimiento de todos los Usuarios del sistema</span>
        </div>
       
        <a href="javascript:void(0);" class="btn btn-info">+ Agregar Nuevo Usuario</a>
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
                        <th>USUARIO</th>
                        <th>NOMBRE</th>
                        <th>DEPARTAMENTO</th>
                        <th>EXTENSIÓN</th>
                        <th>ESTATUS</th>
                        <th>ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6>rterc</h6>
                        </td>
                        <td>
                            <div class="media style-1">
                                <img src="{{ asset('public/images/avatar/1.jpg')}}" class="img-fluid mr-2" alt="">
                                <div class="media-body">
                                    <h6>Roberto Terc</h6>
                                    <span>rterc@sipen.gob.do</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h6>Dirección de Tecnología de la Información y Comunicaciones</h6>
                                <span>Administrador de Portal Web del Departamento de Operaciones TIC</span>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h6>1004</h6>
                             
                            </div>
                        </td>
                     
                        <td><span class="badge badge-warning">Perfil Incompleto</span></td>
                        <td>
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
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <h6>jrojas</h6>
                        </td>
                        <td>
                            <div class="media style-1">
                                <span class="icon-name mr-2 bgl-danger text-danger">JR</span>
                                <div class="media-body">
                                    <h6>Jairo Rojas</h6>
                                    <span>jrojas@sipen.gob.do</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h6>Dirección de Tecnología de la Información y Comunicaciones</h6>
                                <span>Analista del Departamento de Desarrollo e Implementación de Sistemas</span>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h6>3714</h6>
                             
                            </div>
                        </td>
                     
                        <td><span class="badge badge-success">Activo</span></td>
                        <td>
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
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection