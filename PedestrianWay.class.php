
<?php
//velo et skate uniquement
require_once 'HighWay.class.php';


final class PedestrianWay extends HighWay{

    public function addVehicle($vehicle)
	{
	   $status = ' ';
		if(($vehicle instanceof SimpsonsBike) || ($vehicle instanceof SimpsonsSkate)){
			$this->currentVehicle[] = $vehicle;
			$status = '<mark>' . 'Vous etes autorisés à rouler sur PedestrianWay' . '</mark>';

		}else {
			$status = '<mark>' . "Désolé PedestrianWay est interdite aux vehicules motorisés" . '</mark>'  ;
		}

		return $status;

	}

	
}

?>