<?php
load_model("knjiga");

function index($konekcija) {
    load_view('knjiga', array('knjige' => sveKnjige($konekcija)));
}

function dodaj_knjigu($konekcija) {
    if(isset($_POST) && !isset($_POST['Id'])) {
        dodajKnjigu($_POST, $konekcija);
    } else {
        urediKnjigu($_POST, $konekcija);
    }
    index($konekcija);
}

function uredi_knjigu($konekcija) {
    $knjiga = dajKnjigu($_GET['knjigaid'], $konekcija);
    load_view('knjiga', array('knjige' => sveKnjige($konekcija), 'uKnjiga' => $knjiga));
}

function brisi_knjigu($konekcija) {
    if(isset($_POST)) {
        brisiKnjigu($_GET['knjigaid'], $konekcija);
    }
    index($konekcija);
}

?>