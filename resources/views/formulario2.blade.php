@extends('layouts/lte3')

@section('content')

<div class="container-fluid">
    <div class="row">
          <!-- left column -->
        <div class="col-md-6 offset-md-3">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de Usuarios</h3>
              </div>
               {{--  @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}
                
				@if(session('mensaje'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         	<p><i class="icon fa fa-info"></i>
                            {{ session('mensaje') }}
                        	</p>              
                    </div>
                @endif
                
              <form role="form"action="{{ url('formulario2') }}" method="POST">
              	@csrf
                <div class="card-body">
                	<div class="row">
                  		<div class="form-group col-md-6">
                    		<label for="nombres">Nombres:</label>
                    		<input type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" id="nombres" placeholder="Nombres" value="{{ old('nombres') }}">
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
                    		<input type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" id="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}">
                    		@error('apellidos')
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
                  			<label for="cedula">Cedula:</label>
                  			<input type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror" placeholder="Cedula" value="{{ old('cedula') }}">
                  			@error('cedula')
                  			    <span class="invalid-feedback" role="alert">
                  			        <strong>
                  			            {{ $message }}
                  			        </strong>
                  			    </span>
                  			@enderror
                  			
                  		</div>
                  		<div class="form-group col-md-6">
                  			<label for="password">Contraseña:</label>
                  			<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña">
                  			@error('password')
                  			    <span class="invalid-feedback" role="alert">
                  			        <strong>
                  			            {{ $message }}
                  			        </strong>
                  			    </span>
                  			@enderror
                  		</div>
                  		
                  		
                  	</div>
                  	<div class="row">
                  		<div class="form-group col-md-6">
                  			<label for="email">Correo:</label>
                  			<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo">
                  			@error('email')
                  			    <span class="invalid-feedback" role="alert">
                  			        <strong>
                  			            {{ $message }}
                  			        </strong>    
                                </span>
                  			@enderror
                  		</div>
                  		<div class="form-group col-md-6">
                  			<label for="validar">Repetir Correo:</label>
                  			<input type="email" name="validar" class="form-control @error('validar') is-invalid @enderror" placeholder="Validar Contraseña">
                  			@error('validar')
                  			    <span class="invalid-feedback" role="alert">
                  			        <strong>
                  			            {{ $message }}
                  			        </strong>    
                                </span>
                  			@enderror
                  			
                  		</div>
                  	</div>
                  	<div class="row">
                         <div class="form-group col-md-12">
                  	    <label for="rol">Rol:</label>
                            <select name="rol" id="categoria" class="custom-select form-control @error ('rol') is-invalid @enderror ">
                                <option value=""></option>
                                <option value="Jefe de Hogar">Jefe de Hogar</option>
                                <option value="Lider de calle">Lider de calle</option>
                                <option value="Familia">Familia</option>
                             
                            </select>
                            @error('rol')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                  	</div>
                    </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>        







@endsection