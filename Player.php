<?php
class Dice{
	public $max_ = 10;	
	
	function __construct($max_ = 10){
		if ($max_ <= 0) {
			$this->max_ = 10;
		}
		else {
			$this->max_ = $max_;
		}
	}
	
	function shake(){
		return rand(1, $this->max_);
	}
}

class Player{
	public $point_;
	public $dice_;
	
	function __construct($default_point_ = 100){
		if ($default_point_ <= 0) {
			$this->point_ = 100;
		}
		else {
			$this->point_ = $default_point_;
		}
		
		$this->dice_ = new Dice();
	}
	
	function shake_dice(){
		return $this->dice_->shake();
	}
	
	function subtract_point(){
		$this->point_ -= $this->shake_dice();
	}
	
	function echo_point(){
		echo $this->point_;
	}
}

?>
