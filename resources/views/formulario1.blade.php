@extends('layouts.lte3')

@section('content')

   
<div class="container-fluid">
    <div class="row">
          <!-- left column -->
        <div class="col-md-12">
        <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de Persona</h3>
              </div>

				@if(session('mensaje'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         	<p><i class="icon fa fa-info"></i>
                            {{ session('mensaje') }}
                        	</p>              
                    </div>
                @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('persona')}}" role="form" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">  
                        <div class="form-group col-md-6">
                            <label for="nombres">Nombres:</label>
                            <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres" name="nombres" placeholder="Nombres" value="{{ old('nombres') }}">
                            @error('nombres')
				                <span class="invalid-feedback" role="alert">
				                    <strong>
				                        {{ $message }}
				                    </strong>
				                </span>
				            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}">
                            @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="cedula">Cedula:</label>
                            <input type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror" id="cedula" placeholder="Cedula" value="{{ old('cedula') }}">
                            @error('cedula')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="categoria">Categoria:</label>
                            <select name="categoria" id="categoria" class="custom-select form-control @error ('categoria') is-invalid @enderror ">
                                <option value=""></option>
                                <option value="Jefe de Hogar">Jefe de Hogar</option>
                                <option value="Lider de calle">Lider de calle</option>
                                <option value="Familia">Familia</option>
                             
                            </select>
                            @error('categoria')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fecha_nac">Fecha Nac:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                <input type="text" class="form-control @error('fecha_nac') is-invalid @enderror" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="fecha_nac" im-insert="false" value="{{ old('fecha_nac') }}">
                                @error('fecha_nac')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                                </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="estado_civil">Estado Civil:</label>
                            <select name="estado_civil" class="form-control @error('estado_civil') is-invalid @enderror custom-select" id="estado_civil">
                                <option selected=""></option>
                                <option value="Soltero">Soltero</option>
                                <option value="Casado">Casado</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Viudo">Viudo</option>
                            </select>
                            @error('estado_civil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message}}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nacionalidad">Nacionalidad:</label>
                            <select name="nacionalidad" class="custom-select form cotrol @error ('nacionalidad') is-invalid @enderror">
                                <option></option>
                                <option>Pais 1</option>
                                <option>Pais 2</option>
                                <option>Pais 3</option>
                                <option>Pais 4</option>
                                <option>Pais 5</option>
                            </select>
                            @error('nacionalidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                        <div class="form-group col-md-3">
                            <label for="edad">Edad:</label>
                            <input type="text" name="edad" class="form-control @error ('edad') is-invalid @enderror" id="" value="{{ old('edad') }}">
                            @error('edad')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" class="custom-select form control @error ('sexo') is-invalid @enderror">
                                <option></option>
                                <option value="Mujer">Mujer</option>
                                <option value="Hombre">Hombre</option>
                            </select>
                            
                            @error('sexo')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <hr>

                    <div class="row">  
                        <div class="form-group col-md-6">
                            <label for="correo">Correo:</label>
                            <input type="email" class="form-control @error ('correo') is-invalid @enderror" id="correo" name="correo" placeholder="Correo" value="{{ old('correo') }}">
                            @error('correo')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </span>
                            @enderror
                            
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telefono">Telefono:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control @error ('telefono') is-invalid @enderror" data-inputmask="&quot;mask&quot;: &quot;(9999) 999-9999&quot;" data-mask="" im-insert="true" name="telefono" value="{{ old('telefono') }}">
                                @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="celular">Celular:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control @error ('celular') is-invalid @enderror" data-inputmask="&quot;mask&quot;: &quot;(9999) 999-9999&quot;" data-mask="" im-insert="true" name="celular" value="{{ old('celular') }}">
                                @error('celular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="estado">Estado:</label>
                            <select class="custom-select form control @error ('estado') is-invalid @enderror" name="estado">
                                <option></option>
                                <option>Estado 1</option>
                                <option>Estado 2</option>
                            </select>
                            @error('estado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message}}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="municipio">Municipio:</label>
                            <select class="custom-select form control @error ('municipio') is-invalid @enderror " name="municipio">
                                <option></option>
                                <option>municipio 1</option>
                                <option>municipio 2</option>
                            </select>
                            @error('municipio')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="parroquia">Parroquia:</label>
                            <select class="custom-select form control @error ('parroquia') is-invalid @enderror" name="parroquia">
                                <option value=""></option>
                                <option value="Parroquia 1">Parroquia 1</option>
                                <option value="Parroquia 2">Parroquia 2</option>
                            </select>
                            @error('parroquia')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="ciudad">Ciudad:</label>
                            <select class="custom-select form control @error ('ciudad') is-invalid @enderror" name="ciudad">
                                <option></option>
                                <option>Santa Teresa del Tuy 1</option>
                                <option>Cartanal</option>
                            </select>
                            @error('ciudad')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6" required>
                            <label for="urbanizacion">Urbanización:</label>
                            <input type="text" name="urbanizacion" class="form-control @error ('urbanizacion') is-invalid @enderror" id="urbanizacion" placeholder="Urbanización" value="{{ old('urbanizacion') }}">
                            @error('urbanizacion')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3" required>
                            <label for="tzona">Tipo Zona:</label>
                            <select class="form-control custom-select @error ('tzona') is-invalid @enderror" id="tzona" name="tzona">
                                <option selected></option>    
                                <option value="Sector">Sector</option>
                                <option value="Zona">Zona</option>
                                <option value="Edificio">Edificio</option>
                            </select>
                            @error('tzona')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nzona">Nombre Zona:</label>
                            <input class="form-control @error ('nzona') is-invalid @enderror" type="text" id="nzona" name="nzona" value="{{ old('nzona') }}" placeholder="Nombre Zona">
                            @error('nzona')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3" required>
                            <label for="tcalle">Tipo Calle:</label>
                            <select class="form-control custom-select @error ('tcalle') is-invalid @enderror" id="select4" name="tcalle">
                                <option selected></option>    
                                <option value="calle">Calle</option>
                                <option value="callejon">Callejon</option>
                                <option value="vereda">Vereda</option>
                                <option value="carrera">Carrera</option>
                                <option value="manzana">Manzana</option>
                                <option value="piso">Piso</option>
                            </select>
                            @error('tcalle')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="ncalle">Nombre Calle:</label>
                            <input class="form-control @error ('ncalle') is-invalid @enderror" type="text" id="ncalle" name="ncalle" value="{{ old('n_calle') }}" placeholder="Nombre Calle">
                            @error('ncalle')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3" required>
                            <label for="tvivienda">Tipo Vivienda:</label>
                            <select class="form-control  @error ('tvivienda') is-invalid @enderror custom-select" id="tvivienda" name="tvivienda">
                                <option selected></option>    
                                <option value="casa">Casa</option>
                                <option value="apartamento">Apartamento</option>
                                <option value=quinta"">Quinta</option>
                                <option value="rancho">Rancho</option>
                                
                            </select>
                            @error('tvivienda')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3" required>
                            <label for="nvivienda">Nombre Vivienda:</label>
                            <input type="text" class="form-control @error ('nvivienda') is-invalid @enderror" name="nvivienda" id="nvivienda" placeholder="Nombre Vivienda" value="{{ old('nvivienda') }}">
                            @error('nvivienda')
                            <div class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message}}
                                </strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
        <!-- /.card -->
        </div>
    </div>
</div>
  

    

@endsection
