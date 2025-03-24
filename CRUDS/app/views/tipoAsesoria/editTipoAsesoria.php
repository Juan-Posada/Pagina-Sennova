<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/tipoAsesoria/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/tipoAsesoria/update" method="post">
            <div class="form-group">
                <label for="">ID del Tipo de Asesoria:</label>
                <input type="text" readonly value="<?php echo $tipoAsesoria->id_tipo_asesoria ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Tipo de Asesoria:</label>
                <input type="text" value="<?php echo $tipoAsesoria->linea_sennova ?>" name="txtLineaSennova" id="txtLineaSennova" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Descripcion del Tipo de Asesoria:</label>
                <input type="text" value="<?php echo $tipoAsesoria->descripcion ?>" name="txtDescription" id="txtDescription" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>