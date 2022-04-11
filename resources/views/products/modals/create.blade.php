<form action="{{url('/products/create')}}" method="GET" enctype="multipart/form-data">
    @csrf
   
    <div class="modal fade text-left" id="ModalProductCreate" tabindex="1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title">
                        Agregar Producto  
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span> 
                    </button>
                </div>

                <div class="modal-body">
          
                   
                    <div class="form-group">
                      <label for="name">Nombre Producto</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
                    </div>

                    <div class="form-group form-row ">
                        <label for="rol"  class="form-group col-md-12">Tipo de producto</label>
                       
                        <select class="form-select form-control" aria-label="Default select example" id="tipo" name="tipo" required>
                            <option value="Corrediza" id="tipo" selected>Corrediza</option>
                            <option value="Proyectante" id="tipo">Proyectante</option>
                            <option value="Pared" id="tipo">Pared</option>
                          </select>
                    </div>

                    <div class="form-group form-row ">
                        <label for="rol"  class="form-group col-md-12">Material del producto</label>

                        <select class="form-select form-control " aria-label="Default select example" id="material" name="material" required>
                            <option value="Vidrio" id="material" selected>Vidrio</option>
                            <option value="Proyectante" id="material">Aluminio</option>
                            
                          </select>
                    </div>

                    <div class="form-group form-row ">
                        <label for="rol"  class="form-group col-md-12">Color del producto</label>
                        
                        <select class="form-select form-control " aria-label="Default select example" id="color" name="color" required>
                            <option value="Natural Blanco" id="color" selected>Natural Blanco</option>
                            <option value="Crudo" id="color">crudo</option>
                            <option value="Anolok" id="color">Anolok</option>
                            <option value="Negro Poliester" id="color">Negro Poliester</option>
                            
                          </select>
                    </div>

                    <div class="form-group">
                      <label for="contact">Detalle</label>
                      <textarea name="detalle" id="detalle" class="form-control" placeholder="Detalle del producto"></textarea>
                    </div>

                    <div class="form-group form-row ">
                        <label for="rol"  class="form-group ">Imagen</label>
                   
                        <input type="text" class="form-control" id="img" name="img" placeholder="Url de la imagen">
                        
                    </div>

                    <div class="form-group">
                        <label for="valor">Precio</label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Precio del producto $" >
                      </div>

            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Agregar Producto</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

            </div>

        </div>
    
    </div> 

</form>
@include('sweetalert::alert')