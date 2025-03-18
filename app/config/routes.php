<?php
    return [
        "/" => [
            "controller" => "App\Controllers\HomeController",
            "action" => "index"
        ],
        // Eventos
"/evento/index" => [
    "controller" => "App\Controllers\EventoController",
    "action" => "index"
],
"/evento/view" => [
    "controller" => "App\Controllers\EventoController",
    "action" => "view"
],
"/evento/new" => [
    "controller" => "App\Controllers\EventoController",
    "action" => "newEvento"
],
"/evento/create" => [
    "controller" => "App\Controllers\EventoController",
    "action" => "createEvento"
],
"/evento/view/(\d+)" => [
    "controller" => "App\Controllers\EventoController",
    "action" => "viewEvento"
],
"/evento/edit/(\d+)" => [
    "controller" => "App\Controllers\EventoController",
    "action" => "editEvento"
],
"/evento/update" => [
    "controller" => "App\Controllers\EventoController",
    "action" => "updateEvento"
],
"/evento/delete/(\d+)" => [
    "controller" => "App\Controllers\EventoController",
    "action" => "deleteEvento"
],
// Proyectos
"/proyecto/index" => [
    "controller" => "App\Controllers\ProyectoController",
    "action" => "index"
],
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
"/proyecto/view/(\d+)" => [
    "controller" => "App\Controllers\ProyectoController",
    "action" => "viewProyecto"
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
// Aprendices
"/aprendiz/index" => [
    "controller" => "App\Controllers\AprendizController",
    "action" => "index"
],
"/aprendiz/view" => [
    "controller" => "App\Controllers\AprendizController",
    "action" => "view"
],
"/aprendiz/new" => [
    "controller" => "App\Controllers\AprendizController",
    "action" => "newAprendiz"
],
"/aprendiz/create" => [
    "controller" => "App\Controllers\AprendizController",
    "action" => "createAprendiz"
],
"/aprendiz/view/(\d+)" => [
    "controller" => "App\Controllers\AprendizController",
    "action" => "viewAprendiz"
],
"/aprendiz/edit/(\d+)" => [
    "controller" => "App\Controllers\AprendizController",
    "action" => "editAprendiz"
],
"/aprendiz/update" => [
    "controller" => "App\Controllers\AprendizController",
    "action" => "updateAprendiz"
],
"/aprendiz/delete/(\d+)" => [
    "controller" => "App\Controllers\AprendizController",
    "action" => "deleteAprendiz"
],

    ];
?>