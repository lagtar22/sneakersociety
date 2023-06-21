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
<section class="container mb-5 mt-5">
    <div class="col-10 col-xs-12 col-sm-12 mx-auto mt-3 mb-5">
        <!-- Titulo de Productos -->
        <h3 class="text-center fw-bold beige englobar">
            <svg width="28" height="28" fill="currentColor" class="bi bi-shop" viewBox="0 0 18 18">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
            </svg>
            <?=$titulo?>
        </h3>
        <hr class="mb-4 beige">
        <!-- Botones de agregar y mostrar eliminados -->
        <div class="ms-3">
            <p>
                <a class="btn btn-dark h4" type="button" href="<?=base_url(route_to("producto_añadir"))?>">
                    <svg width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                        <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                    </svg>
                    Agregar Producto
                </a>
                <a class="btn marron h4" type="button" href="<?=base_url(route_to('productos_Eliminados'))?>">
                    <svg width="24" height="24" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                    Mostrar productros eliminados
                </a>
            </p>
        </div>
        <hr class="mb-4 beige">
        <!--Búsqueda y filtro-->
        <div class="container-fluid">
            <form class="d-flex" action="<?php echo base_url(route_to('buscarProductos')); ?>" method="post">
                <div class="input-group justify-content-center">
                    <input class="form-control col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6" type="search" placeholder="Buscar producto" name="buscar" id="buscar"><br>
                    <button class="btn btn-dark col-xxl-1 col-xl-2 col-lg-2 col-md-3 col-sm-3 h4" type="submit">
                        <svg width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        Buscar
                    </button>
                    <a href="<?php echo base_url(route_to('productos')); ?>" class="btn marron col-xxl-1 col-xl-2 col-lg-2 col-md-3 col-sm-3 h4">
                        <svg width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                        </svg>
                        Reiniciar
                    </a>
                    <span class="col-xxl-7 col-xl-5 col-lg-4 "></span>
                </div>
            </form>
            <br>
        </div>
        <div class="container-fluid">
            <table class="table table-bordered rounded lg-4 mb-3">
                <!-- Cabecera de la tabla de productos -->
                <thead class="table-dark">
                    <tr class="marron h3 text-center">
                        <th>Imagen</th>
                        <th>Nombre y Descripción</th>
                        <th>Categoria</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Operaciones disponibles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($productos): ?>
                        <?php foreach($productos as $fila) :?>
                            <?php if ($fila['pd_Activo'] === null) : ?>
                                <tr>
                                    <td class="h5 text-center">
                                        <img class="img-fluid rounded d-none d-sm-block efecto-arriba img-thumbnail" width="150" height="150" src="<?php echo base_url("assets/img/Catalogo/". $fila['pd_Imagen'])?>">
                                    </td>
                                    <td class="h5 text-justify">
                                        <?php echo $fila['pd_Nombre'];?> <br> <?php echo $fila['pd_Descripcion'];?>
                                    </td>
                                    <td class="h5 text-center">
                                        <?php echo $fila['ct_Nombre'];?>
                                    </td>
                                    <td class="h5 text-center">
                                        <?php echo $fila['marca_nombre'];?>
                                    </td>
                                    <td class="h5 text-center">
                                        $<?php echo $fila['pd_PrecioVenta'];?>
                                    </td>
                                    <td class="h5 text-center">
                                        <?php echo $fila['pd_Cantidad'];?>
                                    </td>
                                    <td class="h5 text-center align-items-baseline">
                                        <!-- Centra el botón de borrar en la columna asignada -->
                                        <div class="row btn-toolbar">
                                            <div class="d-flex justify-content-evenly">
                                                <a class="btn btn-dark h3" type="button" href="<?=base_url('administrador/editarProducto/'. $fila["pd_id"])?>">
                                                    <svg width="24" height="24" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                    </svg>
                                                    Editar
                                                </a>
                                                <a href="#" class="btn btn-danger h3" onclick="confirmarBorrado('<?=base_url('administrador/borrarProducto/'. $fila["pd_id"])?>')">
                                                    <svg width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                    Borrar
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center h4">No se encontraron productos</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <hr class="mb-4 beige">
    </div>
</section>
<script>
    function confirmarBorrado(url) {
        Swal.fire({
            title: '¿Estás seguro que deseas eliminar este producto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>