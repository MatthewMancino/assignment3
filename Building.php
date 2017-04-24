<?php

	class Building {
		public $address;
		public $original_price;
		public $payments_remaining;
		public $square_feet;
		public $remaining_balance;
		public $interest_rate;

		public function __construct($loc, $price, $remain, $percent, $sqft, $balance){

			$this->address = $loc;
			$this->original_price = $price;
			$this->payments_remaining = $remain;
			$this->interest_rate = $percent;
 			$this->square_feet = $sqft;
 			$this->remaining_balance = $balance;

		}
		public function __toString(){
			echo '"Size: " . $square_feet . "Price: "$original_price . "Location: " . $address"';
		}
		public function buy_house(){
			echo 'The house is now bought';
		}


		//Distance from formula uses a given GPS location to determine how far away another address is from the current address
		public function distance_from(){

		}

		public function calculate_amortization_payment(){

			$rate = 1 + $periodic_percent;

			$i;
			for ($i = 0; $i < $payments_remaining; $i++){
				$rate = $rate * $rate;
			}

			$top_rate = $rate * $periodic_percent;
			$bottom_rate = $rate - 1;
			$rate = $top_rate / $bottom_rate;
			$payment_amount = $rate * $original_price;

			return $payment_amount;
		}
		public function make_next_payment(){
			$payment = this.calculate_amortization_payment();
			$remaining_balance = $remaining_balance - $payment;

		}
		public function update_sq_feet(){

		}

		public function update_address(){

		}

		public function get_address(){}

	}
?>
