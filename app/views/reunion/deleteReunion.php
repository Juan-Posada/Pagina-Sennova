<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/reunion/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/reunion/remove" method="post">
            <div class="form-group">
                <label>ID de la Reunión:</label>
                <input type="text" readonly value="<?php echo $reunion->id_reunion ?>" name="txtId" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>