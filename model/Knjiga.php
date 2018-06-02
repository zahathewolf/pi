<?php

function sveKnjige($konekcija) {
    $upit = $konekcija->query("SELECT * FROM knjiga");
    $knjige = [];
    while($red=mysqli_fetch_assoc($upit)) {
        array_push($knjige, $red);
    }
    return $knjige;
}

function dajKnjigu($id, $konekcija) {
    $upit = $konekcija->query("SELECT * FROM knjiga WHERE id=".$id);
    return mysqli_fetch_assoc($upit);
}

function dodajKnjigu ($knjiga, $konekcija) {
    return $konekcija->query("INSERT INTO knjiga VALUES (null, '".$knjiga['Naziv']."', '".$knjiga['Autor']."', '".$knjiga['ISBN']."')");
}

function urediKnjigu ($knjiga, $konekcija) {
    return $konekcija->query("UPDATE knjiga SET Naziv='".$knjiga['Naziv']."', Autor='".$knjiga['Autor']."', ISBN='".$knjiga['ISBN']."' WHERE id='".$knjiga['Id']."';");
}

function brisiKnjigu($id, $konekcija) {
    return $konekcija->query("DELETE FROM knjiga WHERE id=".$id);
}

?>