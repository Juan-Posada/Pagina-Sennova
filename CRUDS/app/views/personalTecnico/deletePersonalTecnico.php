<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/personalTecnico/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/personalTecnico/remove" method="post">
            <div class="form-group">
                <label>ID del Personal Tecnico:</label>
                <input type="text" readonly value="<?php echo $personalTecnico->id_personal_tecnico ?>" name="txtId" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Eliminar</button>
            </div>
        </form>
    </div>
</div>