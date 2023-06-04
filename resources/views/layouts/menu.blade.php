<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>


@role('admin')


<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Permissions</p>
    </a>
</li>
@endrole



<li class="nav-item">
    <a href="{{ route('penilaianKerjas.index') }}" class="nav-link {{ Request::is('penilaianKerjas*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Penilaian Kerjas</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pemisahs.index') }}" class="nav-link {{ Request::is('pemisahs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Pemisahs</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('logs.index') }}" class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Logs</p>
    </a>
</li>
