<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("groot");
$humain->attack();

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("");

// Creation d'une instance de princesse
$princesse = new Princesse();
$princesse->setNom("peach");

// Creation d'une instance de sorcier
$sorcier = new Sorcier();
$sorcier->setNom("gandalf");

echo $humain->getNom()."<br>";
echo $dragon->getNom()."<br>";
echo $princesse->getNom()."<br>";
echo $sorcier->getNom()."<br>";

echo "nombres de personnage crée : ".Personnage::getNumInstances()."<br>";
echo "nombres de dragon crée : ".Dragon::getDragonNumbers()."<br>";





