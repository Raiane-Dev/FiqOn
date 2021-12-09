<?php
    namespace Src\DAOs;

    use Src\Infrastructure\Database;

    class Users{
        private string $name;
        private string $email;
        private string $password;
        private $image;
        private int $function;

        public function __construct($name, $email, $password, $image, $function){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->image = $image;
            $this->function = $function;
        }

        public function insert(){
            $insert = Database::connect()->prepare("INSERT INTO users VALUES (null, ?, ?, ?, ?, ?)");
            $insert->execute([$this->name, $this->email, $this->password, $this->image, $this->function]);
        }

        public function update($id){
            $insert = Database::connect()->prepare("UPDATE * FROM users VALUES (null, ?, ?, ?, ?, ?) WHERE id = $id");
            $insert->execute([$this->name, $this->email, $this->password, $this->image, $this->function]);
        }
    }
?>