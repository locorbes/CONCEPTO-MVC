<?php
    class View{
        function __construct(){
            //echo "<p>Vista Base</p>";
        }
        function render($view){
            require "views/".$view.".php";
        }
    }

?>