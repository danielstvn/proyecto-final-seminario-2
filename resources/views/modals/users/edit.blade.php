<form action="{{url('/users')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
    <div class="modal fade text-left" id="ModalUserEdit{{$user['id']}}" tabindex="1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title">
                        Editar usuario  
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span> 
                    </button>
                </div>

                <div class="modal-body">

                    <input type="hidden"  id="id" name="id" value="{{$user['id']}}">
          
                        <div class="form-group">
                          <label for="name">Nombres</label>
                          <input type="text" class="form-control" id="name" name="name"  value="{{$user['name']}}">
                        </div>

                        <div class="form-group">
                          <label for="last_name">Apellidos</label>
                          <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user['last_name']}} ">
                        </div>

                        <div class="form-group">
                            <label for="rol">Rol de usuario</label>
                            <select class="form-select form-control" aria-label="Default select example" id="rol" name="rol" required>
                                <option value="Administrador" id="rol" selected>Administrador</option>
                                <option value="Secretari@" id="rol">Secretari@</option>
                                <option value="Auxiliar Contable" id="rol">Auxiliar Contable</option>
                                <option value="Cliente" id="rol">Cliente</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$user['email']}}">
                        </div>

                        <div class="form-group">
                          <label for="contact">Contacto</label>
                          <input type="text" class="form-control" id="contact" name="contact"  value="{{$user['contact']}}">
                        </div>

                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <select class="form-select form-control" aria-label="Default select example" id="genero" name="genero" required>
                                <option value="M" id="genero" selected>Masculino</option>
                                <option value="F" id="genero">Femenino</option>
                                <option value="O" id="genero">Otro</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="domicilio">Domicilio</label>
                            <input type="text" class="form-control" id="domicilio" name="domicilio"  value="{{$user['domicilio']}}" >
                          </div>

                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad"  value="{{$user['ciudad']}}">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

            </div>

        </div>
    
    </div> 

</form>
@include('sweetalert::alert')