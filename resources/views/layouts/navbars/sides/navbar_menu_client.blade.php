<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#navbar-products" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-products">
            <i class="fab fa-laravel" style="color: #f4645f;"></i>
            <span class="nav-link-text" style="color: #f4645f;">{{ __('Productos') }}</span>
        </a>

        <div class="collapse show" id="navbar-products">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home/ventanas')}}">
                        {{ __('Ventanas') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home/puertas')}}">
                        {{ __('Puertas') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home/vidrios')}}">
                        {{ __('Vidrios') }}
                    </a>
                </li>

            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link active" href="#navbar-diseno" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-diseno">
            <i class="ni ni-planet text-blue" style="color: #f4645f;"></i> 
            <span class="nav-link-text" style="color: #f4645f;">{{ __('Diseño de productos') }}</span> 
        </a>

        <div class="collapse show" id="navbar-diseno">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home/create/desing')}}">
                        {{ __('Crear nuevo diseño') }}
                    </a>
                </li>
                
            </ul>

            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home/show/desings')}}">
                        {{ __('Diseños Creados') }}
                    </a>
                </li>
                
            </ul>
        </div>

    </li>

    <li class="nav-item">
        <a class="nav-link active" href="#navbar-carrito" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-carrito">
            <i class="ni ni-planet text-blue" style="color: #f4645f;"></i> 
            <span class="nav-link-text" style="color: #f4645f;">{{ __('Carrito') }}</span> 
        </a>

        <div class="collapse show" id="navbar-carrito">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home/carrito')}}">
                        {{ __('Produtos Solicitados') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home/cliente/compras')}}">
                        {{ __('Produtos Comprados') }}
                    </a>
                </li>
                
            </ul>
        </div>

    </li>
    
    
                   
</ul>