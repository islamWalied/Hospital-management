<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('home')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('show-appointment')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Appointments</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#doctor" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                <span class="menu-title">Doctors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="doctor">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('view_doctors')}}">View Doctor</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('view_add_doctor')}}">Add Doctors</a></li>
                </ul>
            </div>
        </li>
{{--        <li class="nav-item menu-items">--}}
{{--            <a class="nav-link" href="pages/forms/basic_elements.html">--}}
{{--              <span class="menu-icon">--}}
{{--                <i class="mdi mdi-playlist-play"></i>--}}
{{--              </span>--}}
{{--                <span class="menu-title">Add Doctor</span>--}}
{{--            </a>--}}
{{--        </li>--}}



    </ul>
</nav>
