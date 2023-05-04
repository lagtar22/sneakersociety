<section class="container mt-5 mb-5">
    <div class="col-10 col-xs-12 col-sm-12 mx-auto mt-3 mb-5">
        <h3 class="text-center fw-bold englobar beige">
            <svg width="28" height="28" fill="currentColor" class="bi bi-recycle" viewBox="0 0 18 18">
                <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
            </svg>
            <?=$titulo?>
        </h3>
        <hr class="mb-4 beige">
        <?php if($productos): ?>
        <div class="container-fluid">
            <table class="table table-bordered rounded lg-4 beige">
                <thead class="table-light">
                    <tr class="marron h3">
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Operaciones disponibles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($productos as $product): ?>
                    <tr>
                        <td>
                            <img class="img-fluid mt-4 rounded d-none d-lg-block efecto_transi" width="150" src="<?php echo base_url("assets/img/Catalogo/". $product['pd_Imagen'])?>">
                        </td>
                        <td class="h3"> <?=$product['pd_Nombre'];?> </td>
                        <td>
                            <div class="d-flex justify-content-evenly">
                                <a href="<?=base_url('administrador/darAltaProducto/'.$product["pd_id"])?>"
                                    class="btn btn-primary" type="button">
                                    <svg width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                                        <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                    Dar de Alta
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <br>
        <hr>
        <br>
        <div>
            <a class="btn btn-dark " type="button" href="<?=base_url(route_to('productos'))?>">
                <svg width="28" height="28" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 -5 24 24">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg>
                Regresar
            </a>
        </div>
        <?php else: ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 texto mt-6 mb-6 beige">
            <p class="text-center h3 mb-3">
                No se encuentran productos eliminados</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-dark " type="button" href="<?=base_url(route_to("productos"))?>">
                    <svg width="28" height="28" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 -5 24 24">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Regresar
                </a>
            </div>
        </div>
        <?php endif; ?>
        <hr>
    </div>
</section>