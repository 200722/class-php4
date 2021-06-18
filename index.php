<?php

class Tv
{


    public $brand = "available";
    public $height = 0;
    public $width = 0;

    public function __construct($brand, $height, $width)
    {
        $this->brand = $brand;
        $this->height = $height;
        $this->width = $width;
  
    }

    //brand available or not available

    public function setbrand($name)
    {
        $this->brand = $name;
    }

    public function getbrand()
    {
        return $this->brand;
    }

     //search 
     public function setsearch($value)
     {
         $this->search = $value;
     }
 
     public function getsearch()
     {
         return $this->search;
     }

}

// Analoge is inherited from Fruit
class Analoge extends tv {
    public function message() {
      echo "Am I Analoge TV? ";
    }
   }
   $Analoge  = new Analoge ("Analoge", "tv", "made by Reem");
   $Analoge->message();

   


echo "<pre>";

$lg = new Tv("lg",10,5);

$lg->setbrand("Unavailable");
echo $lg->getbrand();

echo "<br>---------<br>";

$search = new Tv("search",10,5);

$lg->setsearch("You can search a lot on TV");
echo $lg->getsearch();