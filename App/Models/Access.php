<?php
    namespace App\Models;

    use Src\Authenticator\Authenticator;
    use Src\Repository\Users\AllUsers;

    final class Access extends Authenticator{
        use \Src\Helper\FlashMessage;
        private string $name;
        private string $email;
        private string $password;
        private $image;
        
        public function __construct($name, $email, $password, $image){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->image = $image;

            $this->access();
        }

        private function access(){
            if($this->verifyEmail($this->email) && $this->verifyPassword($this->password) && $this->verifyName($this->name) && $this->verifyImage($this->image)){
                $users = \Src\Infrastructure\Database::connect()->prepare("SELECT * FROM users WHERE `email` = ? AND `password` = ?");
                $users->execute(array($this->email, $this->password));
                $users = $users->fetch();
                if($users){
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $users['id'];
                    $_SESSION['name'] = $this->name;
                    $_SESSION['email'] = $this->email;
                    $_SESSION['image'] = $this->image;
                    $_SESSION['function'] = $users['function'];
                    \Src\Helper\FlashMessage::alertSuccess("Successfully logged in");
                    echo '<script> window.location.href = "home"; </script>';
                 }else{
                    (new \Src\DAOs\Users($this->name, $this->email, $this->password, $this->image['name'], 1))->insert();
                    \Src\Helper\FlashMessage::alertSuccess("Successfully registered");
                }
                
            }
        }
    }
?>