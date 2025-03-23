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
];
?>