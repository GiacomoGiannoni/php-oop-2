<?php
require_once __DIR__ . '/Immovable.php';

class Sale extends Immovable {
    protected $prezzoVendita;

    public function setSale() {
        if ($this->energyRating == 'c') {
            $this->prezzoVendita = round($this->mq * 1000, 2);
        } elseif ($this->energyRating == 'b') {
            $this->prezzoVendita = round($this->mq * 1500, 2);
        } elseif ($this->energyRating == 'a') {
            $this->prezzoVendita = round($this->mq * 2000, 2);
        } elseif ($this->energyRating == 'a+') {
            $this->prezzoVendita = round($this->mq * 2500, 2);
        }
    }

    public function getSale() {
        return $this->prezzoVendita;
    }
}