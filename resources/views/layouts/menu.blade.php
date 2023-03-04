<li class="side-menus">
    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">
    <i class="fas fa-house"></i><span>Dashboard</span>
    </a>

    <a class="nav-link {{ Request::is('usuarios') ? 'active' : '' }}" href="/usuarios">
        <i class="fas fa-boxes"></i><span>Usuarios</span>
    </a>

    <a class="nav-link {{ Request::is('roles') ? 'active' : '' }}" href="/roles">
    <i class="fas fa-bars"></i><span>Roles</span>
    </a>

    <a class="nav-link {{ Request::is('cortes') ? 'active' : '' }}" href="/cortes">
    <i class="fas fa-table"></i><span>Cortes</span>
    </a>
</li>
