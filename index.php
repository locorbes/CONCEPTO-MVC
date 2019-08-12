<?php
    foreach (glob( __DIR__ . '/libs/*.php') as $file) {
        require_once($file);   
    }
    
    $app = new App();    
?>