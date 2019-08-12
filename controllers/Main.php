<?php
    class Main extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render("main/index");
            //echo "<p>Controlador main</p>";
        }
        function saludo(){
            echo "Metodo Saludo";
        }
    }
?>