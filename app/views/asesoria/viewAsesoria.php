<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/asesoria/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($asesorias)) {
        echo '<br>No se encuentran proyectos en la base de datos';
    } else {
        foreach ($asesorias as $key => $value) {
            echo
            "<div class='record'>
                <span> Asesoría: $value->nombre</span>
                <div class='buttons'>
                    <a href='/asesoria/view/$value->id_asesoria'> <button>Consultar</button> </a> 
                    <a href='/asesoria/edit/$value->id_asesoria'> <button>Editar</button> </a> 
                    <a href='/asesoria/delete/$value->id_asesoria'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>