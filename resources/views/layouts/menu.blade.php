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
    <a href="{{ route('penilaianKerja.index') }}" class="nav-link {{ Request::is('penilaianKerjas*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Penilaian Kerjas</p>
    </a>
</li>
