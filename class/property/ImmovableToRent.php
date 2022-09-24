<?php
require_once __DIR__ . '/Immovable.php';

class Rent extends Immovable {
    protected $affitto;

    public function setRent() {
        if ($this->energyRating == 'c') {
            $this->affitto = round(($this->mq * 100) / 12, 2);
        } elseif ($this->energyRating == 'b') {
            $this->affitto = round(($this->mq * 150) / 12, 2);
        } elseif ($this->energyRating == 'a') {
            $this->affitto = round(($this->mq * 200) / 12, 2);
        } elseif ($this->energyRating == 'a+') {
            $this->affitto = round(($this->mq * 250) / 12, 2);
        }
        
    }

    public function getRent() {
        return $this->affitto;
    }
}