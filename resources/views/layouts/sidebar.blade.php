<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:;" class="brand-link" style="text-align: center">
        <span class="brand-text font-weight-light" style="font-weight: bold !important; font-size: 30px">EMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                @if (Auth::user()->user_type == 1)
                    <li class="nav-item">
                        <a href="{{ url('/admin/dashboard') }}"
                            class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.list') }}"
                            class="nav-link @if (Request::segment(2) == 'admin') active @endif">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Admin
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('teacher.list') }}"
                            class="nav-link @if (Request::segment(2) == 'teacher') active @endif">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Teacher
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('student.list') }}"
                            class="nav-link @if (Request::segment(2) == 'student') active @endif">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Student
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('class.list') }}"
                            class="nav-link @if (Request::segment(2) == 'class') active @endif">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Class
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('subject.list') }}"
                            class="nav-link @if (Request::segment(2) == 'subject') active @endif">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Subject
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('assign_subject.list') }}"
                            class="nav-link @if (Request::segment(2) == 'assign_subject') active @endif">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Assign Subject
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('assign_class_teacher.list') }}"
                            class="nav-link @if (Request::segment(2) == 'assign_class_teacher') active @endif">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Assign Class Teacher
                            </p>
                        </a>
                    </li>

                @elseif(Auth::user()->user_type == 2)
                    <li class="nav-item">
                        <a href="{{ url('/teacher/dashboard') }}"
                            class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>
                    </li>

                @elseif(Auth::user()->user_type == 3)

                    <li class="nav-item">
                        <a href="{{ url('/student/dashboard') }}"
                            class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/student/my_subject') }}"
                            class="nav-link @if (Request::segment(2) == 'my_subject') active @endif">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                My Subject

                            </p>
                        </a>
                    </li>

                @elseif(Auth::user()->user_type == 4)
                    <li class="nav-item">
                        <a href="{{ url('/parent/dashboard') }}"
                            class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>
                    </li>
                @endif


                <li class="nav-item">
                    <a href="{{ route('auth.logout') }}" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
