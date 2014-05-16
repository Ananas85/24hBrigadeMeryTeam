<?php

class Evenement extends \Eloquent {
	protected $fillable = [];

	public function __toString() {
		return $this->title;
	}

	public function participants() {
		return $this->hasMany('Participant');
	}

	public function depenses() {
		return $this->hasMany('Depense');
	}
}