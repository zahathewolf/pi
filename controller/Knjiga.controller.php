<?php
require_once("model/Knjiga.php");
load_view('knjiga', array('knjige' => sveKnjige($konekcija)));
?>