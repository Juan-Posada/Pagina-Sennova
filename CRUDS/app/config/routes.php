<?php
return [
    "/" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "index"
    ],
    
    // Rutas para Proyecto
    "/proyecto/view" => [
        "controller" => "App\Controllers\ProyectoController",
        "action" => "view"
    ],
    "/proyecto/new" => [
        "controller" => "App\Controllers\ProyectoController",
        "action" => "newProyecto"
    ],
    "/proyecto/create" => [
        "controller" => "App\Controllers\ProyectoController",
        "action" => "createProyecto"
    ],
    "/proyecto/edit/(\d+)" => [
        "controller" => "App\Controllers\ProyectoController",
        "action" => "editProyecto"
    ],
    "/proyecto/update" => [
        "controller" => "App\Controllers\ProyectoController",
        "action" => "updateProyecto"
    ],
    "/proyecto/delete/(\d+)" => [
        "controller" => "App\Controllers\ProyectoController",
        "action" => "deleteProyecto"
    ],
    "/proyecto/remove" => [
        "controller" => "App\Controllers\ProyectoController",
        "action" => "remove"
    ],
    "/proyecto/view/(\d+)" => [
        "controller" => "App\Controllers\ProyectoController",
        "action" => "viewOneProyecto"
    ],
    
    // Rutas para Eventos
    "/eventos/view" => [
        "controller" => "App\Controllers\EventosController",
        "action" => "view"
    ],
    "/eventos/new" => [
        "controller" => "App\Controllers\EventosController",
        "action" => "newEvento"
    ],
    "/eventos/create" => [
        "controller" => "App\Controllers\EventosController",
        "action" => "createEvento"
    ],
    "/eventos/edit/(\d+)" => [
        "controller" => "App\Controllers\EventosController",
        "action" => "editEvento"
    ],
    "/eventos/update" => [
        "controller" => "App\Controllers\EventosController",
        "action" => "updateEvento"
    ],
    "/eventos/delete/(\d+)" => [
        "controller" => "App\Controllers\EventosController",
        "action" => "deleteEvento"
    ],
    "/eventos/remove" => [
        "controller" => "App\Controllers\EventosController",
        "action" => "remove"
    ],
    "/eventos/view/(\d+)" => [
        "controller" => "App\Controllers\EventosController",
        "action" => "viewOneEvento"
    ],

    // Rutas para Aprendices
    "/aprendices/view" => [
        "controller" => "App\Controllers\AprendicesController",
        "action" => "view"
    ],
    "/aprendices/new" => [
        "controller" => "App\Controllers\AprendicesController",
        "action" => "newAprendiz"
    ],
    "/aprendices/create" => [
        "controller" => "App\Controllers\AprendicesController",
        "action" => "createAprendiz"
    ],
    "/aprendices/edit/(\d+)" => [
        "controller" => "App\Controllers\AprendicesController",
        "action" => "editAprendiz"
    ],
    "/aprendices/update" => [
        "controller" => "App\Controllers\AprendicesController",
        "action" => "updateAprendiz"
    ],
    "/aprendices/delete/(\d+)" => [
        "controller" => "App\Controllers\AprendicesController",
        "action" => "deleteAprendiz"
    ],
    "/aprendices/remove" => [
        "controller" => "App\Controllers\AprendicesController",
        "action" => "remove"
    ],
    "/aprendices/view/(\d+)" => [
        "controller" => "App\Controllers\AprendicesController",
        "action" => "viewOneAprendiz"
    ],

    // Rutas para Tipos de Asesoria
    "/tipoAsesoria/view" => [
        "controller" => "App\Controllers\TipoAsesoriaController",
        "action" => "view"
    ],
    "/tipoAsesoria/new" => [
        "controller" => "App\Controllers\TipoAsesoriaController",
        "action" => "newTipoAsesoria"
    ],
    "/tipoAsesoria/create" => [
        "controller" => "App\Controllers\TipoAsesoriaController",
        "action" => "createTipoAsesoria"
    ],
    "/tipoAsesoria/edit/(\d+)" => [
        "controller" => "App\Controllers\TipoAsesoriaController",
        "action" => "editTipoAsesoria"
    ],
    "/tipoAsesoria/update" => [
        "controller" => "App\Controllers\TipoAsesoriaController",
        "action" => "updateTipoAsesoria"
    ],
    "/tipoAsesoria/delete/(\d+)" => [
        "controller" => "App\Controllers\TipoAsesoriaController",
        "action" => "deleteTipoAsesoria"
    ],
    "/tipoAsesoria/remove" => [
        "controller" => "App\Controllers\TipoAsesoriaController",
        "action" => "remove"
    ],
    "/tipoAsesoria/view/(\d+)" => [
        "controller" => "App\Controllers\TipoAsesoriaController",
        "action" => "viewOneTipoAsesoria"
    ],

    // Rutas para Asesoria
    "/asesoria/view" => [
        "controller" => "App\Controllers\AsesoriaController",
        "action" => "view"
    ],
    "/asesoria/new" => [
        "controller" => "App\Controllers\AsesoriaController",
        "action" => "newAsesoria"
    ],
    "/asesoria/create" => [
        "controller" => "App\Controllers\AsesoriaController",
        "action" => "createAsesoria"
    ],
    "/asesoria/edit/(\d+)" => [
        "controller" => "App\Controllers\AsesoriaController",
        "action" => "editAsesoria"
    ],
    "/asesoria/update" => [
        "controller" => "App\Controllers\AsesoriaController",
        "action" => "updateAsesoria"
    ],
    "/asesoria/delete/(\d+)" => [
        "controller" => "App\Controllers\AsesoriaController",
        "action" => "deleteAsesoria"
    ],
    "/asesoria/remove" => [
        "controller" => "App\Controllers\AsesoriaController",
        "action" => "remove"
    ],
    "/asesoria/view/(\d+)" => [
        "controller" => "App\Controllers\AsesoriaController",
        "action" => "viewOneAsesoria"
    ],

    // Rutas para Personal Técnico
    "/personalTecnico/view" => [
        "controller" => "App\Controllers\PersonalTecnicoController",
        "action" => "view"
    ],
    "/personalTecnico/new" => [
        "controller" => "App\Controllers\PersonalTecnicoController",
        "action" => "newPersonalTecnico"
    ],
    "/personalTecnico/create" => [
        "controller" => "App\Controllers\PersonalTecnicoController",
        "action" => "createPersonalTecnico"
    ],
    "/personalTecnico/edit/(\d+)" => [
        "controller" => "App\Controllers\PersonalTecnicoController",
        "action" => "editPersonalTecnico"
    ],
    "/personalTecnico/update" => [
        "controller" => "App\Controllers\PersonalTecnicoController",
        "action" => "updatePersonalTecnico"
    ],
    "/personalTecnico/delete/(\d+)" => [
        "controller" => "App\Controllers\PersonalTecnicoController",
        "action" => "deletePersonalTecnico"
    ],
    "/personalTecnico/remove" => [
        "controller" => "App\Controllers\PersonalTecnicoController",
        "action" => "remove"
    ],
    "/personalTecnico/view/(\d+)" => [
        "controller" => "App\Controllers\PersonalTecnicoController",
        "action" => "viewOnePersonalTecnico"
    ],

    // Rutas para Reuniones
    "/reunion/view" => [
        "controller" => "App\Controllers\ReunionController",
        "action" => "view"
    ],
    "/reunion/new" => [
        "controller" => "App\Controllers\ReunionController",
        "action" => "newReunion"
    ],
    "/reunion/create" => [
        "controller" => "App\Controllers\ReunionController",
        "action" => "createReunion"
    ],
    "/reunion/edit/(\d+)" => [
        "controller" => "App\Controllers\ReunionController",
        "action" => "editReunion"
    ],
    "/reunion/update" => [
        "controller" => "App\Controllers\ReunionController",
        "action" => "updateReunion"
    ],
    "/reunion/delete/(\d+)" => [
        "controller" => "App\Controllers\ReunionController",
        "action" => "deleteReunion"
    ],
    "/reunion/remove" => [
        "controller" => "App\Controllers\ReunionController",
        "action" => "remove"
    ],
    "/reunion/view/(\d+)" => [
        "controller" => "App\Controllers\ReunionController",
        "action" => "viewOneReunion"
    ],
];
?>