<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/tipoAsesoria/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/tipoAsesoria/remove" method="post">
            <div class="form-group">
                <label>ID del Tipo Asesoría:</label>
                <input type="text" readonly value="<?php echo $tipoAsesoria->id_tipo_asesoria ?>" name="txtId" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>