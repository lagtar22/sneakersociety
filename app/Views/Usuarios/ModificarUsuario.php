<section class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card bg-marron beige shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="fw-bold pb-2 pb-md-0 text-center">
                            <?php echo $titulo?>
                        </h3>
                        <?php if(session()->is_logged && session()->us_Perfil_id == 1): ?>
                            <form method="post" action="<?=base_url(route_to("usuarios_actualizar_Datos"))?>">
                        <?php else: ?>
                            <form method="post" action="<?=base_url(route_to("cliente_Actualizar"))?>">
                        <?php endif;?>
                            <fieldset>
                                <!-- ID del usuario -->
                                <input type="hidden" id="id" name="id" value="<?=$usuario['id']?>">
                                <!-- Nombre -->
                                <div class="row mb-3">
                                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label for="nombre" class="form-label mt-4 h3">
                                                Nombre
                                            </label>
                                            <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{3,50}" minlength="3" maxlength="50" class="form-control" name="us_Name" value="<?=$usuario['us_Name']?>" id="us_Name" placeholder="Ingrese su Nombre">
                                            <?php if(isset($validation['us_Name'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_Name']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- Apellido -->
                                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label for="apellido" class="form-label mt-4 h3">
                                                Apellido
                                            </label>
                                            <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{3,50}" minlength="3" maxlength="50" class="form-control" name="us_Apellido" value="<?=$usuario['us_Apellido']?>" id="us_Apellido" placeholder="Ingrese su Apellido">
                                            <?php if(isset($validation['us_Apellido'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_Apellido']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Correo electrónico -->
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="form-outline">
                                            <label for="ingresoCorreo" class="form-label mt-4 h3">
                                                Correo electrónico
                                            </label>
                                            <input type="email" class="form-control" name="us_Email" value="<?=$usuario['us_Email']?>" id="us_Email" aria-describedby="emailHelp" placeholder="Ingrese su Correo electrónico">
                                            <?php if(isset($validation['us_Email'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_Email']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <!-- USUARIO -->
                                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label for="usuario" class="form-label mt-4 h3">
                                                Usuario
                                            </label>
                                            <input type="text" class="form-control" name="us_User" id="us_User" value="<?=$usuario['us_User']?>" aria-describedby="emailHelp" placeholder="Ingrese su Usuario">
                                            <?php if(isset($validation['us_User'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_User']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                                        <!-- DNI -->
                                        <div class="form-group">
                                            <label for="Direccion" class="form-label mt-4 h3">
                                                Ingresar DNI
                                            </label>
                                            <input type="numbre" pattern="[0-9]{8,8}" minlength="8" maxlength="8" class="form-control" value="<?=$usuario['us_DNI']?>" name="us_DNI" id="us_DNI" placeholder="Ingrese su DNI">
                                            <?php if(isset($validation['us_DNI'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_DNI']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <!-- telefono -->
                                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="teléfono" class="form-label mt-4 h3">
                                                Ingresar teléfono
                                            </label>
                                            <input type="tel" minlength="10" class="form-control" value="<?=$usuario['us_Telefono']?>" name="us_Telefono" id="us_Telefono" placeholder="Ingrese su teléfono de contacto">
                                            <?php if(isset($validation['us_Telefono'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_Telefono']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                                        <!-- direccion -->
                                        <div class="form-group">
                                            <label for="Direccion" class="form-label mt-4 h3">
                                                Ingresar Dirección
                                            </label>
                                            <input type="text" minlength="8" class="form-control" value="<?=$usuario['us_Direccion']?>" name="us_Direccion" id="us_Direccion" placeholder="Ingrese su dirección">
                                            <?php if(isset($validation['us_Direccion'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_Direccion']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <!-- CIUDAD -->
                                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="teléfono" class="form-label mt-4 h3">
                                                Ingresar Ciudad
                                            </label>
                                            <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]+{4,}" minlength="4" class="form-control" value="<?=$usuario['us_Ciudad']?>" name="us_Ciudad" id="us_Ciudad" placeholder="Ingrese su ciudad">
                                            <?php if(isset($validation['us_Ciudad'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_Ciudad']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- PROVINCIA -->
                                    <div class="col-12 col-sm-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="teléfono" class="form-label mt-4 h3">
                                                Ingresar Provincia
                                            </label>
                                            <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{4,}" minlength="4" class="form-control" value="<?=$usuario['us_Provincia']?>" name="us_Provincia" id="us_Provincia" placeholder="Ingrese su Provincia">
                                            <?php if(isset($validation['us_Provincia'])): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation['us_Provincia']?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="us_Password" name="password" value="<?=$usuario['us_Password']?>">
                                <div class="h4 text-center">
                                    <?php if(session()->is_logged && session()->us_Perfil_id == 1): ?>
                                        <a class="btn marron btn-lg px-5 me-4" type="button" href="<?=base_url(route_to('usuarios_datos'))?>">
                                            Regresar
                                        </a>
                                    <?php elseif(session()->is_logged && session()->us_Perfil_id == 2): ?>
                                        <a class="btn marron btn-lg px-5 me-4" type="button" href="<?=base_url(route_to('datos_cliente'))?>">
                                            Regresar
                                        </a>
                                    <?php endif;?>
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