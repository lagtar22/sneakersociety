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
<section class="container mb-5">
    <div class="col-10 col-xs-12 col-sm-12 mt-5 mb-5">
        <!-- Titulo de la tabla -->
        <h3 class="text-center fw-bold englobar">
            <svg width="28" height="28" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 18 18">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
            </svg>
            <?=$titulo?>
        </h3>
        <hr class="mb-4">
        <div class="container-fluid">
            <table class="table table-bordered rounded lg-4">
                <thead class="table-dark text-center h3">
                    <tr class="marron">
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Se verifica que no este vacío "Usuario" -->
                    <?php if($usuario): ?>
                    <!-- Recorre los registros -->
                    <?php foreach($usuario as $user): ?>
                    <tr>
                        <!-- Muestra el nombre, apellido, correo electrónico y nombre de usuario -->
                        <td class="h5 text-justify"> <?=$user['us_Name'];?> </td>
                        <td class="h5 text-justify"> <?=$user['us_Apellido'];?> </td>
                        <td class="h5 text-center"> <?=$user['us_Email'];?> </td>
                        <td class="h5 text-center"> <?=$user['us_User'];?> </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <table class="table table-bordered rounded lg-4">
                <thead class="table-dark text-center h3">
                    <tr class="marron">
                        <th >Dirección</th>
                        <th>Teléfono</th>
                        <th>DNI</th>
                        <th>Ciudad</th>
                        <th>Provincia</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Se verifica que no este vacío "Usuario" -->
                    <?php if($usuario): ?>
                        <!-- Recorre los registros -->
                        <?php foreach($usuario as $user): ?>
                            <tr>
                                <!-- Muestra el nombre, apellido, correo electrónico y nombre de usuario -->
                                <td class="h5 text-justify"> <?=$user['us_Direccion'];?> </td>
                                <td class="h5 text-center"> <?=$user['us_Telefono'];?> </td>
                                <td class="h5 text-center"> <?=$user['us_DNI'];?> </td>
                                <td class="h5 text-center"> <?=$user['us_Ciudad'];?> </td>
                                <td class="h5 text-center"> <?=$user['us_Provincia'];?> </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <a href="<?=base_url('administrador/usuarios/editar/'. $user["id"])?>" class="btn btn-primary btn-lg col-2" type="button">
                <svg width="24" height="24" fill="currentColor" class="bi bi-arrow-repeat h4" viewBox="0 0 20 20">
                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                </svg>
                Actualizar Perfil
            </a>
        </div>
        <hr>
    </div>
</section>