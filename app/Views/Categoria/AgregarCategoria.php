<section class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card bg-marron beige shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold pb-2 pb-md-0 mb-md-5 text-center"><?=$titulo?></h2>
                        <!-- Formulario de agregar categoria -->
                        <form method="POST" action="<?php echo base_url(route_to('categorias_cargar')) ?>">
                            <div class="row">
                                <div class="form-outline h2">
                                    <!-- Se ingresa el nombre de la categoria -->
                                    <label for="ct_Nombre" class="form-label h3">
                                        Nombre de la categoria
                                    </label>
                                    <input type="text" value="<?php echo set_value('ct_Nombre')?>" class="form-control form-control-lg" name="ct_Nombre" id="ct_Nombre" placeholder="Ingrese nombre de la categoria">
                                    <?php if(isset($validation['ct_Nombre'])): ?>
                                        <div class="alert alert-danger p-1 mt-1 ">
                                            <?php echo 
                                                '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                </svg>'. $validation['ct_Nombre']?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-outline h2">
                                    <!-- Se ingresa la descripción de la categoría -->
                                    <label for="ct_Descripcion" class="form-label h3">
                                        Descripción
                                    </label>
                                    <input type="text" class="form-control form-control-lg" name="ct_Descripcion" id="ct_Descripcion" placeholder="Ingrese descripción de la categoria">
                                    <?php if(isset($validation['ct_Descripcion'])): ?>
                                        <div class="alert alert-danger p-1 mt-1 ">
                                            <?php echo 
                                                '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                </svg>'. $validation['ct_Descripcion']?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Botones de regresar y añadir -->
                            <div class="mt-4 pt-2 text-center">
                                <a class="btn marron btn-lg px-5 me-4" type="button" href="<?=base_url(route_to('categorias'))?>">
                                    Regresar
                                </a>
                                <button class="btn btn-dark btn-lg px-5" type="submit">
                                    Añadir
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>