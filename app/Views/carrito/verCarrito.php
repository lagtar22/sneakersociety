<!-- Mensaje al realizar una acción el la vista del carrito -->
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
<section class="container mt-5 mb-5">
    <div class="col-12 col-xs-12 col-sm-12 mx-auto mt-3 mb-5">
        <!-- Título del formulario de contacto -->
        <h3 class="text-center fw-bold englobar">
            <svg width="28" height="28" fill="currentcolor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <?=$titulo?>
        </h3>
        <hr class="mb-4 ">
        <!-- Si existe productos en el carrito, se muestra una tabla con los productos y precio -->
        <?php if(isset($productos)): ?>
            <!-- Botones de volver y vaciar carrito -->
        <div class="ms-3 mb-4">
            <a class="btn btn-primary" type="button" href="<?=base_url(route_to("catalogo"))?>">
                <svg width="28" height="28" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg>
                Regresar
            </a>
            <a class="btn marron" type="button" href="<?=base_url(route_to("borrarCarrito"))?>">
                <svg width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>
                <svg width="24" height="24" fill="currentcolor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                Vaciar Carrito
            </a>
        </div>
        <div class="container-fluid">
            <table class="table table-bordered rounded lg-4 ">
                <thead class="table-dark text-center h4">
                    <tr class="marron">
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Operaciones disponibles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 0;
                        $subtotal= 0;
                        foreach($productos as $product): ?>
                            <tr>
                                <td class="h5 align-items-center">
                                    <img class="img-fluid mt-4 rounded d-none d-lg-block efecto_transi" width="150" src="<?php echo base_url("assets/img/Catalogo/". $product['pd_Imagen'])?>">
                                </td>
                                <td class="text-center h5">
                                    <?=$product['pd_Nombre'];?>
                                </td>
                                <td class="text-center h5">
                                    <?php echo $cantidad[$i]['cantidad'];?>
                                </td>
                                <td class="text-center h5"> $ 
                                    <?php 
                                        $subtotal+=($cantidad[$i]['cantidad']*$product['pd_PrecioVenta']); 
                                        echo $cantidad[$i]['cantidad']*$product['pd_PrecioVenta'];
                                    ?>
                                </td>
                                <td class="text-center h5">
                                    <form method="POST" action="<?php echo base_url("cliente/borrarProductoUnitario") ?>">
                                        <input type="hidden" id="pd_id" name="pd_id" value="<?=$product['pd_id']?>">
                                        <div class=' d-flex justify-content-center'>
                                            <button type='submit' class='btn rounded btn-danger'>
                                                <svg width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                                Eliminar
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php ;?>
                    <?php 
                        $i++;
                        endforeach;?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end ">
            <p class="h2 border border-primary border-3 rounded pt-2 pb-2 pe-2 ps-2 ">
                Total:
                <svg width="28" height="28" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 1 16 16">
                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                </svg>
                <?=" ".$subtotal?>
            </p>
        </div>
        <div class="d-flex justify-content-end">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="<?=base_url(route_to("compra"))?>" class="btn btn-dark">
                Confirmar compra
            </a>
            </div>
        </div>
        <!-- Si no contiene productos, muestra un texto de "carrito vacío" -->
        <?php else: ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 texto mt-6 mb-6">
            <p class="text-center h3 mb-3 h3">
                Carrito actualmente vacío
            </p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary " type="button" href="<?=base_url(route_to("catalogo"))?>">
                    <svg width="28" height="28" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 -5 24 24">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Agregar Productos
                </a>
            </div>
        </div>
        <hr>
        <?php endif; ?>
    </div>
</section>