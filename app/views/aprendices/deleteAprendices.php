<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/aprendices/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/aprendices/remove" method="post">
            <div class="form-group">
                <label>ID del Aprendiz:</label>
                <input type="text" readonly value="<?php echo $aprendiz->id_aprendices ?>" name="txtId" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>