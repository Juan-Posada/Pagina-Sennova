<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/asesoria/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/asesoria/remove" method="post">
            <div class="form-group">
                <label>ID de Asesoria:</label>
                <input type="text" readonly value="<?php echo $asesoria->nombre ?>" name="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>