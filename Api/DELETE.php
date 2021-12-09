<?php
    namespace Api;

    use Src\DAOs\Requests\RequestDelete;

    final class DELETE extends RequestDelete{

        public function __construct(){
            $this->action();
        }


        protected function action(){
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Methods: PUT");
            header("Access-Control-Max-Age: 3600");
            header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
            $data = file_get_contents("php://input");

            $this->delete(json_decode($data, true));
        }

        protected function delete($data){
            if(array_key_exists("id", $data) && in_array("job", $data)){
                (new RequestDelete($data))->deleteJob();
            }
            
            if(array_key_exists("id", $data) && in_array("subscribed", $data)){
                (new RequestDelete($data))->deleteSubscribed();
            }

            if(array_key_exists("id", $data) && in_array("users", $data)){
                (new RequestDelete($data))->deleteUsers();
            }

        }
    }
?>