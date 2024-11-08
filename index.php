<?php

include "class/Compte.php";
include "class/Titulaire.php";

$titulaire1 = new Titulaire("King", "Stephen", "Paris", "1999-02-12");
$compte1 = new Compte("compte courant", 1, "euros", $titulaire1);
$compte2 = new Compte("Livret A", 2, "euros", $titulaire1);
$compte2 = new Compte("Livret Jeune", 3, "euros", $titulaire1);

echo $titulaire1->afficherTitulaire();