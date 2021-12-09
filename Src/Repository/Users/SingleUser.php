<?php
    namespace Src\Repository\Users;

    use Src\Infrastructure\Database;

    class SingleUser{
        public static function getSingle(int $id){
            $user = Database::connect()->prepare("SELECT * FROM users WHERE id = $id");
            $user->execute();
            return $user->fetch();
        }
    }
?>