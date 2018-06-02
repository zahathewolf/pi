<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function load_view ($viewname, $args) {
    extract($args);
    require("view/static/header.view.php");
    require("view/".$viewname.".view.php");
    require("view/static/footer.view.php");
}

function load_controller ($controllername, $action) {
    require("controller/".ucfirst($controllername).".controller.php");
    $action ();
}



load_controller('knjiga', 'index');
?>