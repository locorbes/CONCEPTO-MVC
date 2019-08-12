<?php   
    require_once "controllers/Fail.php";
    
    class App{
        function __construct(){
            //Tomamos el valor de la URL y lo descomponemos
            //Si no existe URL redirecciona a main
            
            if(isset($_GET["url"])){
                $url = $_GET["url"];
                }else{
                header("Location: main");
            }
            
            $url = rtrim($url, "/");
            $url = explode("/",$url);
            $controllerPath ="controllers/".$url[0].".php";

            if(file_exists($controllerPath)){
                require_once $controllerPath;
                $controller = new $url[0];
                if(isset($url[1])){
                    if(method_exists($controller, $url[1])){
                        $controller->{$url[1]}();
                    }else{
                        $e = new Fail(2);
                    }
                }
            }else{
                $e = new Fail(1);
            }
        }
    }
?>