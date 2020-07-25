@extends('layouts.lte3')

@section('content')


 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de usuarios Registrado</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Correo</th>
                      <th>Rol</th>
                      <th>Modo</th>
                    </tr>
                  </thead>
                  <tbody>
                   
						@foreach($datos as $value)
							<tr>
								<td>{{ $value->id }}</td>
								<td>{{ $value->name }}</td>
								<td>{{ $value->apellidos }}</td>
								<td>{{ $value->email }}</td>
								<td>{{ $value->rol }}</td>
                                <td>
                                    <form action="" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                            <div class="btn-group show">
                                                <button type="button" class="btn btn-info">Editar</button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Status</button>
                                            </div>
                                    </form>
                                    
                                </td>
							</tr>
						@endforeach
                   </tbody>
                </table> 
              </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      {{ $datos->links() }}
                    </ul>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
        </div>
        
                     
<!--        MODAL                                       -->
<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Datos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de Usuarios</h3>
              </div>        
				                
              <form role="form"action="">
              	@csrf
              	{{ method_field('PATCH') }}
                <div class="card-body">
                	<div class="row">
                  		<div class="form-group col-md-6">
                    		<label for="nombres">Nombres:</label>
                    		<input type="text" class="form-control" name="nombres" placeholder="Nombres" value="{{ $value->name }}" >
                    		
                  		</div>
                  		<div class="form-group col-md-6">
                    		<label for="apellidos">Apellidos:</label>
                    		<input type="text" class="form-control " name="apellidos" id="apellidos" placeholder="Apellidos">
                    		
                  		</div>
              		</div>
              		{{--<div class="row">
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
                </div>--}}
              </form>
            </div>
                
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
              
            
@endsection