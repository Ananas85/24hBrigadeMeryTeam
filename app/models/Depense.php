<?php

class Depense extends \Eloquent {
	protected $fillable = [];

	public function __toString() {
		return $this->motif;
	}
}