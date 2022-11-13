<?php

abstract class vehicle{
	private int $nbWheels;
	private int $currentSpeed;
	protected string $color;
	protected int $nbSeats;
	protected string $energy;
	private int $energyLevel;
	protected int $cargoLevel;
	protected int $cargoCapacity;
	

	//constructor

public function __construct(string $color, INT $nbSeats, string $energy, INT $cargoCapacity){
	$this->color = $color;
	$this->nbSeats = $nbSeats;
	$this->energy = $energy;
	$this->cargoCapacity = $cargoCapacity;
}

//methods

public function start(): string{
	$this->currentSpeed = 0;
	$screen = '<mark>' . "On demarre" . '</mark>';
	return $screen . "<br>";
	
}

//forward

public function Forward($currentSpeed): string{
		
	$this->currentSpeed = $currentSpeed ;
	return '<mark>' . "On accelere à " . $this->currentSpeed . "Km/h" . '</mark>' . "<br>";
	
}


public function brake(): string{
	$show = " ";
	while ($this->currentSpeed > 5) {
		$this->currentSpeed-=5;
		$show .= '<mark>' . "oula on ralentit !" . '</mark>' . "<br>";
		
		}
		$show .= '<mark>' . "vehicule à l'arret !" . '</mark>';
		return $show;
}

	//GETTERS

public function getNbWheels(): INT{
	return $this->nbWheels;
}

public function getCurrentSpeed(){
	return $this->currentSpeed;
}

public function getColor(){
	return $this->color;
}

public function getNbSeats(){
	return $this->nbSeats;
}

public function getEnergy(){
	return $this->energy;
}

public function getEnergyLevel(){
	return $this->energyLevel;
}

		//SETTERS

public function setNbWheels(INT $new_nbWheels){
	$this->nbWheels = $new_nbWheels;
}
public function setCurrentSpeed(INT $new_currentSpeed){
	$this->currentSpeed = $new_currentSpeed;
}
public function setColor(STRING $new_color){
	$this->color = $new_color;
}
public function setNbSeats(INT $new_nbSeats){
	$this->nbSeats = $new_nbSeats;
}

/* public function setEnergy(STRING $new_energy){
	$this->energy = $new_energy;
}
 */
public function setEnergyLevel(INT $new_energyLevel){
	$this->energyLevel = $new_energyLevel;
}

}


?>