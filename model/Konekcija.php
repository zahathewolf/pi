<?php
include ("config.php");
global $konekcija;
$konekcija = mysqli_connect($HOST, $KORISNIK, $LOZINKA, $BAZA);
if(!$konekcija) {
    die("Nisam se uspio spojiti na bazu podataka.");
}
?>