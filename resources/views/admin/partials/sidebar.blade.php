<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
         <a class="app-menu__item {{ Route::currentRouteName() == 'admin.employee.create' ? 'active' : '' }}"
              href="{{ route('admin.employee.create') }}">
              <i class="app-menu__icon fa fa-home"></i>
            <span class="app-menu__label">Add Employee</span>
         </a>
         <a class="app-menu__item {{ Route::currentRouteName() == 'admin.employee.index' ? 'active' : '' }}"
            href="{{ route('admin.employee.index') }}">
            <i class="app-menu__icon fa fa-home"></i>
          <span class="app-menu__label">Employee List</span>
          </a>
          {{-- <a class="app-menu__item {{ Route::currentRouteName() == 'admin.employee.profile' ? 'active' : '' }}"
          href="{{ route('admin.employee.profile') }}">
          <i class="app-menu__icon fa fa-home"></i>
        <span class="app-menu__label">Profile</span>
        </a> --}}
         <a class="app-menu__item {{ Route::currentRouteName() == 'admin.department.index' ? 'active' : '' }}"
               href="{{ route('admin.department.index') }}">
               <i class="app-menu__icon fa fa-home"></i>
               <span class="app-menu__label">Department</span>
         </a>
          </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                <i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Settings</span>
            </a>
        </li>
    </ul>
</aside>
