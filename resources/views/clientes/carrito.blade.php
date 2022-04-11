@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ url('/assets/client.css/estilos.client.css')}}">

    <div class="header-client">
  
    </div>
    
    <div class="container" style="margin-top: 150px;width: 100% auto">
        
           <!--Tabla de carrito-->
<div class="container-fluid mt--7">
<form action="{{url('/home/carrito/compra')}}" method="get">
        @csrf
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Carrito</h3>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-12">
                </div>

               
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Detalle</th>
                                    <th scope="col">Img</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0?>
                                 @foreach ($carrito as $product)
                                     <tr>
    
                                            <td>
                                                {{$product['nombre']}}
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
    
                                            <?php $total += $product['valor']?>
       
                                            
                                        
    
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    @if (@Auth::user()->hasRole('Cliente'))
                                                        
                                                        
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <a class="dropdown-item  btn-danger" href="#" data-toggle="modal" data-target="#ModalCarritoDelete{{$product['id']}}" 
                                                            >Eliminar</a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                           
                                            @include('clientes.modals.deleteCarrito')
                                            
                                    </tr>
                                   
                                    
                                    @endforeach                        
                                
                                </tbody>
                        </table>
                        
                    </div>
                    <div class="d-flex justify-content-center"  style="margin-top: 30px;max-height: 100px" >
                        {{$carrito->links()}}
                    </div>
                    <div class="card-footer py-4" >
                        <nav class="d-flex justify-content-end" aria-label="...">
                           @if ($total > 0)
                           <h2><strong>Total a pagar $</strong> {{$total}}</h2>
                           @else
                           <h3><strong>Aun no tienes Productos en el Carrito</strong></h3>
                           @endif
                        </nav>
                    </div>
                

                
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="idCliente" name="idCliente" value="{{ auth()->user()->id }}">Comprar</button>
    </div>
</form>
</div>

    @include('layouts.footers.footer')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

    
@endpush