<?php
require_once "libs/Controller.php";
    class Docs extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render("docs/index");
        }
    }
?>