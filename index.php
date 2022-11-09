<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Challenge POO donkeyschool Thomas LEHERISSE</title>
</head>
<body>

<h2> camion challenge 2 classe enfant </h2>

<h3>Premiere instance, truck1 = noir, 3 places,6 roues, fonctionne au fuel, remplit à 100%</h3>

<?php
	require 'SimpsonsTruck.class.php';

	$truck1 = new SimpsonsTruck('black', 3, 'fuel', 1200);
	$truck1->setNbWheels(6);
	$truck1->setCurrentSpeed(0);

	echo $truck1->getCargoLevel();
	echo "<br>";
	var_dump($truck1);
	echo "<br>";
	echo $truck1->Forward(70);
	echo "<br>";
	var_dump($truck1);
	echo "<br>";
	echo $truck1->brake();
	echo "<br>";
	var_dump($truck1);
?>

<h3>deuxieme instance, truck2 = gris, 4 places,6 roues, electrique, remplit à 50%</h3>

<?php
	
	$truck2 = new SimpsonsTruck('grey', 4, 'electric', 500);
	$truck2->setNbWheels(6);
	$truck2->setCurrentSpeed(0);

	echo $truck2->getCargoLevel();
	echo "<br>";
	var_dump($truck2);
	echo "<br>";
	echo $truck2->Forward(50);
	echo "<br>";
	var_dump($truck2);
	echo "<br>";
	echo $truck2->brake();
	echo "<br>";
	var_dump($truck2);
?>

<h3>troisieme instance, truck3 = blanc, 5 places,4 roues, fuel, cargaison vide</h3>

<?php
	
	$truck3 = new SimpsonsTruck('grey', 4, 'electric', 0);
	$truck3->setNbWheels(4);
	$truck3->setCurrentSpeed(0);

	echo $truck3->getCargoLevel();
	echo "<br>";
	var_dump($truck3);
	echo "<br>";
	echo $truck3->Forward(100);
	echo "<br>";
	var_dump($truck3);
	echo "<br>";
	echo $truck3->brake();
	echo "<br>";
	var_dump($truck3);
die;
?>


<h1>test de la voiture d'homer</h1>

<?php
	require 'SimpsonsCar.class.php';

	$homerCar = new SimpsonsCar('pink', 5, 'oil', 50);
	$homerCar->setNbWheels(4);
	$homerCar->setCurrentSpeed(0);

	echo $homerCar->start();
	echo "<br>";
	var_dump($homerCar);
	echo "<br>";
	echo $homerCar->Forward(100);
	echo "<br>";
	var_dump($homerCar);
	echo "<br>";
	echo $homerCar->brake();
	echo "<br>";
	var_dump($homerCar);
	
?>

<br><br>
<h1> Test du velo de bart</h1>

<?php

	require 'SimpsonsBike.class.php';

	$BartBike = new SimpsonsBike('red', 1, 'manual', 1000);
	$BartBike->setNbWheels(2);
	$BartBike->setCurrentSpeed(0);

	echo $BartBike->start();
	echo "<br>";
	var_dump($BartBike);
	echo "<br>";
	echo $BartBike->Forward(20);
	echo "<br>";
	var_dump($BartBike);
	echo "<br>";
	echo $BartBike->brake();
	echo "<br>";
	var_dump($BartBike);
	
?>
<br><br>

<h1>test de la voiture de krusty</h1>

<?php
	
	$krustyCar = new SimpsonsCar('grey', 2, 'oil', 30);
	$krustyCar->setNbWheels(4);
	$krustyCar->setCurrentSpeed(0);

	echo $krustyCar->start();
	echo "<br>";
	var_dump($krustyCar);
	echo "<br>";
	echo $krustyCar->Forward(150);
	echo "<br>";
	var_dump($krustyCar);
	echo "<br>";
	echo $krustyCar->brake();
	echo "<br>";
	var_dump($krustyCar);
	
?>

<?php


?>
	
</body>
</html>