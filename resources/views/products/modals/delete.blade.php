<form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
   
    <div class="modal fade text-left" id="ModalProductDelete{{$product['id']}}" tabindex="1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title">
                        Eliminar Producto  
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span> 
                    </button>
                </div>

                <div class="modal-body">

                    <input type="hidden" id="id" name="id" value="{{
                    $product['id']}}">

                    <h4>
                        Esta seguro de Eliminar el Producto
                        <strong>{{$product['nombre']}} ?</strong>
                    </h4>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Eliminar Producto</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

            </div>

        </div>
    
    </div> 

</form>
@include('sweetalert::alert')