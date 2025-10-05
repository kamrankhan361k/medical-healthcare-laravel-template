<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <li class="label">Main</li>
                <li class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}">
                    <a class="sidebar-sub-toggle">
                        <i class="ti-home"></i> Dashboard
                        <span class="badge badge-primary">6</span>
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('admin.dashboard.1') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard.1') }}">Dashboard 1</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.dashboard.2') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard.2') }}">Dashboard 2</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.dashboard.3') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard.3') }}">Dashboard 3</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.dashboard.5') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard.5') }}">Dashboard 5</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.dashboard.6') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard.6') }}">Dashboard 6</a>
                        </li>
                    </ul>
                </li>

                <!-- School Management -->
                <li class="label">School</li>
                <li class="{{ request()->is('admin/school*') ? 'active' : '' }}">
                    <a class="sidebar-sub-toggle">
                        <i class="ti-pencil-alt"></i>Management
                        <span class="badge badge-primary">28</span>
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('admin.school.student') ? 'active' : '' }}">
                            <a href="{{ route('admin.school.student') }}">Student</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.school.student-profile') ? 'active' : '' }}">
                            <a href="{{ route('admin.school.student-profile') }}">Student Profile</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.school.student-details') ? 'active' : '' }}">
                            <a href="{{ route('admin.school.student-details') }}">Student Detail</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.school.hostel-room') ? 'active' : '' }}">
                            <a href="{{ route('admin.school.hostel-room') }}">Hostel</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.school.all-student-table') ? 'active' : '' }}">
                            <a href="{{ route('admin.school.all-student-table') }}">Students Table</a>
                        </li>
                        <!-- Add other school menu items similarly -->
                    </ul>
                </li>

                <!-- Restaurant -->
                <li class="label">Restaurant</li>
                <li class="{{ request()->is('admin/restaurant*') ? 'active' : '' }}">
                    <a class="sidebar-sub-toggle">
                        <i class="ti-cup"></i> Restaurant
                        <span class="badge badge-primary">7</span>
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('admin.restaurant.menu.one') ? 'active' : '' }}">
                            <a href="{{ route('admin.restaurant.menu.one') }}">Menu One</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.restaurant.menu.two') ? 'active' : '' }}">
                            <a href="{{ route('admin.restaurant.menu.two') }}">Menu Two</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.restaurant.menu.three') ? 'active' : '' }}">
                            <a href="{{ route('admin.restaurant.menu.three') }}">Menu Three</a>
                        </li>
                        <!-- Add other restaurant menu items -->
                    </ul>
                </li>

                <!-- Apps -->
                <li class="label">Apps</li>
                <li class="{{ request()->is('admin/charts*') ? 'active' : '' }}">
                    <a class="sidebar-sub-toggle">
                        <i class="ti-bar-chart-alt"></i> Charts
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('admin.charts.flot') ? 'active' : '' }}">
                            <a href="{{ route('admin.charts.flot') }}">Flot</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.charts.morris') ? 'active' : '' }}">
                            <a href="{{ route('admin.charts.morris') }}">Morris</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.charts.chartjs') ? 'active' : '' }}">
                            <a href="{{ route('admin.charts.chartjs') }}">Chartjs</a>
                        </li>
                        <!-- Add other chart menu items -->
                    </ul>
                </li>

                <li class="{{ request()->routeIs('admin.calender') ? 'active' : '' }}">
                    <a href="{{ route('admin.calender') }}"><i class="ti-calendar"></i> Calender </a>
                </li>
                <li class="{{ request()->routeIs('admin.email') ? 'active' : '' }}">
                    <a href="{{ route('admin.email') }}"><i class="ti-email"></i> Email</a>
                </li>
                <li class="{{ request()->routeIs('admin.profile') ? 'active' : '' }}">
                    <a href="{{ route('admin.profile') }}"><i class="ti-user"></i> Profile</a>
                </li>

                <!-- Add other menu sections similarly -->

                <li class="label">Miscellaneous</li>
                <li class="{{ request()->is('admin/pages*') ? 'active' : '' }}">
                    <a class="sidebar-sub-toggle">
                        <i class="ti-target"></i> Pages
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('admin.login') ? 'active' : '' }}">
                            <a href="{{ route('admin.login') }}">Login</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.register') ? 'active' : '' }}">
                            <a href="{{ route('admin.register') }}">Register</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.forgot-password') ? 'active' : '' }}">
                            <a href="{{ route('admin.forgot-password') }}">Forgot password</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ti-power-off"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
