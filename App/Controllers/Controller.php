<?php
    namespace App\Controllers;

    class Controller{
        public static function home(){
            $cvs = \Src\Repository\Vacancy\AllVacancy::getAll();
        }

        public static function access(){
            if(isset($_POST['action'])){
                (new \App\Models\Access($_POST['name'], $_POST['email'], $_POST['password'], $_FILES['image']));
            }
        }

        public static function post(){

        }

        
        public static function jobs(){

        }

        public static function singleJob(){
            if(isset($_POST['action'])){
                (new \Src\DAOs\Subscribed($_SESSION['id'], $_GET['id'], $_POST['name'], $_POST['name'], $_POST['email'], $_POST['whatsapp'], $_POST['repository_link'], $_FILES['cv']))->insert();
            }
        }
    }
?>