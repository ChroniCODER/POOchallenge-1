
<?php

require_once 'vehicle.class.php';

class SimpsonsTruck extends Vehicle{

	public const ALLOWED_ENERGIES = ['fuel', 'electric', 'manual'];

	protected string $energy;
	private int $energyLevel;
	protected int $cargoLevel = 0;
	protected int $cargoCapacity = 1000;

	public function __construct(string $color, int $nbSeats, string $energy, int $cargoLevel)
	{
		$this->color = $color;
		$this->nbSeats = $nbSeats;
		$this->energy = $energy;
		$this->cargoLevel = $cargoLevel;
	}
	
	//GET

	public function getCargoCapacity(): INT
	{
		return $this->cargoCapacity;
	}

	public function getCargoLevel(): string{
		$level = " ";
		if ($this->cargoLevel === 0 ){
			$level = '<mark>' . 'capacité de la remorque: totally empty' . '</mark>';
		} else if ($this->cargoLevel < $this->cargoCapacity){
			$level = '<mark>' . 'capacité de la remorque: in filling' . '</mark>';
		} else if ($this->cargoLevel > $this->cargoCapacity){
			$level = '<mark>' . 'chargement impossible' . '</mark>';
		} else {
			$level = '<mark>' . 'capacité de la remorque: full' . '</mark>';
		}
		return $level;
	}

	public function getEnergy(): string
	{
		return $this->energy;
	}

	public function getEnergyLevel(): int
	{
		return $this->energyLevel;
	}

	
	//SET

	public function setEnergy(string $energy): SimpsonsTruck
	{
		if (in_array($energy, self::ALLOWED_ENERGIES)) {
			$this->energy = $energy;
		   }
	return $this;
	}
	
	public function setEnergyLevel(int $energyLevel): void
	{
		$this->energyLevel = $energyLevel;
	}
	
	public function setCargoCapacity(int $cargoCapacity): void
	{
		$this->cargoCapacity = $cargoCapacity;
	}

	public function setCargoLevel(int $cargoLevel): void
	{
		if($cargoLevel >= 0){
			$this->cargoLevel = $cargoLevel;
		}
	}

	
}
?>