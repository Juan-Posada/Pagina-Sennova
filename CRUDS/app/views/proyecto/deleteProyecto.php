<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/proyecto/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/proyecto/remove" method="post">
            <div class="form-group">
                <label>ID del Proyecto:</label>
                <input type="text" readonly value="<?php echo $proyecto->id_proyecto ?>" name="txtId" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>