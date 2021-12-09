<?php
    namespace Api;

    use Src\DAOs\Requests\RequestGet;

    final class GET extends RequestGet{

        public function __construct(){
            $this->action();
        }


        protected function action(){
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Methods: GET");
            header("Access-Control-Max-Age: 3600");
            header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
            $data = file_get_contents("php://input");

            $this->get(json_decode($data, true));
        }

        protected function get($data){
            if(array_key_exists("file", $data) && in_array("job", $data)){
                (new RequestGet($data))->getJob();
            }
            
            if(array_key_exists("file", $data) && in_array("subscribed", $data)){
                (new RequestGet($data))->getSubscribed();
            }

            if(array_key_exists("file", $data) && in_array("users", $data)){
                (new RequestGet($data))->getUsers();
            }

        }
    }







    // namespace Api;

    // final class GET{
    //     protected string $endpoint;
    //     protected string $uri;
    //     protected $data;

    //     public function __construct($endpoint = ''){
    //         $this->uri = "http://localhost/FiqOn/Api/JSON/";
    //         $this->endpoint = $endpoint;

    //         $this->request();
    //     }


    //     public function request(){
    //         // $ch = curl_init('http://localhost/FiqOn/list-jobs.json');

    //         $ch = curl_init($this->uri.$this->endpoint);
    //         curl_setopt($ch, CURLOPT_HEADER, false);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json", "Content-Type: application/json"]);
    //         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //         curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    //         curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    //         $response = json_decode(curl_exec($ch));
    //         curl_close($ch);
        
    //         echo '<pre>';
    //         print_r($response);
    //         echo '</pre>';
    //     }
    // }
?>