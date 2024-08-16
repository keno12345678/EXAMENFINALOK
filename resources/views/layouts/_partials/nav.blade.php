<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{route('web.home')}}" class="{{ request()->routeIs('web.home') ? 'active' : '' }}" >Home</a></li>
        <li><a href="{{route('web.servicios')}}" class="{{ request()->routeIs('web.servicios') ? 'active' : '' }}">Servicios</a></li>
        <li><a href="{{route('web.proyectos')}}" class="{{ request()->routeIs('web.proyectos') ? 'active' : '' }}">Proyectos</a></li>
        <li><a href="{{route('web.clientes')}}" class="{{ request()->routeIs('web.clientes*') ? 'active' : '' }}">Clientes</a></li>
        <li><a href="{{route('web.blog')}}" class="{{ request()->routeIs('web.blog') ? 'active' : '' }}">Blog</a></li>
        <li><a href="{{route('web.contacto')}}" class="{{ request()->routeIs('web.contacto') ? 'active' : '' }}">Contacto</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>