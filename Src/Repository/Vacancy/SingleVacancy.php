<?php
    namespace Src\Repository\Vacancy;

    use Src\Infrastructure\Database;

    class SingleVacancy{
        public static function getSingle($id): array{
            $vacancy = Database::connect()->prepare("SELECT * FROM vacancy WHERE id = $id");
            $vacancy->execute();
            return $vacancy->fetch();
        }
    }
?>