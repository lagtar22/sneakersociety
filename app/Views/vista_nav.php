<body class="beige">
    <nav class="navbar navbar-expand-lg fixed-top sticky-top navbar-light bg-marron" >
        <!-- elementos de la barra de navegación -->
        <div class="container-fluid ">
            <div class="navbar-header">
                <a class="navbar-brand me-auto barra" href="<?php echo base_url('/')?>">
                    <!-- logo/marca de la empresa -->
                    <img src="<?php echo base_url('assets/img/Logo/logo1.jpg')?>" alt="Logo" loading="lazy" width="100" height="40" class="img-fluid"/>
                </a>
            </div>
            <!-- hamburguesa / boton de colapso -->
            <button class="navbar-toggler btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#opciones" aria-controls="opciones" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Contenido del nav -->
            <div id="opciones" class="collapse navbar-collapse">
                <ul class="nav navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">

                    <!-- Version Administrador -->
                    <?php if(session()->is_logged && session()->us_Perfil_id == 1): ?>
                    <!-- Productos -->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('productos'))?>" class="nav-link beige">Productos</a>
                    </li>
                    <!-- Categorias -->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('categorias'))?>" class="nav-link beige">Categorias</a>
                    </li>
                    <!-- Especies -->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('marca'))?>" class="nav-link beige">Marcas</a>
                    </li>
                    <!-- Lista de usuarios -->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('usuarios'))?>" class="nav-link beige">Usuarios</a>
                    </li>
                    <!--Lista de consultas-->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('lista_Consultas'))?>" class="nav-link beige">Consultas</a>
                    </li>
                    <!--Lista de contactos-->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('lista_Contacto'))?>" class="nav-link beige">Contactos</a>
                    </li>
                    <!-- Lista de ventas -->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('ventas_cabecera'))?>" class="nav-link beige">Ventas</a>
                    </li>
                    <!-- Administrador con sus opciones -->
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-dark nav-item nav-link" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 20 20">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            Administrador
                        </button>
                        <ul class="dropdown-menu marron" aria-labelledby="dropdownMenuButton1">
                            <!-- Perfil -->
                            <li>
                                <a class="dropdown-item izquierda menu-nav text-dark" href="<?=base_url(route_to("usuarios_datos"))?>">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                                    </svg>
                                    Mi perfil
                                </a>
                            </li>
                            <!-- Cerrar sesión -->
                            <li>
                                <a class="dropdown-item izquierda menu-nav text-dark" href="<?php echo base_url('administrador/logout')?>">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Version 2 -->
                    <?php elseif(session()->is_logged && session()->us_Perfil_id == 2): ?>
                    <!-- Principal -->
                    <li class="nav-item">
                        <a href="<?php echo base_url('/')?>" class="nav-link beige">Principal</a>
                    </li>
                    <!-- Catálogo -->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('catalogo'))?>" class="nav-link beige">Catálogo</a>
                    </li>
                    <!-- Quienes somos -->
                    <li class="nav-item">
                        <a href="<?php echo base_url('quienes_somos')?>" class="nav-link beige">Quienes Somos</a>
                    </li>
                    <!--Información de contacto-->
                    <li class="nav-item">
                        <a href="<?php echo base_url('contacto')?>" class="nav-link beige">Consulta</a>
                    </li>
                    <!-- Comercialización -->
                    <li class="nav-item">
                        <a href="<?php echo base_url('comercializacion')?>" class="nav-link beige">Comercialización</a>
                    </li>

                    <!-- Carrito -->
                    <li class="nav-item">
                        <a href="<?php echo base_url(route_to('verCarrito'))?>" class="nav-link beige">
                            Carrito
                            <svg width="24" height="24" fill="#ffffff" class="bi bi-cart" viewBox="0 0 20 20">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <?php
                                if(!session('carrito_v'))
                                {
                                    $contador = 0;
                                }else
                                {
                                    $carrito = session('carrito_v');
                                    $contador = 0;
                                    foreach($carrito as &$productos)
                                    {
                                        $contador += $productos['cantidad'];
                                    }
                                }
                            ?>
                            (<span class="beige contador_carro"><?php echo $contador; ?></span>)
                        </a>
                    </li>
                    <!-- Menu de cliente -->
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-light nav-item nav-link" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 20 20">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <?=session()->us_User?>
                        </button>
                        <ul class="dropdown-menu marron" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a href="<?=base_url(route_to("datos_cliente"))?>" class="dropdown-item izquierda text-dark menu-nav">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                                    </svg>
                                    Mi perfil
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url(route_to("ventas_cabecera_cliente"))?>" class="dropdown-item izquierda text-dark menu-nav">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                    </svg>
                                    Compras
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url("cliente/logout")?>" class="dropdown-item izquierda text-dark menu-nav"> 
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                    Salir
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Version 3 -->
                    <?php else : ?>
                    <!-- Principal -->
                        <a href="<?php echo base_url('/')?>" class="nav-link text-dark sansserif">Principal</a>
                    <!-- Catálogo -->
                        <a href="<?php echo base_url(route_to('catalogo'))?>" class="nav-link text-dark sansserif">Catálogo</a>
                    <!-- Quienes somos -->
                        <a href="<?php echo base_url('quienes_somos')?>" class="nav-link text-dark sansserif">Quienes Somos</a>
                    <!--Información de contacto-->
                        <a href="<?php echo base_url('contacto')?>" class="nav-link text-dark sansserif">Contacto</a>
                    <!-- Comercialización -->
                        <a href="<?php echo base_url('comercializacion')?>" class="nav-link text-dark sansserif">Comercialización</a>
                    <!-- Registro -->
                        <a href="<?php echo base_url('registro')?>" class="nav-link text-dark sansserif">Registrarse</a>
                    <!-- Inicio Sesión-->
                        <a href="<?php echo base_url('login')?>" class="nav-link text-dark sansserif">Iniciar Sesión</a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>