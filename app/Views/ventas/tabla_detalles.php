<!-- Mensaje de alerta -->
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
<!-- Seccion de la tabla de usuarios -->
<section class="container mt-5 mb-5">
    <div class="col-12 col-xs-12 col-sm-12  mt-3 mb-5">
        <!-- Titulo de la tabla -->
        <h3 class="text-center fw-bold englobar">
            <svg width="28" height="28" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
            </svg>
            <?=$titulo1?>
        </h3>
        <hr class="mb-4">
        <div class="container-fluid">
            <table class="table table-bordered rounded lg-4">
                <thead class="table-dark text-center h3">
                    <tr class="marron">
                        <th>Cliente</th>
                        <th>Correo electrónico</th>
                        <th>Dirección de Facturación</th>
                        <th>Fecha</th>
                        <th>Total compra</th>
                        <th>Factura</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Se verifica que no este vacío "Usuario" -->
                    <?php if($compraRealizada): ?>
                    <!-- Recorre los registros -->
                    <?php foreach($compraRealizada as $compra): ?>
                    <tr>
                        <!-- Muestra el nombre, apellido, correo electrónico y nombre de usuario -->
                        <td class="text-justify h4"> <?=$compra['us_Name'];?> <?=$compra['us_Apellido'];?></td>
                        <td class="text-center h4"> <?=$compra['us_Email'];?> </td>
                        <td class="text-justify h4"> <?=$compra['us_Direccion'];?>, <?=$compra['us_Ciudad'];?>, <?=$compra['us_Provincia'];?></td>
                        <td class="text-center h4"> <?=$compra['fecha_Guardado'];?> </td>
                        <td class="text-center h4"> $<?=$compra['totalVenta'];?> </td>
                        <td class="text-center h4">
                            <div>
                                <?php if(session()->us_Perfil_id == 1):?>
                                    <div>
                                        <a class="btn btn-primary" type="button" href="<?=base_url('administrador/descargarFactura/'. $compra["id_VentaCabec"])?>">
                                            <svg width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                    <?php else:?>
                                    <div>
                                        <a class="btn btn-primary" type="button" href="#">
                                            <!-- href="<!?=base_url('cliente/descargarFactura/'. $compra["id_VentaCabec"])?>" -->
                                            <svg width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                            </svg>
                                            Descargar
                                        </a>
                                    </div>
                                <?php endif;?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
</section>
<section class="container">
    <div class="col-12 col-xs-12 col-sm-12  mt-3 mb-5">
        <!-- Titulo de la tabla -->
        <h3 class="text-center fw-bold englobar ">
            <svg width="28" height="28" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
            </svg>
            <?=$titulo2?>
        </h3>
        <hr class="mb-4">
        <!-- Botón de mostrar a los usuarios eliminados -->
        <div class="accordion mx-auto" id="accordion">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne">
                        <p class="h4 fw-bold">
                            <svg width="24" height="24" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg>
                                Compra realizada el
                            <?php if($compraRealizada): ?>
                            <!-- Recorre los registros -->
                            <?php foreach($compraRealizada as $compras): ?>
                            <?=$compras['fecha_Guardado'];?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </p>
                    </button>
                </h2>
                <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-bordered border-dark roundedlg-4">
                            <thead class="table-dark text-center h4">
                                <tr class="">
                                    <th>Imagen del producto</th>
                                    <th>Nombre del producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($detalle_compra): ?>
                                    <?php foreach($detalle_compra as $detalle): ?>
                                        <tr>
                                            <td class="text-center h4">
                                                <img class="img-fluid rounded d-none d-sm-block efecto_transi" width="150" src="<?php echo base_url("assets/img/Catalogo/". $detalle['pd_Imagen'])?>">
                                            </td>
                                            <td class="text-center h4"> <?=$detalle['pd_Nombre'];?> </td>
                                            <td class="text-center h4"> <?=$detalle['cantidad'];?> </td>
                                            <td class="text-center h4"> $<?=$detalle['precio'];?> </td>
                                            <td class="text-center h4"> $<?=$detalle['precio']*$detalle['cantidad'];?> </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php if(session()->us_Perfil_id == 1):?>
            <div>
                <a class="btn btn-dark" type="button" href="<?=base_url(route_to('ventas_cabecera'))?>">
                    <svg width="28" height="28" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 -5 24 24">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Regresar
                </a>
            </div>
            <?php else:?>
            <div>
                <a class="btn btn-dark" type="button" href="<?=base_url(route_to('ventas_cabecera_cliete'))?>">
                    <svg width="28" height="28" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 -5 24 24">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Regresar
                </a>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>