<div class="sidebar-body">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
      <a href="/home" class="nav-link">
        <i class="link-icon" data-feather="box"></i>
        <span class="link-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item {{ Request::is('owners*') ? 'active' : '' }}">
      <a class="nav-link" href="/owners" role="button" aria-expanded="{{ is_active_route(['owners/*']) }}"
        aria-controls="owners">
        <i class="link-icon" data-feather="users"></i>
        <span class="link-title">Owners</span>
      </a>
    </li>

    <li class="nav-item {{ Request::is('tenants*') ? 'active' : '' }}">
      <a class="nav-link" href="/tenants" role="button" aria-expanded="{{ is_active_route(['tenants/*']) }}"
        aria-controls="tenants">
        <i class="link-icon" data-feather="users"></i>
        <span class="link-title">Tenants</span>
      </a>
    </li>

    <li class="nav-item nav-category ">Admin</li>

    <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
      <a class="nav-link" href="/users" role="button" aria-expanded="{{ is_active_route(['users/*']) }}"
        aria-controls="users">
        <i class="link-icon" data-feather="users"></i>
        <span class="link-title">Users</span>
      </a>
    </li>

    <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
      <a class="nav-link" href="/roles" role="button" aria-expanded="{{ is_active_route(['roles/*']) }}"
        aria-controls="roles">
        <i class="link-icon" data-feather="lock"></i>
        <span class="link-title">Roles</span>
      </a>
    </li>

  </ul>
</div>