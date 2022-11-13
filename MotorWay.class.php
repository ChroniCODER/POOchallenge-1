
<?php
//tout type de voiture et camions
require_once 'HighWay.class.php';

final class MotorWay extends HighWay{

	public function addVehicle($vehicle)
	{
	   $status = ' ';
		if(($vehicle instanceof SimpsonsCar) || ($vehicle instanceof SimpsonsTruck)){
			$this->currentVehicle[] = $vehicle;
			$status = '<mark>' . 'Vous etes autorisés à rouler sur MOTORWAY' . '</mark>';

		}else {
			$status = '<mark>' . "Désolé MOTORWAY réservée aux vehicules motorisés" . '</mark>'  ;
		}

		return $status;

	}

	
}

?>