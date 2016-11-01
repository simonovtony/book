<?php

interface IWorldObject {
    public function getCoord();
}

interface IWheeled {
    public function getNumWheels();
}

interface ITransport extends IWorldObject {
    public function getNumPassengers();

    /* Можно переопределять магические методы
    public function __construct();
    public function __call()
    */
}

class Zaporojets implements ITransport, IWheeled, IWorldObject {

    private $coordArray;

    public function getCoord() {
        return $this->coordArray;
    }

    public function getNumWheels() {
        return 4;
    }

    public function getNumPassengers() {
        return 16;
    }

}

?>