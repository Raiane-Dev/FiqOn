<?php
    namespace Src\DAOs\Requests;

    use Src\Infrastructure\Database;

    class RequestGet{
        protected $endpoint;

        protected function __construct(array $endpoint_receive){
            $this->data = $endpoint_receive;
        }

        protected function getJob(){
            $get = Database::connect()->prepare("SELECT * FROM vacancy");
            $get->execute();
            $get = $get->fetchAll();
            echo (json_encode($get));
        }

        protected function getSubscribed(){
            $get = Database::connect()->prepare("SELECT * FROM subscribed");
            $get->execute();
            $get = $get->fetchAll();
            echo (json_encode($get));
        }

        protected function getUsers(){
            $get = Database::connect()->prepare("SELECT * FROM users");
            $get->execute();
            $get = $get->fetchAll();
            echo (json_encode($get));
        }
    }
?>