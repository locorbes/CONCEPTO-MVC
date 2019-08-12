<?php
require_once "libs/Controller.php";
    class News extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render("news/index");
        }
    }
?>