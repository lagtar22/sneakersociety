<section class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card bg-marron beige shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold pb-2 pb-md-0">
                            <?php echo $titulo?>
                        </h2>
                        <form method="POST" action="<?php echo base_url(route_to("producto_actualizar")) ?>" enctype="multipart/form-data">
                            <fieldset>
                                <!-- ID del producto -->
                                <input type="hidden" id="pd_id" name="pd_id" value="<?=$producto['pd_id']?>">
                                <!-- Nombre del producto -->
                                <div class="form-group">
                                    <label for="nombre_Producto" class="form-label mt-4 h4">
                                        Nombre del producto
                                    </label>
                                    <input type="text" class="form-control" value="<?= $producto['pd_Nombre']?>" name="pd_Nombre" id="nombre_Producto" placeholder="Ingrese el nombre del product">
                                    <?php if(isset($validation['pd_Nombre'])): ?>
                                        <div class="alert alert-danger p-1 mt-1 ">
                                            <?php echo 
                                                '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                </svg>'. $validation['pd_Nombre']?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label for="marca_id" class="form-label mt-4 h4">
                                                Seleccionar Marca
                                            </label>
                                            <select class="form-select" name="marca_id" id="marca_id">
                                                <option value="">
                                                    Seleccionar Marca
                                                </option>
                                                <?php if($marcas): ?>
                                                    <?php foreach($marcas as $esp): ?>
                                                        <option value="<?=$esp['marca_id']?>"
                                                            <?php if($esp['marca_id'] == $producto['marca_id']){ echo 'selected';} ?>>
                                                            <?=$esp['marca_nombre']?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                            <?php if(isset($validation['marca_id'])): ?>
                                                <div class="alert alert-danger p-1 mt-1 ">
                                                    <?php echo 
                                                        '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                        </svg>'. $validation['ct_id']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label for="ct_id" class="form-label mt-4 h4">
                                                Seleccionar Categoria
                                            </label>
                                            <select class="form-select" name="ct_id" id="ct_id" required>
                                                <option value="">
                                                    Seleccionar categoria
                                                </option>
                                                <?php if($categorias): ?>
                                                    <?php foreach($categorias as $cate): ?>
                                                        <option value="<?=$cate['id']?>"
                                                            <?php if($cate['id'] == $producto['ct_id']){ echo 'selected';} ?>>
                                                            <?=$cate['ct_Nombre']?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                            <?php if(isset($validation['ct_id'])): ?>
                                                <div class="alert alert-danger p-1 mt-1 ">
                                                    <?php echo 
                                                        '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                        </svg>'. $validation['ct_id']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Descripcion del producto -->
                                <div class="form-group">
                                    <label for="descripcion" class="form-label mt-2 h4">
                                        Descripción
                                    </label>
                                    <input type="text" class="form-control" name="pd_Descripcion" value="<?= $producto['pd_Descripcion']?>" id="descripcion" placeholder="Ingresar descripción del prodcuto">
                                    <?php if(isset($validation['pd_Descripcion'])): ?>
                                        <div class="alert alert-danger p-1 mt-1 ">
                                            <?php echo 
                                                '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                </svg>'.$validation['pd_Descripcion']?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="cantidad" class="form-label mt-4 h4">
                                                Cantidad
                                            </label>
                                            <input type="text" class="form-control" name="pd_Cantidad" value="<?= $producto['pd_Cantidad']?>" id="cantidad" placeholder="Ingresar cantidad">
                                            <?php if(isset($validation['pd_Cantidad'])): ?>
                                                <div class="alert alert-danger p-1 mt-1 ">
                                                    <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'. $validation['pd_Cantidad']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="precio_venta" class="form-label mt-4 h4">
                                                Precio de venta
                                            </label>
                                            <input type="text" class="form-control" name="pd_PrecioVenta" value="<?= $producto['pd_PrecioVenta']?>" id="precio_venta" placeholder="Ingresar precio de venta">
                                            <?php if(isset($validation['pd_PrecioVenta'])): ?>
                                                <div class="alert alert-danger p-1 mt-1 ">
                                                    <?php echo 
                                                        '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                        </svg>'. $validation['pd_PrecioVenta']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <img class="img-fluid mt-4 rounded d-none d-lg-block efecto_transi" width="150" src="<?php echo base_url("assets/img/Catalogo/". $producto['pd_Imagen'])?>">
                                        <label for="pd_Imagen" class="formatoLabel mb-4 mt-4 h4">
                                            Imagen del producto (formatos compatibles: .jpg, .png)
                                        </label>
                                    <input type="file" id="pd_Imagen" name="pd_Imagen">
                                    <?php if(isset($validation['pd_Imagen'])): ?>
                                        <div class="alert alert-danger p-1 mt-1 ">
                                            <?php echo 
                                                '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                </svg>'. $validation['pd_Imagen']?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mt-3 text-center">
                                    <a class="btn marron btn-lg px-5 me-4" type="button" href="<?=base_url(route_to('productos'))?>">
                                        Regresar
                                    </a>
                                    <button type="submit" class="btn btn-dark btn-lg px-5">
                                        Actualizar
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>