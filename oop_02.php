<?php

//Traccia 1

class Continent{
    
    public $nameContinent;

    public function __construct($continent){
        $this -> nameContinent = $continent;
    }
}

class Country extends Continent{
    public $nameCountry;

    public function __construct($continent, $country){
        parent:: __construct($continent);
        $this -> nameCountry = $country;
    }
}

class Region extends Country{
    public $nameRegion;

    public function __construct($continent, $country, $region){
        parent::__construct($continent, $country);
        $this -> nameRegion = $region;
    }
}

class Province extends Region{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province){
        parent::__construct($continent, $country, $region);
        $this -> nameProvince = $province;
    }
}

class City extends Province{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city){
        parent::__construct($continent, $country, $region, $province);
        $this -> nameCity = $city;
    }
}

class Street extends City{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street){
        parent::__construct($continent, $country, $region, $province, $city);
        $this -> nameStreet = $street;
    }
    public function presentati(){
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }
}



$myLocation = new Street('Europa', 'Italia', 'Puglia', 'Ba', 'Bari', 'Strada San Giorgio Martire 2D');
$country = new country("Europa", "Italia");

$myLocation -> presentati();

var_dump($country);


//Traccia 2

class animals{
    protected $species;
    protected $bloodType;
    protected $type;


    public function __construct($_species, $_bloodType, $_type)
    {
        $this->species = $_species;
        $this->bloodType = $_bloodType;
        $this->type = $_type;
    }

    public function specie(){
        return $this->species;
    }
    public function blood_type(){
        return $this->bloodType;
    }
    public function Type(){
        return $this->type;
    }
}

$lion = new animals('Vertebrale', 'Sangue Caldo', 'Mammifero');
$bird = new animals('Vertebrale', 'Sangue caldo', 'Uccello');
$fish = new animals('Vertebrale', 'Sangue Freddo', 'Pesce');
$snake = new animals('Vertebrale', 'Sangue Freddo', 'Rettile');
$frog = new animals('Vertebrale', 'Sangue Freddo', 'Anfibia');

//Leone
echo "Sono un animale" . " " . $lion -> specie() . "\n";
echo "Sono un animale a" . " " . $lion -> blood_type() . "\n";
echo "Sono un" . " " . $lion -> Type() . "\n";

echo '\n';

//Uccello
echo "Sono un animale" . " " . $bird -> specie() . "\n";
echo "Sono un animale a" . " " . $bird -> blood_type() . "\n";
echo "Sono un" . " " . $bird -> Type() . "\n";

//Pesce
echo "Sono un animale" . " " . $fish -> specie() . "\n";
echo "Sono un animale a" . " " . $fish -> blood_type() . "\n";
echo "Sono un" . " " . $fish -> Type() . "\n";

//Serpente
echo "Sono un animale" . " " . $snake -> specie() . "\n";
echo "Sono un animale a" . " " . $snake -> blood_type() . "\n";
echo "Sono un" . " " . $snake -> Type() . "\n";


//Rana
echo "Sono un animale" . " " . $frog -> specie() . "\n";
echo "Sono un animale a" . " " . $frog -> blood_type() . "\n";
echo "Sono un" . " " . $frog -> Type() . "\n";


//Traccia 3

class Car {
    private $num_telaio;

    public function __construct($numeroTelaio)
    {
        $this->num_telaio = $numeroTelaio;
    }

    protected function telaioLevelOne(){
        return $this->num_telaio;
    }
    public function telaioLevelTwo(){
        return $this->num_telaio;
    }
}


class Fiat extends Car{
    protected $brand;
    protected $targa;
    protected $license;
    protected $color;

    public function __construct($numeroTelaio, $brand, $targa, $license, $color)
    {
        parent::__construct($numeroTelaio);
        $this->brand = $brand;
        $this->targa = $targa;
        $this->license = $license;
        $this->color = $color;
        
    }

    public function brand(){
        return $this->brand;
    }
    public function targa(){
        return $this->targa;
    }
    public function license(){
        return $this->brand;
    }
    public function color(){
        return $this->brand;
    }

}


$car = new Fiat(12345, 'Tesla', "GN546NN", 'Patente b', 'Bianco');

echo 'La mia macchina è una' . ' ' . $car -> brand() .  ', con targa' . ' ' . $car -> targa() . ' ' . 'e numero di telaio' . ' ' . $car->telaioLevelTwo();



