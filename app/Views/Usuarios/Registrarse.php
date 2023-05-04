<section class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="card bg-marron beige shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
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
                        <!-- Titulo del formulario de registro -->
                        <h2 class="mb-4 fw-bold pb-2 pb-md-0 mb-md-5 text-dark text-center">
                            Formulario de registro
                        </h2>
                        <form method="post" action="<?php echo base_url('/guardar') ?>">
                            <div class="row">
                                <!-- Ingreso del nombre -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-outline">
                                        <label class="form-label h3" for="us_Nombre">
                                            Nombre
                                        </label>
                                        <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{3,50}" minlength="3" maxlength="50" class="form-control form-control-md" name="us_Name" id="nombre" value="<?php echo set_value('us_Name')?>" placeholder="Ingrese su Nombre"/>
                                        <?php if(isset($validation['us_Name'])): ?>
                                            <div class="alert alert-danger p-1 mt-1">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_Name']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <!-- Ingreso del apellido -->
                                    <div class="form-outline">
                                        <label class="form-label h3" for="us_Apellido">
                                            Apellido
                                        </label>
                                        <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{3,50}" minlength="3" maxlength="50" class="form-control form-control-md" name="us_Apellido" id="us_Apellido" value="<?php echo set_value('us_Apellido')?>" placeholder="Ingrese su apellido"/>
                                        <?php if(isset($validation['us_Apellido'])): ?>
                                            <div class="alert alert-danger p-1 mt-1">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_Apellido']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Ingreso del correo electrónico -->
                                <div class="col-12">
                                    <label class="form-label h3" for="us_Email">
                                        Correo electrónico
                                    </label>
                                    <input type="email" class="form-control form-control-md" name="us_Email" id="us_Email" value="<?php echo set_value('us_Email')?>" placeholder="Ingrese su correo electrónico"/>
                                    <?php if(isset($validation['us_Email'])): ?>
                                        <div class="alert alert-danger p-1 mt-1">
                                           <?php echo 
                                               '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                              </svg>'.$validation['us_Email']
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-outline">
                                        <!--    Ingreso del telefono -->
                                        <label class="form-label h3" for="us_Telefono">
                                            Teléfono
                                        </label>
                                        <input type="tel" minlength="10" value="<?php echo set_value('us_Telefono')?>" class="form-control form-control-md" name="us_Telefono" id="us_Telefono" placeholder="Ingresar su número de teléfono"/>
                                        <?php if(isset($validation['us_Telefono'])): ?>
                                            <div class="alert alert-danger p-1 mt-1">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_Telefono']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-outline">
                                        <!--    Ingreso del documento -->
                                        <label class="form-label h3" for="us_DNI">
                                            Documento
                                        </label>
                                        <input type="text" pattern="[0-9]{8,8}" minlength="8" maxlength="8" value="<?php echo set_value('us_DNI')?>" class="form-control form-control-md" name="us_DNI" id="us_DNI" placeholder="Ingresar su número de DNI"/>
                                        <?php if(isset($validation['us_DNI'])): ?>
                                            <div class="alert alert-danger p-1 mt-1">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_DNI']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-outline">
                                        <!-- Ingreso de la direccion -->
                                        <label class="form-label h3" for="us_Direccion">
                                            Dirección
                                        </label>
                                        <input type="text" minlength="8" value="<?php echo set_value('us_Direccion')?>" class="form-control form-control-md" name="us_Direccion" id="us_Direccion" placeholder="Ingresar domicilio"/>
                                        <?php if(isset($validation['us_Direccion'])): ?>
                                            <div class="alert alert-danger p-1 mt-1 ">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                       <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_Direccion']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-outline">
                                        <!--    Ingreso del ciudad -->
                                        <label class="form-label h3" for="us_Ciudad">
                                            Ciudad
                                        </label>
                                        <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]+{4,}" minlength="4" value="<?php echo set_value('us_Ciudad')?>" class="form-control form-control-md" name="us_Ciudad" id="us_Ciudad" placeholder="Ingresar ciudad"/>
                                        <?php if(isset($validation['us_Ciudad'])): ?>
                                            <div class="alert alert-danger p-1 mt-1">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_Ciudad']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-outline">
                                        <!--    Ingreso del provincia -->
                                        <label class="form-label h3" for="us_Provincia">
                                            Provincia
                                        </label>
                                        <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{4,}" minlength="4" value="<?php echo set_value('us_Provincia')?>" class="form-control form-control-md" name="us_Provincia" id="us_Provincia" placeholder="Ingresar provincia"/>
                                        <?php if(isset($validation['us_Provincia'])): ?>
                                            <div class="alert alert-danger p-1 mt-1">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_Provincia']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-outline">
                                        <!-- Ingreso del usuario -->
                                        <label class="form-label h3" for="us_User">
                                            Usuario
                                        </label>
                                        <input type="text" value="<?php echo set_value('us_User')?>" class="form-control form-control-md" name="us_User" id="us_User" placeholder="Ingresar su nombre de usuario"/>
                                        <?php if(isset($validation['us_User'])): ?>
                                            <div class="alert alert-danger p-1 mt-1 ">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_User']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-outline">
                                        <!-- Ingreso de la contraseña -->
                                        <label class="form-label h3" for="us_Password">
                                            Contraseña
                                        </label>
                                        <input type="password" class="form-control form-control-md" name="us_Password" id="us_Password" placeholder="Ingresar su contraseña" />
                                        <?php if(isset($validation['us_Password'])): ?>
                                            <div class="alert alert-danger p-1 mt-1 ">
                                                <?php echo 
                                                    '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                    </svg>'.$validation['us_Password']
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <input id="perfil_id" name="us_Perfil_id" value="2" style="display: none;">
                            <div class="mt-4 pt-2 justify-content-center text-center">
                                <button class="btn btn-dark btn-lg px-5 mt-4 h3" type="submit">
                                    Registrarse
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>