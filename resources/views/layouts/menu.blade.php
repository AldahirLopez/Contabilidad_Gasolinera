<li class="side-menus">
    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">
    <i class="fas fa-house"></i><span>Dashboard</span>
    </a>

    <a class="nav-link {{ Request::is('productos') ? 'active' : '' }}" href="/productos">
        <i class="fas fa-boxes"></i><span>Inventario</span>
    </a>

    <a class="nav-link {{ Request::is('categorias') ? 'active' : '' }}" href="/categorias">
    <i class="fas fa-bars"></i><span>Categorias</span>
    </a>

    <a class="nav-link {{ Request::is('entradas') ? 'active' : '' }}" href="/entradas">
    <i class="fas fa-truck-ramp-box"></i><span>Entradas de material</span>
    </a>
    </a> 
</li>
