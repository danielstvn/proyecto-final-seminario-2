@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ url('/assets/client.css/estilos.client.css')}}">

    <div class="header-client">
  
    </div>
    
    <div class="container">
        <h1>Puertas</h1>

        <header>
            <ul>
              <i class='fa fa-shopping-cart'>
                <span class='counter'></span>
              </i>
            </ul>
        </header>

        <form action="{{url('/home/addcarrito')}}" method="post">
            @csrf
            <input type="hidden" id="idCliente" name="idCliente" value="{{ auth()->user()->id }}">
            <div class="row form-row">
                @foreach ($puertas as $product)
                <div class="product--blue form-control form-group col-md-8">
                    <div class="product_inner">
                        <img src="{{$product['img']}}" width='200'>
                        <h1 style="padding: 20px;
                        color: #297DB5;"><strong>{{$product['nombre']}}</strong></h1>
                        <h3 style=" color: #31364A;"><strong>{{$product['tipo']}}</strong></h1>
                        <h1 style="padding: 20px;
                        color: #B83B6C;"><strong>{{$product['valor']}}</strong></h1>
                        <button type="submit" id="id" name="id" value="{{$product['id']}}"">Add to Carrito</button>
                    </div>
                    <div class='product_overlay'>
                        <h2>Agregado al carrito</h2>
                        <i class='fa fa-check'></i>
                    </div>
                </div>  
                @endforeach  
            </div>
        </form>
           

   
           
        
       
    </div>

    @include('layouts.footers.footer')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

    <script>
$(function() {

"use strict"

var init = "Carrito vacio!";
var counter = 0;

// Initial Cart
$(".counter").html(init);

// Add Items To Basket
function addToBasket() {
  counter++;
  $(".counter").html(counter).animate({
    'opacity' : '0'
  },300, function() {
    $(".counter").delay(300).animate({
      'opacity' : '1'
    })
  })
}

// Add To Basket Animation
$("button").on("click", function() {
  addToBasket(); $(this).parent().parent().find(".product_overlay").css({
    'transform': ' translateY(0px)',
    'opacity': '1',
    'transition': 'all ease-in-out .45s'
  }).delay(1500).queue(function() {
    $(this).css({
      'transform': 'translateY(-500px)',
      'opacity': '0',
      'transition': 'all ease-in-out .45s'
    }).dequeue();
  });
});
});
    </script>
@endpush