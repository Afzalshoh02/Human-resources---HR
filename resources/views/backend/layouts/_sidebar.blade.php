<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('logout') }}">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
        <img src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(\Illuminate\Support\Facades\Auth::user()->profile_image)
                    <img src="{{ url('upload/'.\Illuminate\Support\Facades\Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                @if(\Illuminate\Support\Facades\Auth::user()->is_role == '1')

                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link
                    @if(\Illuminate\Support\Facades\Request::segment(2) == 'dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/employees') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'employees') active @endif">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Employees
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/jobs') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'jobs') active @endif">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p>
                            Jobs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/job_history') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'job_history') active @endif">
                        <i class="nav-icon fa fa-history"></i>
                        <p>
                            Job History
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/job_grades') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'job_grades') active @endif">
                        <i class="nav-icon fa fa-star"></i>
                        <p>
                            Job Grades
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/regions') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'regions') active @endif">
                        <i class="nav-icon fa fa-asterisk"></i>
                        <p>
                            Regions
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/countries') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'countries') active @endif">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            Countries
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/location') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'location') active @endif">
                        <i class="nav-icon fa fa-map-marked-alt"></i>
                        <p>
                            Location
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/department') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'department') active @endif">
                        <i class="nav-icon fa fa-building"></i>
                        <p>
                            Department
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/manager') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'manager') active @endif">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Manager
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/payroll') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'payroll') active @endif">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p>
                            Pay Roll
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/position') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'position') active @endif">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Position
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/my_account') }}" class="nav-link
                       @if(\Illuminate\Support\Facades\Request::segment(2) == 'my_account') active @endif">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            My account
                        </p>
                    </a>
                </li>

                @endif

                @if(\Illuminate\Support\Facades\Auth::user()->is_role == '0')
                        <li class="nav-item">
                            <a href="{{ url('employees/dashboard') }}" class="nav-link
                            @if(\Illuminate\Support\Facades\Request::segment(2) == 'dashboard') active @endif">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/interview') }}" class="nav-link
                                @if(\Illuminate\Support\Facades\Request::segment(2) == 'interview') active @endif">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Interview
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ url('employees/my_account') }}" class="nav-link
                            @if(\Illuminate\Support\Facades\Request::segment(2) == 'my_account') active @endif">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                                My account
                            </p>
                            </a>
                        </li>
                @endif

            </ul>
        </nav>
    </div>
</aside>
