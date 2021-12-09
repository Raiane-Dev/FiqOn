<?php
    namespace Src\DAOs;

    use Src\Infrastructure\Database;

    class Subscribed{
        private string $name;
        private string $email;
        private string $password;
        private $image;
        private int $function;

        public function __construct($user_id, $vacancy_id, $name, $email, $whatsapp, $repository_link, $cv){
            $this->user_id = $user_id;
            $this->vacancy_id = $vacancy_id;
            $this->name = $name;
            $this->email = $email;
            $this->whatsapp = $whatsapp;
            $this->repository_link = $repository_link;
            $this->cv = $cv;
        }

        public function insert(){
            $insert = Database::connect()->prepare("INSERT INTO subscribed VALUES (null, ?, ?, ?, ?, ?, ?, ?)");
            $insert->execute([$this->user_id, $this->vacancy_id, $this->name, $this->email, $this->whatsapp, $this->repository_link, $this->cv]);
        }
    }
?>