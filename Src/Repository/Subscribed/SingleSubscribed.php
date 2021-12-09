<?php
    namespace Src\Repository\Subscribed;

    use Src\Infrastructure\Database;

    class SingleSubscribed{
        public static function getSingle($id): array{
            $subscribed = Database::connect()->prepare("SELECT * FROM subscribed WHERE id = $id");
            $subscribed->execute();
            return $subscribed->fetch();
        }
    }
?>