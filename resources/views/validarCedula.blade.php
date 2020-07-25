@extends('layouts.lte3')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 col-md-4 offset-md-4">
            <div class="card card-widget widget-user">
                <div class="card-header">
                    <h3 class="card-title">Ingrese Nº de cedula</h3>
                </div>

                    <div class="figure">
                        <picture>
                            <img src="img/cedula.png" class="img-fluid" style="width: auto; height: auto;">
                         </picture>  
                    </div>


                    <div class="card-body">
                        <div class="row">
                              <div class="col-md-12">
                                    <form role="form"action="{{ url('validarcedula') }}" method="POST">
              	                        @csrf
              	                     <div class="form-group">
              	                        <label for="cedula">Cedula:</label>
                    		            <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                                     </div>
                                     <div>
                                          <button type="submit" class="btn btn-primary btn-block">Buscar</button>
                                     </div>
                                    </form>
                                </div>
                        </div>                        
                    </div>
            </div>
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="cedula">Cedula:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="cedula">Primer Nombre:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="cedula">Segundo Nombre:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="cedula">Primer Apellido:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="cedula">Segundo Apellido:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="cedula">Fecha Nacimiento:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="cedula">Nacionalidad:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="cedula">Sexo:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="cedula">Correo:</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection