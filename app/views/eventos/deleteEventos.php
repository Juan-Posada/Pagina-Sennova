<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/eventos/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/eventos/remove" method="post">
            <div class="form-group">
                <label>ID del Evento:</label>
                <input type="text" readonly value="<?php echo $evento->id_servicio ?>" name="txtId" class="form-control">
                <label>Eevnto:</label>
                <input type="text" readonly value="<?php echo $evento->nombre ?>" name="txtId" class="form-control">
                </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>