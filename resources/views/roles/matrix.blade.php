@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-sm-flex d-block">
        <div class="mr-auto mb-sm-0 mb-3">
            <h4 class="card-title mb-2">Matriz Rol - Permisos</h4>
            <span>Esta pantalla configurar los permisos del Rol</span>
        </div>

     
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="Director de Proyecto" disabled>

            </div>


            <table class="table style-1" id="ListDatatableView">

                <tbody>
                    <tr>


                        <td>
                            <div>
                                <h6>Asunto</h6>

                            </div>
                        </td>

                        <td>

                            <div class="row">
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-3 checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" checked=""
                                            id="customCheckBox6" required="">
                                        <label class="custom-control-label" for="customCheckBox6">Agrega</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-3 checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" checked=""
                                            id="customCheckBox7" required="">
                                        <label class="custom-control-label" for="customCheckBox7">Edita</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-3 checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" checked=""
                                            id="customCheckBox8" required="">
                                        <label class="custom-control-label" for="customCheckBox8">Borra</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-3 checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" checked=""
                                            id="customCheckBox9" required="">
                                        <label class="custom-control-label" for="customCheckBox9">Consulta</label>
                                    </div>
                                </div>
                            </div>



                        </td>

                    </tr>

                    <tr>


                        <td>
                            <div>
                                <h6>Asunto 2</h6>

                            </div>
                        </td>

                        <td>

                            <div class="row">
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-3 checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" checked=""
                                            id="customCheckBox61" required="">
                                        <label class="custom-control-label" for="customCheckBox61">Agrega</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-3 checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" 
                                            id="customCheckBox71" required="">
                                        <label class="custom-control-label" for="customCheckBox71">Edita</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-3 checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" 
                                            id="customCheckBox81" required="">
                                        <label class="custom-control-label" for="customCheckBox81">Borra</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-3 checkbox-primary">
                                        <input type="checkbox" class="custom-control-input" checked=""
                                            id="customCheckBox91" required="">
                                        <label class="custom-control-label" for="customCheckBox91">Consulta</label>
                                    </div>
                                </div>
                            </div>



                        </td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection