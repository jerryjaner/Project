@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp


<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&background=bc3d4f&color=fff" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item mb-2">
                <a href="{{ route('home') }}" class="nav-link {{($route == 'home')?'active':''}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('familyprofile.index') }}"  class="nav-link {{($route == 'familyprofile.index')?'active':''}}">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        Family Profile
                    </p>
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('users.index') }}" class="nav-link {{($route == 'users.index')?'active':''}}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        {{ __('Users') }}
                    </p>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        {{ __('Sign Out') }}
                    </p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->


