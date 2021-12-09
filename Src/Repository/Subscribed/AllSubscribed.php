<?php
    namespace Src\Repository\Subscribed;

    use Src\Infrastructure\Database;

    class AllSubscribed{
        public static function getAll(): array{
            $subscribed = Database::connect()->prepare("SELECT * FROM subscribed");
            $subscribed->execute();
            return $subscribed->fetchAll();
        }
    }
?>