<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{ url('admin/dashboard') }}"> <i class="icon-home"></i>Home </a></li>
                <li class="{{ Request::is('view_notice') ? 'active' : '' }}">
                    <a href="{{url('view_notice')}}"> <i class="icon-grid"></i>Notice </a>
                </li>

                <li class="{{ Request::is('view_slider') ? 'active' : '' }}">
                    <a href="{{url('view_slider')}}"> <i class="fa-solid fa-sliders"></i>Slider </a>
                </li>

                <li class="{{ Request::is('faculties') ? 'active' : '' }}">
                    <a href="{{url('faculties')}}"> <i class="fa-solid fa-user-group"></i>
                    Faculties </a>
                </li>

                <li class="{{ Request::is('infrastructure') ? 'active' : '' }}">
                    <a href="{{url('infrastructure')}}"> <i class="fa-solid fa-road-bridge"></i>
                    Faculties </a>
                </li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                  </ul>
                </li>
        </ul>
      </nav>
