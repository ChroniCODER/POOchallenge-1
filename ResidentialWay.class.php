
<?php
//tout les vehicules
require_once 'HighWay.class.php';

final class ResidentialWay extends HighWay{

    public function addVehicle($vehicle)
	{
	   $status = ' ';
		if($vehicle instanceof vehicle){
			$this->currentVehicle[] = $vehicle;
			$status = '<mark>' . 'Vous etes autorisés à rouler sur ResidentialWay' . '</mark>';

		}

		return $status;

	}

	
}

?>