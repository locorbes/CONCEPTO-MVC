<?php
require_once "libs/Controller.php";
    class Fail extends Controller{
        function __construct($id=1){
            parent::__construct();
            $this->view->id = $id;
            $this->view->msg = "";
            switch($id){
                case 1: $this->view->msg = "No path";
                breaK;
                case 2: $this->view->msg = "No controller";
                breaK;
            }
            $this->view->render("fail/index");
        }
    }
?>