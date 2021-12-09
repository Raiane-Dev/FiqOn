<?php
    namespace App\Models;

    use Src\Infrastructure\Database;

    final class Jobs{
        
        public static function search($search){
            $results = Database::connect()->prepare("SELECT * FROM vacancy WHERE title LIKE '%$search%' OR roles LIKE '%$search%'");
            $results->execute();
            $results = $results->fetchAll();
            return $results;
        }
    }
?>