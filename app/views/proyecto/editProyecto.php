<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/proyecto/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/proyecto/update" method="post">
            <div class="form-group">
                <label for="">ID del Proyecto:</label>
                <input type="text" readonly value="<?php echo $proyecto->id_proyecto ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre del Proyecto:</label>
                <input type="text" value="<?php echo $proyecto->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>