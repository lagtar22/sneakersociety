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
<!-- Sección de contacto -->
<section class="container mb-5">
    <div class="row">
        <!-- Título de contactanos-->
        <div class="col-12 mx-auto">
            <h4 class="text-uppercase mt-4 fw-bold beige englobar">
            <svg width="28" height="28" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
            </svg>
                Contactanos
            </h4>
            <hr class="mb-4 justificado beige">
            <p class="h4 justificado beige">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Si quieres información acerca de nuestros productos o necesita resolver sus dudas,
                te dejamos nuestra información de contacto y formulario para ponernos en contacto lo más antes posible.
            </p>
            <hr class="mb-4 justificado beige">
        </div>
        <!-- Horarios y ubicación -->
        <div class="row justify-content-between">
            <div class="col-12 col-sm-12 col-md-5">
                <h4 class="fw-bold justificado englobar beige">
                    <svg width="28" height="28" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                        Información
                </h4>
                <hr class="mb-4 justificado beige">
                <div class=" aliniar ">
                    <!-- Titulas -->
                    <h5 class="justificado beige">
                        <span class="fw-bold">Titular de la empresa: Grupo 11</span>
                    </h5>
                    <hr class="mb-4 justificado beige">
                    <!--Datos de ubicación -->
                    <h5 class="justificado beige">
                        Nuestra ubicación:
                    </h5>
                    <div>
                        <p class="fw-bold justificado englobar beige h5">
                            <!-- Ubicación -->
                            <svg width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 20 20">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            Av. 3 de abril 558 Dep. 3A
                        </p>
                    </div>
                    <hr>
                    <h5 class="justificado beige">
                        Nuestros medios de comunicación:
                    </h5>
                    <!-- Teléfono -->
                    <div>
                        <p class="fw-bold justificado englobar beige h5">
                            <!-- Teléfono -->
                            <svg width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 20 20">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                            (+54) 3794 - 495684
                        </p>
                    </div>
                    <!-- Correo electrónico -->
                    <div>
                        <p class="fw-bold justificado englobar beige h5">
                            <!-- Email -->
                            <svg width="24" height="24" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 20 20">
                                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                            </svg>
                            sneakersociety@gmail.com
                        </p>
                    </div>
                </div>
                <!-- Horario de atención (IMG)-->
                <div class="d-flex justify-content-start">
                    <img src="<?php echo base_url("assets/img/Contacto/horarios.jpg")?>" class="img-fluid mb-4" width="350" alt="Horario">
                </div>
            </div>
            <!-- Formulario -->
            <div class="col-12 col-sm-12 col-md-6">
                <!-- Título del formulario de contacto -->
                <h4 class="text-center fw-bold englobar beige">
                    <svg width="28" height="28" fill="currentColor" class="bi bi-input-cursor-text" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 2a.5.5 0 0 1 .5-.5c.862 0 1.573.287 2.06.566.174.099.321.198.44.286.119-.088.266-.187.44-.286A4.165 4.165 0 0 1 10.5 1.5a.5.5 0 0 1 0 1c-.638 0-1.177.213-1.564.434a3.49 3.49 0 0 0-.436.294V7.5H9a.5.5 0 0 1 0 1h-.5v4.272c.1.08.248.187.436.294.387.221.926.434 1.564.434a.5.5 0 0 1 0 1 4.165 4.165 0 0 1-2.06-.566A4.561 4.561 0 0 1 8 13.65a4.561 4.561 0 0 1-.44.285 4.165 4.165 0 0 1-2.06.566.5.5 0 0 1 0-1c.638 0 1.177-.213 1.564-.434.188-.107.335-.214.436-.294V8.5H7a.5.5 0 0 1 0-1h.5V3.228a3.49 3.49 0 0 0-.436-.294A3.166 3.166 0 0 0 5.5 2.5.5.5 0 0 1 5 2z"/>
                        <path d="M10 5h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1h-4v1h4a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-4v1zM6 5V4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v-1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4z"/>
                    </svg>
                    Formulario de Contacto
                </h4>
                <hr class="mb-4">

                <div class="container mb-4">
                    <div class="row">
                        <?php if(session()->is_logged && session()->us_Perfil_id == 2): ?>
                        <form method="POST" action="<?php echo base_url(route_to("consulta")) ?>">
                            <fieldset>
                                <input id="con_Email" name="con_Email" value="<?=session()->us_Email?>" style="display: none;">
                                <input id="con_Nombre" name="con_Nombre" value="<?=session()->us_Name?>" style="display: none;">
                                <input id="con_Apellido" name="con_Apellido" value="<?=session()->us_Apellido?>" style="display: none;">
                                <div class="form-group">
                                    <label for="con_Asunto" class="form-label mb-2 englobar beige h3">
                                        <svg width="24" height="24" fill="currentColor" class="bi bi-chevron-bar-right" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4.146 3.646a.5.5 0 0 0 0 .708L7.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0zM11.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                        Asunto:
                                    </label>
                                    <input type="text" name="con_Asunto" class="form-control h4" id="con_Asunto" placeholder="Ingresar Asunto">
                                    <?php if(isset($validation['cont_Asunto'])): ?>
                                    <div class="alert alert-danger p-1 mt-1 ">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['con_Asunto']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- Area de texto para los comentarios -->
                                <div class="form-group">
                                    <label for="con_Mensaje" class="form-label mb-2 englobar beige h3">
                                        <svg width="24" height="24" fill="currentColor" class="bi bi-envelope" viewBox="0 0 20 20">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                        </svg>
                                        Mensaje:
                                    </label>
                                    <textarea class="form-control" name="con_Mensaje" id="con_Mensaje" rows="4" placeholder="Ingresar Mensaje"></textarea>
                                    <?php if(isset($validation['cont_Mensaje'])): ?>
                                    <div class="alert alert-danger p-1 mt-1">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['con_Mensaje']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg mt-4 px-2 h2">&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;</button>
                            </fieldset>
                        </form>

                        <?php else: ?>
                        <!-- Campo de ingreso de correo electrónico -->
                        <form method="POST" action="<?php echo base_url(route_to("contacto_C")) ?>">
                            <fieldset>
                                <div class="form-group">
                                    <label for="cont_Email" class="form-label beig h4">
                                        <svg width="24" height="24" fill="currentColor" class="bi bi-envelope-at h4" viewBox="0 0 20 20">
                                            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                            <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                                        </svg>
                                        Correo Electrónico:
                                    </label>
                                    <input type="email" name="cont_Email" class="form-control h4" id="cont_Email" aria-describedby="emailHelp" placeholder="Ingrese su Correo electrónico">
                                    <?php if(isset($validation['cont_Email'])): ?>
                                    <div class="alert alert-danger p-1 mt-1 h4">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle h4" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['cont_Email']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- Nombre -->
                                <div class="form-group">
                                    <label for="cont_Nombre" class="form-label mt-4 beige h4">
                                        <svg width="24" height="24" fill="currentColor" class="bi bi-person-circle h4" viewBox="0 0 20 20">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                        Nombre:
                                    </label>
                                    <input type="text" name="cont_Nombre" class="form-control h4" id="cont_Nombre" placeholder="Ingrese su Nombre">
                                    <?php if(isset($validation['cont_Nombre'])): ?>
                                    <div class="alert alert-danger p-1 mt-1 h4">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle h4" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['cont_Nombre']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- Apellido -->
                                <div class="form-group">
                                    <label for="cont_Apellido" class="form-label mt-4 beige h4">
                                        <svg width="24" height="24" fill="currentColor" class="bi bi-person-circle h4" viewBox="0 0 20 20">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                        Apellido:
                                    </label>
                                    <input type="text" name="cont_Apellido" class="form-control h4" id="cont_Apellido" placeholder="Ingrese su Apellido">
                                    <?php if(isset($validation['cont_Apellido'])): ?>
                                    <div class="alert alert-danger p-1 mt-1 h4">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle h4" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['cont_Apellido']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- Asunto -->
                                <div class="form-group">
                                    <label for="cont_Asunto" class="form-label mt-4 beige h4">
                                        <svg width="24" height="24" fill="currentColor" class="bi bi-chevron-bar-right h4" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4.146 3.646a.5.5 0 0 0 0 .708L7.793 8l-3.647 3.646a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708 0zM11.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                        Asunto:
                                    </label>
                                    <input type="text" name="cont_Asunto" class="form-control h4" id="cont_Asunto" placeholder="Ingresar Asunto">
                                    <?php if(isset($validation['cont_Asunto'])): ?>
                                    <div class="alert alert-danger p-1 mt-1 h4">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle h4" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['cont_Asunto']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- Area de texto para los comentarios -->
                                <div class="form-group">
                                    <label for="cont_Mensaje" class="form-label mt-4 beige h4">
                                    <svg width="24" height="24" fill="currentColor" class="bi bi-envelope h4" viewBox="0 0 20 20">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                        Mensaje:
                                    </label>
                                    <textarea class="form-control h4" name="cont_Mensaje" id="cont_Mensaje" rows="4"></textarea>
                                    <?php if(isset($validation['cont_Mensaje'])): ?>
                                    <div class="alert alert-danger p-1 mt-1 h4">
                                        <?php echo 
                                            '<svg width="28" height="28" fill="currentColor" class="bi bi-exclamation-triangle h4" viewBox="0 0 20 20">
                                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                            </svg>'. $validation['cont_Mensaje']?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg mt-4 px-2 h4">&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;</button>
                            </fieldset>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Iframe de la localización -->
<section class="container">
    <h5 class="text-uppercase mb-4 mt-4 fw-bold justificado beige h4">
        <svg class="icon icon-tabler icon-tabler-current-location" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F5F5DC" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="12" cy="12" r="3"/>
            <circle cx="12" cy="12" r="8"/>
            <line x1="12" y1="2" x2="12" y2="4"/>
            <line x1="12" y1="20" x2="12" y2="22"/>
            <line x1="20" y1="12" x2="22" y2="12"/>
            <line x1="2" y1="12" x2="4" y2="12"/>
        </svg>
        Visita nuestro local
    </h5>
    <div class="embed-responsive embed-responsive-16by9 shadow p-3 mb-5 bg-white rounded">
        <iframe 
            class="embed-responsive-item" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.824340299014!2d-58.84528145171905!3d-27.474727560536373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cbdf3f44d99%3A0x21fc1e59b7f7bef0!2sAv.%203%20de%20Abril%20558%2C%20Corrientes!5e0!3m2!1ses!2sar!4v1650894676329!5m2!1ses!2sar"></iframe>
    </div>
</section>