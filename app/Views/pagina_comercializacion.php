<!-- Sección de comercialización -->
<section class="container mb-4">
    <div class="row">
        <!-- título -->
        <div class="col-12">
            <!-- texto con texto justificado, en negrrita y con un globo de color gris de fondo -->
            <h4 class="text-uppercase mb-4 mt-4 fw-bold beige text-justify englobar">
                Comercialización
            </h4>
            <hr class="mb-4">
        </div>
    </div>

    <div class="row d-flex justify-content-between">
        <div class="col-12 col-sm-12 col-md-4 mb-4">
            <!-- Grupo de listas de preguntas -->
            <!-- se agrega los bordes redondeados, el estilo de listra de listas, y se quita los marcos -->
            <div class="list-group list-group list-group-flush rounded" id="lista_preg" role="tablist">
                <a class="list-group-item list-group-item-secondary list-group-item-action active" data-bs-toggle="list" href="#conte1" id="medio_pago" arial-controls="medio_pago" role="tab" >
                    <!-- Primera lista -->
                    <p class="h5">
                        Información sobre pagos
                        <svg width="24" height="24" fill="#F5F5DC" class="bi bi-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                    </p>
                </a>
                <a class="list-group-item list-group-item-secondary list-group-item-action" data-bs-toggle="list" href="#conte2" id="medio_envio" arial-controls="medio_envio" role="tab">
                    <!-- Segunda lista -->
                    <p class="h5">
                        Tipos de Entrega
                        <svg width="24" height="24" fill="#F5F5DC" class="bi bi-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                    </p>
                </a>
                <a data-bs-toggle="list" href="#conte3" id="comprar" arial-controls="comprar" role="tab" class="list-group-item list-group-item-secondary list-group-item-action">
                    <!-- Tercera lista -->
                    <p class="h5">
                        Formas de Envio
                        <svg width="24" height="24" fill="#F5F5DC" class="bi bi-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                    </p>
                </a>
            </div>
        </div>
        <!-- Contenido de cada lista -->
        <div class="col-12 col-sm-12 col-md-7">
            <div id="contenido" class="tab-content">
                <div class="tab-pane fade active show text-justify" role="tabpanel" id="conte1" aria-labelledby="medio_pago">
                    <!-- contenido 1 -->
                    <h6 class="fw-bold beige">
                        PAGOS
                    </h6>
                    <p class="fw-bold beige">
                        ¿Cómo puedo pagar en la tienda?
                    </p>
                    <p class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Trabajamos con Mercado Pago, por lo que podés abonar con tarjeta de crédito, débito, efectivo (abonando en Rapipago/Pago Fácil)
                        y también si tenes dinero en tu cuenta de Mercado Pago. Los pedidos que sean generados con cualquiera de las opciones de pago en efectivo en puntos de pago
                        se procesan una vez registrada la acreditación del dinero. Si pasados los 5 días hábiles de generado el pedido no se acredita el pago, dicha compra va a ser cancelada.
                    </p>
                    <p class="beige">
                        Disponemos de los siguientes medios de pago:
                    </p>
                    <!-- Imagenes de medios de pago -->
                    <div>
                        <img src="<?php echo base_url("assets/img/medios_de_pago/amex.png")?>" alt="American Express" width="47" height="30" class="img-fluid tarjetas_img"/>
                        <img src="<?php echo base_url("assets/img/medios_de_pago/argencard.png")?>" alt="Argen card" width="47" height="30" class="img-fluid tarjetas_img"/>
                        <img src="<?php echo base_url("assets/img/medios_de_pago/cabal.png")?>" alt="Cabal" width="47" height="30" class="img-fluid tarjetas_img"/>
                        <img src="<?php echo base_url("assets/img/medios_de_pago/cencosud.png")?>" alt="Cencosud" width="47" height="30" class="img-fluid tarjetas_img"/>
                        <img src="<?php echo base_url("assets/img/medios_de_pago/mastercard.png")?>" alt="Master Card" width="47" height="30" class="img-fluid tarjetas_img"/>
                        <img src="<?php echo base_url("assets/img/medios_de_pago/mercadopago.png")?>" alt="Mercado Pago" width="47" height="30" class="img-fluid tarjetas_img"/>
                        <img src="<?php echo base_url("assets/img/medios_de_pago/nativa.png")?>" alt="Nativa" width="47" height="30" class="img-fluid tarjetas_img"/>
                        <img src="<?php echo base_url("assets/img/medios_de_pago/pagofacil.png")?>" alt="Pago Facil" width="47" height="30" class="img-fluid tarjetas_img"/>
                    </div>
                    <br>
                    <p class="fw-bold beige">
                        ¿Tienen cuotas sin interés?
                    </p>
                    <p class="justificado beige">
                        Solamente para los bancos seleccionados por Mercado Pago.
                    </p>
                    <p class="fw-bold beige">
                        Protección de datos
                    </p>
                    <p class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Todos los datos de los pagos que hagas se encuentran encriptados y se realizan en la plataforma de Mercado Pago,
                        por lo que nosotros no almacenamos ningún tipo de información relacionada a los mismos. Además, la tienda cuenta
                        con certificado de seguridad SSL, por lo que los datos de los pedidos también se encuentran encriptados y seguros.
                    </p>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="conte2" aria-labelledby="medio_envio">
                    <h4 class="fw-bold beige">
                        Tipos de Entrega
                    </h4>
                    <ul class="beige">
                        <li class="listas-formas">
                            <h5 class="fw-bold beige">
                                Envío local (Ciudad de Corrientes).
                            </h5>
                            <p class="justificado beige">
                                En compras a partir de $1000 sin cargo dentro de las 4 avenidas (Distancias mayores te bonificamos $200 del costo de envió).
                            </p>
                        </li>
                        <li class="listas-formas">
                            <h5 class="fw-bold beige">
                                Envíos exprés a Resistencia (Chaco).
                            </h5>
                            <p class="justificado beige">
                                Entrega puerta a puerta por servicio expreso en 72hs hábiles, tarifa plana $500.
                            </p>
                        </li>
                        <li class="listas-formas">
                            <h5 class="fw-bold beige">
                                Envío Regional (Entre Ríos, Misiones, Santa Fe, Formosa, interior del Chaco).
                            </h5>
                            <p class="justificado beige">
                                Entrega puerta a puerta por Correo, demora entre 3 a 6 días hábiles, tarifa plana $1200.
                            </p>
                        </li>
                        <li class="listas-formas">
                            <h5 class="fw-bold beige">
                                Envío Nacional (resto del país)<br>
                                <img src="<?php echo base_url("assets/img/medios_de_pago/oca.png")?>" alt="correo oca" width="47" height="30" class="img-fluid tarjetas_img" />
                                <img src="<?php echo base_url("assets/img/medios_de_pago/andreani.png")?>" alt="correo andreani" width="47" height="30" class="img-fluid tarjetas_img" />
                            </h5>
                            <p class="justificado beige">
                                Entrega puerta a puerta por Correo, demora entre 3 a 6 días hábiles, tarifa plana $2000.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="conte3" aria-labelledby="comprar">
                    <ul class="beige">
                        <li class="listas-formas">
                            <h5 class="fw-bold beige">
                                Paquetes:
                            </h5>
                            <p class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Los gastos de envío son independientes del peso, a través de Correo Argentino (si tocase),
                                e incluyen los gastos de empaquetado y manipulación, que es fijo.
                                El plazo de entrega es el establecido según el tipo de entrega una vez realizado el envío.
                            </p>
                        </li>
                        <li class="listas-formas">
                            <h5 class="fw-bold beige">
                                Embalaje:
                            </h5>
                            <p class="justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Las cajas usadas para enviar los calzados son de suficiente tamaño por lo que los artículos 
                                están suficientemente protegidos.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>