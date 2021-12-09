<?php
    namespace Src\DAOs\Requests;

    use Src\Infrastructure\Database;

    class RequestDelete{
        protected $data;

        protected function __construct(array $data_receive){
            $this->data = $data_receive;
        }

        protected function deleteJob(){
            $id = $this->data['id'];
            $post = Database::connect()->prepare("DELETE FROM vacancy WHERE id = $id");
            $post->execute();
            echo "Update Job Delete!";
        }

        protected function deleteSubscribed(){
            $id = $this->data['id'];
            $post = Database::connect()->prepare("DELETE FROM subscribed WHERE id = $id");
            $post->execute();
            echo "Successfully Delete Subscribed!";
        }

        protected function deleteUsers(){
            $id = $this->data['id'];
            $post = Database::connect()->prepare("DELETE FROM users WHERE id = $id");
            $post->execute();
            echo "Successfully Delete User!";
        }
    }
?>