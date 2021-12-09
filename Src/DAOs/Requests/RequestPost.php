<?php
    namespace Src\DAOs\Requests;

    use Src\Infrastructure\Database;

    class RequestPost{
        protected $data;

        protected function __construct(array $data_receive){
            $this->data = $data_receive;
        }

        protected function postJob(){
            $post = Database::connect()->prepare("INSERT INTO vacancy VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $values = array_values($this->data);
            $post->execute($values);
            echo "Success!";
        }

        protected function postSubscribed(){
            $post = Database::connect()->prepare("INSERT INTO subscribed VALUES (null, ?, ?, ?, ?, ?, ?, ?)");
            $post->execute(array_values($this->data));
            echo "Successfully Subscribed!";
        }

        protected function postUsers(){
            $post = Database::connect()->prepare("INSERT INTO users VALUES (null, ?, ?, ?, ?, ?)");
            $post->execute(array_values($this->data));
            echo "Successfully registered!";
        }
    }
?>