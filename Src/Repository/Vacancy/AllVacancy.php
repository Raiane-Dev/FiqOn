<?php
    namespace Src\Repository\Vacancy;

    use Src\Infrastructure\Database;

    class AllVacancy{
        public static function getAll(): array{
            $vacancys = Database::connect()->prepare("SELECT * FROM vacancy");
            $vacancys->execute();
            return $vacancys->fetchAll();
        }
    }
?>