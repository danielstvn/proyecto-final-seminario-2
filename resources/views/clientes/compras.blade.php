@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ url('/assets/client.css/estilos.client.css')}}">

    <div class="header-client">
  
    </div>
    
    <div class="container" style="margin-top: 150px;width: 100% auto">
        
           <!--Tabla de carrito-->
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Tus Compras</h3>
                        </div>
                        
                    </div>
                </div>
                
                <?php 
                
                $numcompras=0;
                $auxcompra=-1;
                $fecha ='';
                $total=0;
                    foreach ($compras as $key ) {
                        if($key['idCliente'] == Auth()->user()->id) {
                            if($auxcompra != $key['numcompra']){
                                $auxcompra = $key['numcompra'];
                                $numcompras +=1;
                            }
                        }
                    }           
                ?>

                @if ($numcompras == 0)

                <div class="card">
                    <div class="card-body">
                      <h1>Aun no has realizado tu primera compra</h1>
                    </div>
                  </div>
                    
                @endif

                <div class="row">
                @for ($i = 0; $i < $numcompras; $i++)
                
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                            Compra N°:  {{$i}}
                            </div>
                            <div class="card-body">
                                @foreach ($compras as $key)
                                        @if ($i == $key['numcompra'])                   
                                            <?php $fecha = $key['created_at']?>    
                                        @endif
                                    @endforeach
                                <h4 class="card-title"><strong>Fecha de Compra: 
                                    {{$fecha}}
                                </strong> </h4>

                            
                            
                            <h3><strong>Productos:</strong></h3>

                            @foreach ($compras as $key)
                                 @if ($i == $key['numcompra'])                   
                                    {{$key['nombre']}}
                                @endif
                            @endforeach
                            <br><br>

                            @foreach ($compras as $key)
                            @if ($i == $key['numcompra'])                   
                               <?php  $total+=$key['valor']?>
            
                            @endif
                            @endforeach  

                            <h2 class="card-text">
                                    <strong>Por un Valor de: $</strong>
                                    {{$total}}
                            </h2>
                           

                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ModalShowFactura{{$i}}" >Ver compra</a>

                             
                            </div>
                           
                        </div>
                       
                    </div>
                    @include('clientes.modals.showFacturas') 
                    
                @endfor
               
            </div>

        

            

                  

            </div>
        </div>
    </div>
    



    </div>

    @include('layouts.footers.footer')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

    
@endpush