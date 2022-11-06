<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Challenge POO donkeyschool Thomas LEHERISSE</title>
</head>
<body>

<h1>test de la voiture d'homer</h1>

<?php
	require 'SimpsonsCar.class.php';

	$homerCar = new SimpsonsCar('pink', 5, 'oil');
	$homerCar->setNbWheels(4);
	$homerCar->setCurrentSpeed(0);

	echo $homerCar->start();
	echo "<br>";
	var_dump($homerCar);
	echo "<br>";
	echo $homerCar->carForward();
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

	$BartBike = new SimpsonsBike('red', 1, 'manual');
	$BartBike->setNbWheels(2);
	$BartBike->setCurrentSpeed(0);

	echo $BartBike->start();
	echo "<br>";
	var_dump($BartBike);
	echo "<br>";
	echo $BartBike->bikeForward();
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
	
	$krustyCar = new SimpsonsCar('grey', 2, 'oil');
	$krustyCar->setNbWheels(4);
	$krustyCar->setCurrentSpeed(0);

	echo $krustyCar->start();
	echo "<br>";
	var_dump($krustyCar);
	echo "<br>";
	echo $krustyCar->carForward();
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