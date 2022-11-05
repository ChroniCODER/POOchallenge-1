
<?php
class SimpsonsBike{

	private int $nbWheels;
	private int $currentSpeed;
	private string $color;
	private int $nbSeats;
	private string $energy;
	private int $energyLevel;
	
	//constructor

public function __construct(string $color, INT $nbSeats, string $energy){
	$this->color = $color;
	$this->nbSeats = $nbSeats;
	$this->energy = $energy;
}
	//methods
public function start(): string{
	$this->currentSpeed = 0;
	$screen = '<mark>' . "On demarre" . '</mark>';
	return $screen . "<br>";
	
}

public function Forward(): string{
		
	$this->currentSpeed = 20 ;
	return '<mark>' . "On accelere à " . $this->currentSpeed . "Km/h" . '</mark>' . "<br>";
	
}

public function brake(): string{
	$show = " ";
	while ($this->currentSpeed > 0) {
		$this->currentSpeed--;
		$show .= '<mark>' . "oula on ralentit !" . '</mark>' . "<br>";
		
		}
		$show .= '<mark>' . "vehicule à l'arret !" . '</mark>';
		return $show;
}

/* public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
} */

	//getters

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

public function setEnergy(STRING $new_energy){
	$this->energy = $new_energy;
}

public function setEnergyLevel(INT $new_energyLevel){
	$this->energyLevel = $new_energyLevel;
}


/* public function dump()
{
	var_dump($this);
} */
}
?>