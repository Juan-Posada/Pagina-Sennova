<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/proyecto/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($proyectos)) {
        echo '<br>No se encuentran proyectos en la base de datos';
    } else {
        foreach ($proyectos as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id_proyecto - $value->nombre</span>
                <div class='buttons'>
                    <a href='/proyecto/view/$value->id_proyecto'> <button>Consultar</button> </a> 
                    <a href='/proyecto/edit/$value->id_proyecto'> <button>Editar</button> </a> 
                    <a href='/proyecto/delete/$value->id_proyecto'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>