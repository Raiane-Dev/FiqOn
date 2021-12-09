<?php
    namespace Src\DAOs\Requests;

    use Src\Infrastructure\Database;

    class RequestPut{
        protected $data;

        protected function __construct(array $data_receive){
            $this->data = $data_receive;
        }

        protected function updateJob(){
            $id = $this->data['id'];
            $post = Database::connect()->prepare("UPDATE vacancy SET id = ?, title = ?, image = ?, color = ?, workload = ?, modality = ?, wage = ?, description = ?, roles = ?, minimum_requirements = ?, differentials = ? WHERE id = $id");
            $post->execute(array_values($this->data));
            echo "Update Job Success!";
        }

        protected function updateSubscribed(){
            $id = $this->data['id'];
            $post = Database::connect()->prepare("UPDATE subscribed SET id = ?, user_id = ?, vacancy_id = ?, name = ?, email = ?, whatsapp = ?, repository_link = ?, cv = ? WHERE id = $id");
            $post->execute(array_values($this->data));
            echo "Successfully Update Subscribed!";
        }

        protected function updateUsers(){
            $id = $this->data['id'];
            $post = Database::connect()->prepare("UPDATE users SET id = ?, name = ?, email = ?, password = ?, image = ?, function = ? WHERE id = $id");
            $post->execute(array_values($this->data));
            echo "Successfully Update User!";
        }
    }
?>