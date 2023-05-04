<?php
    if(session()->getFlashdata('alertaExitosa')){
        echo
        '<p class="alert text-center alert-success mt-4 col-lg-8 col-md-8 col-sm-8 mx-auto w-50 h4" role="alert">
            <svg width="28" height="28" fill="#198754" class="bi bi-check-circle" viewBox="0 0 18 18">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
            '.session()->getFlashdata('alertaExitosa').'
        </p>';
    }
?>
<!-- Contenido -->
<!-- Sección de presentación -->
<section class="container-fluid mb-4">
    <div class="col-12">
        <br><br>
        <!-- se le agregará estilo a "descubre" -->
        <h2 class="display-4 text-center mt-3 " id="descubre">
            Sneaker Society
        </h2>
        <h2 class="text-center text-primary">
            Tu página de calzados
        </h2>
        <div class="circulo mb-3">
        <!-- se agrega icono -->
            <svg width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                <circle cx="8" cy="8" r="8"/>
            </svg>
        </div>
        <!-- párrafo que se utiliza para la historia -->
        <!-- Destacado -->
        <div id="ribbon" class="container-fluid">
            <div id="destacado" class="container w-50 px-5 rounded-lg">
                <div class="row align-items-center">
                    <div class="col-sm p-3">
                        <img src="<?php echo base_url('/assets/img/Productos_dest/nike-airmax.jpg'); ?>" class="mx-auto d-block" alt="">
                    </div>  
                    <div class="col-sm p-3 text-light text-center">
                        <p class="destacado-texto">
                            Destacado:
                        </p>
                        <h4 class="destacado-h4 text-shadow">
                            Nike Air Max
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Separador -->
        <div id="separator-ribbon">
            <div class="content bg-separador"></div>
        </div>
    </div>
</section>
<!-- Gloves de imagenes -->
<section class="contenedor sombra">
    <div class="gloves">
        <div class="glove">
            <h3>
                Mujer
            </h3>
            <a href="<?php echo base_url(route_to('catalogo'))?>">
                <img src="<?php echo base_url('assets/img/Productos_dest/woman-glove-principal.jpg'); ?>" class="img-glove-women">
            </a>
        </div>
        <div class="glove">
            <h3>
                Hombre
            </h3>
            <a href="<?php echo base_url(route_to('catalogo'))?>">
                <img src="<?php echo base_url('assets/img/Productos_dest/man-glove-princial.webp'); ?>" class="img-glove-man">
            </a>
        </div>
            <div class="glove">
            <h3>
                Niños
            </h3>
            <a href="<?php echo base_url(route_to('catalogo'))?>">
                <img src="<?php echo base_url('assets/img/Productos_dest/kids-glove-principal.jpg'); ?>" class="img-glove-kids">
            </a>
        </div>
    </div>
</section>

<!-- Marcas -->
<section class="contenedor-marcas">
    <h3>
        Confían en nosotros:
    </h3>
    <div class="marcas">
        <div class="marca"> 
            <img src="<?php echo base_url('/assets/img/Productos_dest/nike.png'); ?>" class="png-marca">
        </div>
        <div class="marca">
            <img src="<?php echo base_url('/assets/img/Productos_dest/adidas.png'); ?>" class="png-marca">
        </div>
        <div class="marca">
            <img src="<?php echo base_url('/assets/img/Productos_dest/puma.png'); ?>" class="png-marca">
        </div>
        <div class="marca">
            <img src="<?php echo base_url('/assets/img/Productos_dest/jordan.png'); ?>" class="png-marca">
        </div>
        <div class="marca">
            <img src="<?php echo base_url('/assets/img/Productos_dest/converse.png'); ?>" class="png-marca">
        </div>
    </div>
</section>