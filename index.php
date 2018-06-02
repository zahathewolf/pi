<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("model/Konekcija.php");

function load_view ($viewname, $args) {
    extract($args);
    require("view/static/header.view.php");
    require("view/".$viewname.".view.php");
    require("view/static/footer.view.php");
}

function load_controller ($controllername, $action, $konekcija) {
    require("controller/".ucfirst($controllername).".controller.php");
    $action ($konekcija);
}

function load_model ($modelname) {
    require_once("model/".ucfirst($modelname).".php");
}

if (isset($_GET['controller']) && isset($_GET['action'])) {
    load_controller($_GET['controller'], $_GET['action'], $konekcija);
} else if (isset($_GET['controller'])) {
    load_controller($_GET['controller'], 'index', $konekcija);
} else {
    load_controller('knjiga', 'index', $konekcija);
}

?>