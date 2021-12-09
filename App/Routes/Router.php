<?php
    namespace App\Routes;

    use App\Controllers\Controller;

    class Router{
        public function run($path, $class, $func){
            if(strpos($_SERVER['REQUEST_URI'], $path) == true){
                ((new $class)->$func());

                $slug = \Src\Authenticator\FormatSlug::format($path);

                if(!isset($_SESSION['login']) && $_GET['url'] !== 'access'){
                    header('Location: access');
                }

                include("App/Views/templates/header.php");
                include("App/Views/pages.$slug.php");
                include("App/Views/templates/footer.php");
            
            }
        }
    }
?>