<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/asesoria/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/asesoria/update" method="post">
            <div class="form-group">
                <label for="">Nombre de la asesoria:</label>
                <input type="text" readonly value="<?php echo $asesoria->nombre ?>" name="txtNombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="">ID de la asesoria</label>
                <input type="text" value="<?php echo $asesoria->$id_asesoria ?>" name="txtDescription" id="txtDescription" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>