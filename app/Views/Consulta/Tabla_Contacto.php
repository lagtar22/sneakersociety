<!-- Mensaje al realizar una acción en consulta -->
<?php
    $i = 0;
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
<!-- Tabla de mensajes sin leer -->
<section class="container">
    <div class="col-12 col-xs-12 col-sm-12 mx-auto mt-6 mb-6">
        <!-- Título del formulario de contacto -->
        <h3 class="text-center fw-bold englobar ">
            <svg width="28" height="28" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 18 18">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
            </svg>
            <?=$titulo?>
        </h3>
        <hr class="mb-4 ">
        <?php if(isset($contacto)): ?>
        <div class="accordion w-75 mx-auto" id="accordion">
            <?php foreach($contacto as $contact): ?>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i?>" aria-expanded="false" aria-controls="flush-collapseOne">
                        <svg width="24" height="24" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 20 20">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <span class="fw-bold h3 ms-5">
                            Asunto: <?=$contact['cont_Asunto'];?>
                        </span>
                        <span class="me-5 ms-5 fw-bold h3">
                            Fecha: <?=$contact['fecha_creacion'];?>
                        </span>
                    </button>
                </h2>
                <div id="flush-collapseOne<?php echo $i?>" class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body h3">
                        <p class="h4">
                            <span class="fw-bold">
                                Usuario:
                            </span>
                            <?=" ".$contact['cont_Nombre']." ".$contact['cont_Apellido'];?>
                        </p>
                        <p class="h4">
                            <span class="fw-bold">Correo Electrónico:

                            </span>
                            <?=" ".$contact['cont_Email'];?>
                        </p>
                        <p class="h4">
                            <span class="fw-bold">
                                Mensaje:
                            </span>
                            <br>
                            <?=$contact['cont_Mensaje'];?>
                        </p>
                        <div class="d-flex justify-content-evenly">
                            <a class="btn btn-dark" href="<?=base_url('administrador/consultaVerificadaContacto/'. $contact["id_Contacto"])?>" type="button">
                                <svg width="24" height="24" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 20 20">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                </svg>
                                Marcar como Leído
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            $i++;
        endforeach; ?>
        </div>
        <?php else: ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 texto mt-6 mb-6">
            <p class="text-center h3 mb-3 ">
                No se encuentran contactos para leer
            </p>
        </div>
        <?php endif;?>
    </div>
    <hr>
</section>

<!-- Tabla con los mensajes que ya se han leído -->
<section class="container">
    <div class="col-12 col-xs-12 col-sm-12 mx-auto mt-6 mb-6">
        <h3 class="text-center fw-bold englobar ">
            <svg width="28" height="28" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 18 18">
                <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
            </svg>
            <?=$titulo_Leidos?>
        </h3>
        <hr class="mb-4 ">
        <?php if(isset($contacto_Leidas)): ?>
        <div class="accordion w-75 mx-auto" id="accordion">
            <?php foreach($contacto_Leidas as $contactos):
                $i++;
            ?>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i?>" aria-expanded="false" aria-controls="flush-collapseOne">
                        <svg width="24" height="24" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 20 20">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <span class="fw-bold h3 ms-5">
                            Asunto: <?=$contactos['cont_Asunto'];?>
                        </span>
                        <span class="me-5 ms-5 fw-bold h3">
                            Fecha: <?=$contactos['fecha_creacion'];?>
                        </span>
                    </button>
                </h2>
                <div id="flush-collapseOne<?php echo $i?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body h3">
                        <p class="h4">
                            <span
                                class="fw-bold">
                                Usuario:
                            </span>
                            <?=" ".$contactos['cont_Nombre']." ".$contactos['cont_Apellido'];?>
                        </p>
                        <p class="h4">
                            <span class="fw-bold">Correo Electrónico:

                            </span>
                            <?=" ".$contactos['cont_Email'];?>
                        </p>
                        <p class="h4">
                            <span class="fw-bold">Mensaje:

                            </span>
                            <br>
                            <?=$contactos['cont_Mensaje'];?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 texto mt-6 mb-6">
            <p class="text-center h3 mb-3 ">
                No hay contactos respondidas
            </p>
        </div>
        <?php endif;?>
        <hr>
    </div>
</section>