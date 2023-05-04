<section class="bg-light">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-marron beige" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-2 mt-md-4 pb-5">
                            <form method="post" action="<?php echo base_url('/iniciarSesion')?>">
                            <!--Titulo del formulario de inicio de sesión -->
                                <h2 class="fw-bold mb-2 text-uppercase">
                                    Iniciar Sesión
                                </h2>
                                <h5 class="beige mb-5">
                                    Ingresar usuario y contraseña
                                </h5>
                                <?php if(isset($errores)): ?>
                                <div class="alert alert-danger">
                                    <?php echo $errores?>
                                </div>
                                <?php endif; ?>
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label h3" for="us_User">
                                        Usuario
                                    </label>
                                    <input type="text" value="<?php echo set_value('us_User')?>" class="form-control form-control-lg" name="us_User" id="us_User" placeholder="Ingresar usuario"/>
                                        <?php if(isset($validation['us_User'])): ?>
                                    <div class="alert alert-danger p-1 mt-1">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle h4" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['us_User']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                    <!-- Ingreso de la contraseña -->
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label h3" for="us_Password">
                                        Contraseña
                                    </label>
                                    <input type="password" value="<?php echo set_value('us_Password')?>" class="form-control form-control-lg" name="us_Password" id="us_Password" placeholder="Ingresar contraseña"/>
                                        <?php if(isset($validation['us_Password'])): ?>
                                    <div class="alert alert-danger p-1 mt-1">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle h4" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['us_Password']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <button class="btn btn-dark btn-lg px-5 mt-4 h3" type="submit">
                                    Iniciar Sesión
                                </button>
                            </form>
                        </div>
                        <div>
                            <p class="mb-0 h5">
                                ¿No tienes una cuenta?
                                <a href="<?php echo base_url('/registro')?>" class="text-light fw-bold">
                                    Registrarse
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>