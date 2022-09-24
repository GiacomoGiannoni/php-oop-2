<?php
require_once __DIR__ . '/../traits/Address.php';

class Immovable {

    use Address;

    protected $mq;
    public $energyRating;
    public $category;

    public function __construct($energyRating, $category)
    {
        $this->energyRating = $energyRating;
        $this->category = $category;
    }

    public function setMQ($mq) {
        $this->mq = $mq;
        if ($this->mq <= 10) {
            echo "<h3>Metratura errata</h3>";
        }
    }
}