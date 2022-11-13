<?php

abstract class HighWay{
	protected array $currentVehicles;
	protected int $nbLane;
	protected int $maxSpeed;
	
	//constructor

 public function __construct(int $nbLane, int $maxSpeed){
	$this->nbLane = $nbLane;
	$this->maxSpeed = $maxSpeed;
 }

//methods

abstract public function addVehicle(Vehicle $vehicle);

	//GETTERS

public function getcurrentVehicles(): array{
	return $this->currentVehicles;
}

public function getnbLane(){
	return $this->nbLane;
}

public function getmaxSpeed(){
	return $this->maxSpeed;
}
		//SETTERS

public function setcurrentVehicles(array $new_currentVehicles){
	$this->currentVehicles = $new_currentVehicles;
}
public function setnbLane(int $new_nbLane){
	$this->nbLane = $new_nbLane;
}
public function setmaxSpeed(STRING $new_maxSpeed){
	$this->maxSpeed = $new_maxSpeed;
}


}


?>