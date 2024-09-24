<div class="d-flex justify-content-center mb-3">
    <button class="btn btn-lg btn-outline-primary rounded-circle me-2" type="button">
        1
    </button>
    <button class="btn btn-lg btn-outline-primary rounded-circle me-2" type="button">
        2
    </button>
    <button class="btn btn-lg btn-outline-primary rounded-circle active" type="button">
        3
    </button>
</div>


<h4 class="mb-4">Método de pago</h4>


<div class="row mb-3">
    <div class="col-auto">
        <div class="form-floating mb-3">
            <select class="form-select" id="select_metodo_de_pago_pago_incremento" aria-label="Seleccione un método de pago">
            </select>
            <label for="select_metodo_de_pago_pago_incremento">Seleccione un método de pago:</label>
        </div>
    </div>
    <div class="col-auto div_formulario_onajpu_incremento">
        <div class="form-floating mb-3">
            <input type="text" class="form-control solo_letras" id="txt_nombre_titular_onajpu_incremento" placeholder="Nombre Titular">
            <label for="txt_nombre_titular_onajpu_incremento">Nombre Titular:</label>
        </div>
    </div>
    <div class="col-auto div_formulario_onajpu_incremento">
        <div class="form-floating mb-3">
            <input type="text" class="form-control solo_numeros" id="txt_cedula_titular_onajpu_incremento" placeholder="Cédula Titular">
            <label for="txt_cedula_titular_onajpu_incremento">Cédula Titular:</label>
        </div>
    </div>
    <div class="col-auto div_formulario_datos_tarjeta_incremento">
        <button class="btn btn-warning" onclick="validar_datos_tarjeta_incremento(true)">Datos tarjeta de crédito</button>
    </div>
</div>