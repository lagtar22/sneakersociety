<?php
    if( session()->getFlashdata( 'alertaExitosa' ) ){
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
<!-- Seccion de Catalogo -->
<section class="container-fluid mt-4 mb-4">
    <div class="row">
        <!-- título -->
        <hr class="mb-4">
        <div class="col-12">
            <h3 class="text-capitalize fw-bold text-uppercase englobar">
                <svg width="28" height="28" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                    <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                </svg>
                <?=$titulo?>
            </h3>
        </div>
        <div class="form-outline h3">
            <form method="post" action="<?php echo base_url(route_to("filtrar")) ?>">
                <div class="row">
                    <div class="col-8 col-sm-8 col-md-5 me-4 mb-5">
                        <label for="categoria" class="form-label mt-3 fw-bold h3">
                            Seleccionar Categoria
                        </label>
                        <select class="form-select" name="ct_id" id="ct_id">
                            <option value="">Todos</option>
                            <?php foreach($categorias as $categoria) :?>
                                <option value="<?= $categoria['id'] ?>"><?= $categoria['ct_Nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-3 mt-4">
                        <button type="submit" class="btn btn-dark btn-lg mt-4">
                            Filtrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <hr class="mb-4">
        <div class="row">
            <?php if($productos) :?>
            <?php foreach($productos as $product) :?>
            <!-- cards -->
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
                <div class="card tarjetaCatalogo efecto-arriba">
                    <img src="<?php echo base_url("assets/img/Catalogo/". $product['pd_Imagen'])?>" class="card-img-top rounded img-fluid">
                    <div class="card-body">
                        <h4 class="card-title">
                            "<?php echo $product['pd_Nombre']?>"
                        </h4>
                        <h5><?php echo $product['pd_Descripcion']?></h5>
                        <h6 class="h5 text-center">
                            $<?php echo $product['pd_PrecioVenta']?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="h5">
                                Stock: <?php echo $product['pd_Cantidad']?>
                            </span>
                        </h6>
                        <?php if(($product['pd_Cantidad'] > 0) && session()->is_logged) : ?>
                        <div class='text-white d-flex justify-content-center'>
                            <form method="POST" action="<?php echo base_url("cliente/agregarCarrito") ?>">
                                <input type="hidden" id="pd_id" name="pd_id" value="<?=$product['pd_id']?>">
                                <input type="hidden" id="pd_Cantidad" name="pd_Cantidad" value="<?=$product['pd_Cantidad']?>">
                                <div class='beige d-flex justify-content-center'>
                                    <button type="submit" class='btn rounded btn-primary' onclick="agregarProduct(event)">
                                        Agregar al carrito
                                    </button>
                                </div>
                            </form>
                        </div>
                        <?php elseif(!session()->is_logged) : ?>
                        <?php else: ?>
                            <div class='text-white d-flex justify-content-center'>
                                <p class="h3">
                                    <svg width="28" height="28" fill="#DC3545" class="bi bi-exclamation-triangle" viewBox="0 0 20 20">
                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                    </svg>
                                    Sin stock
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach?>
            <?php endif?>
        </div>
    </div>
</section>

<script>
function agregarProduct(event) {
    event.preventDefault();
    const formulario = event.target.parentElement.parentElement;
    console.log(formulario);
    const form = new FormData(formulario);
    fetch(formulario.action, {
        body: form,
        method: 'post'
    });
    contadorCarrito();
    swal({
        title: "Producto Agregado con exito!!",
        icon: "success",
        button: 'Continuar',
    });
}

function contadorCarrito() {
    const contador = document.querySelector(".contador_carro");
    console.log(parseInt(contador.textContent));
    if (isNaN(parseInt(contador.textContent))) {
        contador.textContent = 1;
    } else {
        contador.textContent = parseInt(contador.textContent) + 1;
    }
}
</script>