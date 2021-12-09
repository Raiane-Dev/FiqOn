<?php
    namespace Api;

    use Src\DAOs\Requests\RequestPost;

    final class POST extends RequestPost{

        public function __construct(){
            $this->action();
        }


        protected function action(){
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Methods: POST");
            header("Access-Control-Max-Age: 3600");
            header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
            $data = file_get_contents("php://input");

            $this->post(json_decode($data, true));
        }

        protected function post($data){
            if(array_key_exists("title", $data) && array_key_exists("image", $data) && array_key_exists("color", $data) && array_key_exists("workload", $data) && array_key_exists("modality", $data) && array_key_exists("wage", $data) && array_key_exists("description", $data) && array_key_exists("roles", $data) && array_key_exists("minimum_requirements", $data) && array_key_exists("differentials", $data)){
                (new RequestPost($data))->postJob();
            }
            
            if(array_key_exists("name", $data) && array_key_exists("user_id", $data) && array_key_exists("vacancy_id", $data) && array_key_exists("email", $data) && array_key_exists("whatsapp", $data) && array_key_exists("repository_link", $data) && array_key_exists("cv", $data)){
                (new RequestPost($data))->postSubscribed();
            }

            if(array_key_exists("name", $data) && array_key_exists("email", $data) && array_key_exists("password", $data) && array_key_exists("image", $data) && array_key_exists("function", $data)){
                (new RequestPost($data))->postUsers();
            }

        }
    }
?>