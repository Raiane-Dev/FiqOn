<?php
    namespace Src\Repository\Users;

    use Src\Infrastructure\Database;

    class AllUsers{
        public function getAll($where): array{
            $users = Database::connect()->prepare("SELECT * FROM users $where");
            $users->execute();
            return $users->fetchAll();
        }
    }
?>