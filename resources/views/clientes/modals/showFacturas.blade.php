
    <div class="modal fade text-left" id="ModalShowFactura{{$i}}" tabindex="1" role="dialog" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title">
                        Factura N° {{$i}}  
                    </h2>
                    

                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span> 
                    </button>

                    
                </div>

                <div class="text-left" style="margin-left: 20px">
                   
                    <h3 >
                        <strong>Fecha de compra: </strong> {{$fecha}}
                    </h3>

                </div>

                <div class="text-right" style="margin-right: 50px">
                   
                    <h2 >
                        <strong>Total $</strong> {{$total}}
                    </h2>
                </div>

                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Detalle</th>
                                    <th scope="col">Img</th>
                                    <th scope="col">Valor</th>
    
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($compras as $product)
                                     @if ($i == $product['numcompra'])
                                     <tr>
    
                                        <td>
                                            {{$product['nombre']}}
                                        </td>

                                        <td>
                                            {{$product['tipo']}}
                                        </td>

                                        <td>
                                            {{$product['material']}}
                                        </td>

                                        <td>
                                            {{$product['color']}}
                                        </td>

                                        <td>
                                            {{$product['detalle']}}
                                        </td>

                                        <td>
                                            <img src="{{$product['img']}}" alt="imagen producto" style="width: 50px;height: 50px;">
                                        </td>

                                        <td>
                                            {{$product['valor']}}
                                        </td> 

                                        
                                        
                                </tr>
                                         
                                     @endif
                                   
                                    
                                    @endforeach                        
                                
                                </tbody>
                        </table>

                </div>
          
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                
                </div>


            </div>

        </div>
    
    </div> 

