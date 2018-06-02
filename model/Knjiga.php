<?php
require_once("model/Konekcija.php");

function sveKnjige($konekcija) {
    $upit = $konekcija->query("SELECT * FROM knjiga");
    $knjige = [];
    while($red=mysqli_fetch_assoc($upit)) {
        array_push($knjige, $red);
    }
    return $knjige;
}