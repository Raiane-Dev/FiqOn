<?php

    require_once 'vendor/autoload.php';
    ini_set("allow_url_fopen", true);

    $rota = (new App\Routes\Router)->run('/home', '\App\Controllers\Controller', 'home');
    $rota = (new App\Routes\Router)->run('/list-jobs', '\App\Controllers\Controller', 'jobs');
    $rota = (new App\Routes\Router)->run('/single-job', '\App\Controllers\Controller', 'singleJob');
    $rota = (new App\Routes\Router)->run('/access','\App\Controllers\Controller', 'access');
    $rota = (new App\Routes\Router)->run('/post','\App\Controllers\Controller', 'post');

?>