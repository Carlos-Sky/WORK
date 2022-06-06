<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">


        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>

        </button>


        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>

        </div>



    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">



        <div class="container-fluid">


            <button type="button" class="btn btn-white btn-border btn-round mr-2">Inicio</button>



            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <div class="dropdown ml-md-auto py-2 py-md-0">
                    <button type="button" class="btn btn-white dropdown-toggle btn-border btn-round mr-2"
                        data-toggle="dropdown">
                        Usuario
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        <a class="dropdown-item"
                            href="https://zety.com/lp/cv-maker?utm_source=google&utm_medium=sem&utm_campaign=13139523335&utm_term=curriculum%20vitae%20builder%20online&network=g&device=c&adposition=&adgroupid=123179898235&placement=&utm_source=google&utm_medium=sem&utm_campaign=13139523335&utm_term=curriculum%20vitae%20builder%20online&network=g&device=c&adposition=&adgroupid=123179898235&placement=&gclid=Cj0KCQjwheyUBhD-ARIsAHJNM-NlAl5kHZizZi7xCqXSrz9vvFv1KIpoxnkGHDB1bjvdao0d6UcAesMaAp_6EALw_wcB">Crear
                            CV's</a>


                    </div>
                </div>
                <br>


                <div class="dropdown">
                    <button type="button" class="btn btn-white dropdown-toggle btn-border btn-round mr-2"
                        data-toggle="dropdown">
                        Empresa
                    </button>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}

                            <a class="dropdown-item" href="#">Publicar empleos</a>
                    </div>
                </div>



                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                    </a>
                    <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                        <div class="quick-actions-header">
                            <span class="title mb-1">Acciones rápidas</span>
                            <span class="subtitle op-8">Atajos</span>
                        </div>
                        <div class="quick-actions-scroll scrollbar-outer">
                            <div class="quick-actions-items">
                                <div class="row m-0">
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-file-1"></i>
                                            <span class="text">Crear CV's</span>
                                        </div>
                                    </a>

                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-pen"></i>
                                            <span class="text">Crear nueva publicacion</span>
                                        </div>
                                    </a>



                                </div>
                            </div>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile"
                                            class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        <h4>Usuario-Nombre</h4>
                                        <p class="text-muted">mi@correo.com</p><a href="profile.html"
                                            class="btn btn-xs btn-secondary btn-sm">Ver perfil</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>


                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </div>
                    </ul>

                </li>









            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
