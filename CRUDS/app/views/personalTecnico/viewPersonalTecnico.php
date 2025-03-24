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
    if (empty($personalTecnico)) {
        echo '<br>No se encuentran personalTecnico en la base de datos';
    } else {
        foreach ($personalTecnico as $key => $value) {
            echo
            "<div class='record'>
                <span> Personal Tecnico: $value->nombre</span>
                <div class='buttons'>
                    <a href='/proyecto/view/$value->id_personal_tecnico'> <button>Consultar</button> </a> 
                    <a href='/proyecto/edit/$value->id_personal_tecnico'> <button>Editar</button> </a> 
                    <a href='/proyecto/delete/$value->id_personal_tecnico'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>