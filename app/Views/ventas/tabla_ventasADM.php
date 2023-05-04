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
    <div class="col-10 col-xs-12 col-sm-12 mt-3 mb-5">
        <!-- Titulo de la tabla -->
        <h3 class="text-center fw-bold englobar ">
            <svg width="28" height="28" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <?=$titulo?>
        </h3>
        <hr class="mb-4 ">
        <div class="container-fluid">
            <form action="<?= base_url(route_to('buscar_ventas')); ?>" method="post" class="d-flex">
                <div class="input-group justify-content-between justify-content-center align-items-center">
                    <div class="col col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <label for="fecha_inicio"><b class="h3">Fecha Desde:</b></label>
                        <input class="form-control" type="date" placeholder="Seleccione Fecha Desde" name="fecha_inicio" id="fecha_inicio">
                    </div>
                    <div class="col col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <label for="fecha_fin"><b class="h3">Fecha Hasta:</b></label>
                        <input class="form-control" type="date" placeholder="Seleccione Fecha Hasta" name="fecha_fin" id="fecha_fin">
                    </div>
                    <div class="col btn-group col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-4 justify-content-end">
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-dark  btn-lg" type="submit">
                                <svg width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                                Buscar
                            </button>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="<?= base_url(route_to('ventas_cabecera')); ?>" class="btn marron btn-lg">
                                <svg width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                    <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                                </svg>
                                Reiniciar
                            </a>
                        </div>
                     </div>
                 </div>
            </form>
            <br><hr><br>
            <div class="container-fluid">
                <table class="table table-bordered rounded lg-4 ">
                    <thead class="table-dark">
                        <tr class="marron text-center h4">
                            <th>Cliente</th>
                            <th>Correo electrónico</th>
                            <th>Fecha</th>
                            <th>Total compra</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($ventas): ?>
                            <?php foreach ($ventas as $fila): ?>
                                <tr>
                                    <td class="text-justify h4"><?php echo $fila['us_Name'] . ' ' . $fila['us_Apellido']; ?></td>
                                    <td class="text-center h4"><?php echo $fila['us_Email']; ?></td>
                                    <td class="text-center h4"><?php echo $fila['fecha_Guardado']; ?></td>
                                    <td class="text-center h4">$<?php echo $fila['totalVenta']; ?></td>
                                    <td class="text-center h4">
                                <!-- Centra el botón de borrar en la columna asignada -->
                                        <div class="d-flex justify-content-center">
                                            <?php if(session()->us_Perfil_id == 2): ?>
                                            <a href="<?php echo base_url("cliente/detalles?id_compra=". $fila['id_VentaCabec'])?>" class="btn btn-primary" type="button">
                                                <svg width="24" height="24" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                </svg>
                                                Detalle Compras
                                            </a>
                                            <?php else:?>
                                                <a href="<?php echo base_url("administrador/detalles?id_compra=". $fila['id_VentaCabec'])?>" class="btn btn-primary" type="button">
                                                    <svg width="24" height="24" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                    </svg>
                                                    Detalle Compras
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center  fw-bold">No existen registros</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="mb-4 ">
    </div>
</section>