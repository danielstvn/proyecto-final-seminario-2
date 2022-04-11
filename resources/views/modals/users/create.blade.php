<form action="{{url('/users/create')}}" method="GET" enctype="multipart/form-data">
    @csrf
   
    <div class="modal fade text-left" id="ModalUserCreate" tabindex="1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title">
                        Agregar usuario  
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span> 
                    </button>
                </div>

                <div class="modal-body">
          
                        <div class="form-group">
                          <label for="name">Nombres</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Nombres" required>
                        </div>

                        <div class="form-group">
                          <label for="last_name">Apellidos</label>
                          <input type="text" class="form-control" id="last_name" name="last_name"  placeholder="Apellidos" required>
                        </div>

                        <div class="form-group">
                            <label for="rol">Rol de usuario</label>
                            <select class="form-select form-control" aria-label="Default select example" id="rol" name="rol" required>
                                <option value="1" id="rol" selected>Administrador</option>
                                <option value="2" id="rol">Secretari@</option>
                                <option value="3" id="rol">Auxiliar Contable</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Correo electronico" required>
                        </div>

                        <div class="form-group">
                          <label for="contact">Contacto</label>
                          <input type="text" class="form-control" id="contact" name="contact" placeholder="Telefono de contacto" required>
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
                            <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="avenida panamericana  cr:27-12" required>
                          </div>

                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Nombre de la ciudad" required> 
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Agregar Usuario</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

            </div>

        </div>
    
    </div> 

</form>
@include('sweetalert::alert')