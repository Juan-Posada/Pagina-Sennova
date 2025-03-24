<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/personalTecnico/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/personalTecnico/update" method="post">
            <div class="form-group">
                <label for="">ID del Personal tecnico:</label>
                <input type="text" readonly value="<?php echo $personalTecnico->id_personal_tecnico ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre del Proyecto:</label>
                <input type="text" value="<?php echo $personalTecnico->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>