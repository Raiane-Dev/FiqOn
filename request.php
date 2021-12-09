<?php
    require_once 'vendor/autoload.php';

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            (new \Api\GET);
            break;
        
        case 'POST':
            (new \Api\POST);
            break;
        
        case 'PUT':
            (new \Api\PUT);
            break;

        case 'DELETE':
            (new \Api\DELETE);
            break;
    }
?>