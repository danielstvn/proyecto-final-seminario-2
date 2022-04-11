<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', ' Dashboard') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
           <!-- Extra details for Live View on GitHub Pages -->

   
</head>
<body class="clickup-chrome-ext_installed">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
        <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
<div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="{{ route('home') }}">
        <h1>Sysdesing</h1>
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                    </span>
                </div>
            </a>
            @include('layouts.navbars.navs.navbar_user')
        </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
       

        <!-- Navigation -->
        @if(@Auth::user()->hasRole('Administrador'))

            @include('layouts.navbars.sides.navbar_menu_admin')

            @endif

            @if(@Auth::user()->hasRole('Cliente'))

            @include('layouts.navbars.sides.navbar_menu_client')

            @endif
       
        
    </div>
</div>
</nav>                
    <div class="main-content">
        <!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
<div class="container-fluid">
    
    <!-- Form -->
    <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
        <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
            </div>
        </div>
    </form>
    <!-- User -->
    <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                    </div>
                </div>
            </a>
           @include('layouts.navbars.navs.navbar_user')
        </li>
    </ul>
</div>
</nav>    
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>


<!--Tabla de usuarios-->
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Pedidos</h3>
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
                                <th scope="col">Tipo</th>
                                <th scope="col">Material</th>
                                <th scope="col">Color</th>
                                <th scope="col">Detalle</th>
                                <th scope="col">Img</th>
                                <th scope="col">Valor</th>

                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($pedidos as $product)
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
                               
                                
                                @endforeach                        
                            
                            </tbody>
                    </table>
                    
                </div>
                <div class="d-flex justify-content-center"  style="margin-top: 30px;max-height: 100px" >
                    {{$pedidos->links()}}
                </div>
                <div class="card-footer py-4" >
                    <nav class="d-flex justify-content-end" aria-label="...">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
        

    @include('layouts.footers.footer')

    
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
            
    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>


    <!-- ABRIR MODAL CON JAVASCRIPT-->
    
   {{--- <script>
        $(document).ready(function(){
            $('.modalEdit').on('click',function(){
                $('#ModalUserEdit').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#id').val(data[0]);
                $('#name').val(data[1]);
                $('#last_name').val(data[2]);
                $('#email').val(data[3]);
                $('#contact').val(data[4]);
                $('#rol').val(data[5]);
                $('#genero').val(data[6]);
                $('#domicilio').val(data[7]);
                $('#ciudad').val(data[8]);
          
                
            })
        })
        
    </script>--}}
       
    
</body></html>
