<!-- Sección de comercialización -->
<section class="container mb-4">
    <div class="row">
        <!-- título -->
        <div class="col-12">
            <!-- texto con texto justificado, en negrrita y con un globo de color gris de fondo -->
            <h4 class="text-uppercase mb-4 mt-4 fw-bold beige text-justify englobar">
                Cómo Comprar
            </h4>
            <hr class="mb-4">
        </div>
    </div>

    <div class="row d-flex justify-content-between col-12 mx-auto container-fluid">
        <?php if(session()->is_logged && session()->us_Perfil_id == 2): ?>
        <?php else: ?>
            <h4 class="fw-bold beige">
                Paso 0: Registrarse
            </h4>
            <h6 class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Si no estás registrado, ¡No te preocupes! Puedes registrarte en el siguiente link!
            </h6>
            <br>
            <p class="text-center beige mb-4 mt-4">
                <a href="<?php echo base_url('registro')?>" class="btn btn-dark btn-lg px-5 mt-4 h3">Registrarse</a>
            </p>
            <h6 class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Luego, inicia sesión, para ello, en el navegador de la página (parte superior), haga click en el enlace "Iniciar Sesión".
            </h6>
            <p class="text-center beige mb-4 mt-4">
                <img src="<?php echo base_url('/assets/img/como_comprar/paso0.png'); ?>" alt="iniciar sesion" class="img-fluid">
            </p>
        <?php endif; ?>
    </div>

    <div class="row d-flex justify-content-between col-12 mx-auto container-fluid">
        <h4 class="fw-bold beige">
            Paso 1: Ir al Catálogo
        </h4>
        <h6 class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Con sesión iniciada, en el navegador de la página (parte superior), haga click en el enlace "Catálogo".
        </h6>
        <p class="text-center beige mb-4 mt-4">
            <img src="<?php echo base_url('/assets/img/como_comprar/paso1.png'); ?>" alt="ir al catálogo" class="img-fluid">
        </p>
    </div>

    <div class="row d-flex justify-content-between col-12 mx-auto container-fluid">
        <h4 class="fw-bold beige">
            Paso 2: Seleccionar Producto
        </h4>
        <h6 class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            En la página del catálogo, para seleccionar un producto elegido, haga click en "Agregar al carrito".
        </h6>
        <p class="text-center beige mb-4 mt-4">
            <img src="<?php echo base_url('/assets/img/como_comprar/paso2.png'); ?>" alt="agregar al carrito" class="img-fluid">
        </p>
    </div>

    <div class="row d-flex justify-content-between col-12 mx-auto container-fluid">
        <h4 class="fw-bold beige">
            Paso 3: Ir al Carrito
        </h4>
        <h6 class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Una vez seleccionados los productos que se deseen comprar, en el enlace "Carrito" (navegador de la página) se enumerán el total de productos seleccionados.
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Si desea finalizar la compra, haga click en "Carrito".
        </h6>
        <p class="text-center beige mb-4 mt-4">
            <img src="<?php echo base_url('/assets/img/como_comprar/paso3.png'); ?>" alt="ir al carrito" class="img-fluid">
        </p>
    </div>

    <div class="row d-flex justify-content-between col-12 mx-auto container-fluid">
        <h4 class="fw-bold beige">
            Paso 4: Confirmar Compra
        </h4>
        <h6 class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Ya estando en la página del carrito, haga click en "Confirmar compra" comprar los artículos seleccionados anteriormente.
        </h6>
        <p class="text-center beige mb-4 mt-4">
            <img src="<?php echo base_url('/assets/img/como_comprar/paso4.png'); ?>" alt="confirmar compra" class="img-fluid">
        </p>
    </div>

    <div class="row d-flex justify-content-between col-12 mx-auto container-fluid">
        <h4 class="fw-bold beige">
            Paso 4: Listo! Tu compra está en camino!
        </h4>
        <h6 class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Una vez confirmes la compra, nuestro equipo se encargará de preparar tu paquete, el cual recibirás en el plazo acordado en la página de comercialización y dependiendo del proveedor de transporte.
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ¡Esperamos hayas disfrutado tu experiencia de compra! No olvides en contactarnos si tienes alguna consulta en el siguiente enlace.
        </h6>
        <p class="text-center beige mb-4 mt-4">
            <a href="<?php echo base_url('contacto')?>" class="btn btn-dark btn-lg px-5 mt-4 h3">Contacto</a>
        </p>
        <h6 class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ¡Muchas gracias por tu compra!
        </h6>
    </div>
</section>