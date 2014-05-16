<?php

class Participant extends \Eloquent {
	protected $fillable = [];

	public function __toString() {
		return $this->name;
	}

	public function depenses() {
		return $this->hasMany('Depense');
	}	
}