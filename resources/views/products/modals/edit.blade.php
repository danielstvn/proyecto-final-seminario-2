<form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
    <div class="modal fade text-left" id="ModalProductEdit{{$product['id']}}" tabindex="1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title">
                        Editar Producto  
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span> 
                    </button>
                </div>

                <div class="modal-body">

                    <input type="hidden"  id="id" name="id" value="{{$product['id']}}">
          
                        <div class="form-group">
                          <label for="name">Nombre Producto</label>
                          <input type="text" class="form-control" id="nombre" name="nombre"  value="{{$product['nombre']}}">
                        </div>

                        <div class="form-group form-row ">
                            <label for="rol"  class="form-group col-md-12">Tipo de producto</label>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control"   value="{{$product['tipo']}}" disabled>
                            </div>

                            
                            <select class="form-select form-control col-md-6" aria-label="Default select example" id="tipo" name="tipo" required>
                                <option value="Corrediza" id="tipo" selected>Corrediza</option>
                                <option value="Proyectante" id="tipo">Proyectante</option>
                                <option value="Pared" id="tipo">Pared</option>
                              </select>
                        </div>

                        <div class="form-group form-row ">
                            <label for="rol"  class="form-group col-md-12">Material del producto</label>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control"   value="{{$product['material']}}" disabled>
                            </div>

                            
                            <select class="form-select form-control col-md-6" aria-label="Default select example" id="material" name="material" required>
                                <option value="Vidrio" id="material" selected>Vidrio</option>
                                <option value="Proyectante" id="material">Aluminio</option>
                                
                              </select>
                        </div>

                        <div class="form-group form-row ">
                            <label for="rol"  class="form-group col-md-12">Color del producto</label>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control"   value="{{$product['color']}}" disabled>
                            </div>

                            
                            <select class="form-select form-control col-md-6" aria-label="Default select example" id="color" name="color" required>
                                <option value="Natural Blanco" id="color" selected>Natural Blanco</option>
                                <option value="Crudo" id="color">crudo</option>
                                <option value="Anolok" id="color">Anolok</option>
                                <option value="Negro Poliester" id="color">Negro Poliester</option>
                                
                              </select>
                        </div>

                        <div class="form-group">
                          <label for="contact">Detalle</label>
                          <textarea name="detalle" id="detalle" class="form-control" >{{$product['detalle']}}</textarea>
                        </div>

                        <div class="form-group form-row ">
                            <label for="rol"  class="form-group col-md-12">Imagen</label>
                            <div class="form-group col-md-4">
                                <img src="{{$product['img']}}" alt="imagen producto" style="width: 80px;height: 80px;">
                            </div>

                            <input type="text" class="form-control col-md-8" id="img" name="img" placeholder="Url de la imagen" value="{{$product['img']}}">
                            
                        </div>

                        <div class="form-group">
                            <label for="valor">Precio</label>
                            <input type="text" class="form-control" id="valor" name="valor"  value="{{$product['valor']}}" >
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