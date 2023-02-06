<?php

class automobile
{
    private $vehicule_make;
    private $vehicule_model;

    public function __construct($make, $model){
        $this->vehicule_make = $make;
        $this->vehicule_model = $model;
    }

    public function get_make_and_model(){
        return $this->vehicule_make.' '.$this->vehicule_model;
    }
}

class AutomobileFactory
{
    public static function create ($make , $model) // static = acceder sans avoir besoin de genere la class
    {
        return new Automobile($make,$model);
    }
}

$veyron = AutomobileFactory::create('bugatti' , 'Veyron');

print_r($veyron->get_make_and_model()); // affiche "Bugatti Veyron"