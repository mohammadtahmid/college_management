<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid px-4 py-0">
                <img src="{{ asset('favicon.ico') }}" height="48rem" width="50rem"><a class="navbar-brand fw-bolder" href="{{ url('/') }}">Dhaka Central Polytechnic Institute</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 px-2 ms-auto mb-lg-0">
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder " href="about-us.html">About Us</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" href="{{ url('view_faculties') }}">Faculties</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" href="Courses.html">Courses</a>
                        </li>
                        <li class="nav-item dropdown px-2">
                            <a class="nav-link dropdown-toggle fw-bolder" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Notices
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item fw-bolder" href="{{ url('all_notices') }}">Notices / Notes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item px-2">
                            <a href="{{url('/login')}}" target="_blank" class="nav-link fw-bolder"><button type="button" class="btn btn-success"><i class="fa-solid fa-user"></i> Login</button></a>
                        </li>

                        <li class="nav-item px-2">
                            <a href="{{url('/register')}}" target="_blank" class="nav-link fw-bolder"><button type="button" class="btn btn-info"><i class="fa-solid fa-user-plus"></i> Register</button></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>
