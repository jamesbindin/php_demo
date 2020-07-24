<?php 
    class AutoMobile{
        public $wheels;
        protected $hood = 1;
        private $engine = 1;
        var $doors = 4;

        function __construct($wheels){
            $this->wheels = $wheels;
        }

        function setEngine($engines){
            $this->engine = $engines;
        }

        function getEngine(){
            return $this->engine;
        }
    }

    class Truck extends AutoMobile{
        // overiding property
        var $wheels = 20;

        // accessing protected property
        function getHood(){
            return $this->hood;
        }
    }

    $truck = new Truck(10);
    echo $truck->wheels;
    echo "<br>";
    echo $truck->getHood();
    echo "<br>";
    echo $truck->getEngine();



?>