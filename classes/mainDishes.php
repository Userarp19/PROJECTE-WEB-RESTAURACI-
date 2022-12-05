<?php

require_once ("producte.php");
class MainDishes extends  Producte
{
    private $mainDishes;
    public function __construct($id, $name, $price, $picture,$quantity,$mainDishes){
        parent::__construct($id, $name, $price, $picture,$quantity);
        $this->mainDishes=$mainDishes;
    }
    public function  calculatePrice(){
        return $this->quantity*$this->price;
    }
    

    /**
     * Get the value of mainDishes
     */ 
    public function getMainDishes()
    {
        return $this->mainDishes;
    }

    /**
     * Set the value of mainDishes
     *
     * @return  self
     */ 
    public function setMainDishes($mainDishes)
    {
        $this->mainDishes = $mainDishes;

        return $this;
    }
}
   

?>