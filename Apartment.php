<?php
	Class Apartment extends Building{

		var $number_of_units;
		var $retention_rate;

		public function __construct($loc, $price, $remain, $percent, $sqft, $balance, $units, $rate){

			Building::__construct($loc, $price, $remain, $percent, $sqft, $balance);
			$this->number_of_units = $units;
			$this->retention_rate = $rate;
			
		}
	}
?>
