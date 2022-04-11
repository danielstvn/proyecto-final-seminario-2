<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#navbar-user" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-user">
            <i class="fab fa-laravel" style="color: #f4645f;"></i>
            <span class="nav-link-text" style="color: #f4645f;">Cuenta de Usuario</span>
        </a>

        <div class="collapse show" id="navbar-user">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('profile') }}">
                        Perfil de Usuario
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('users') }}">
                        Gestion de Usuarios
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link active" href="#navbar-products" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-products">
            <i class="ni ni-planet text-blue"></i> 
            <span class="nav-link-text" style="color: #f4645f;">Productos</span>
        </a>

        <div class="collapse show" id="navbar-products">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/products')}}">
                       Inventario
                    </a>
                </li>
                
            </ul>
        </div>

    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('/product/pedidos')}}">
          <i class="ni ni-bullet-list-67 text-default"></i>
          <span class="nav-link-text"> Pedidos</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-circle-08 text-pink"></i> API
        </a>
    </li>
    
</ul>