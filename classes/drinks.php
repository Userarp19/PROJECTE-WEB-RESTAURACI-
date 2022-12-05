<?php

require_once ("producte.php");
class Dirkns extends  Producte
{
    private $drinks;
    public function __construct($id, $name, $price, $picture,$quantity,$drinks){
        parent::__construct($id, $name, $price, $picture,$quantity);
        $this->drinks=$drinks;
    }

   
    public function  calculatePrice(){
      return $this->quantity*$this->price;
    }

    
    /**
     * Get the value of drinks
     */ 
    public function getDrinks()
    {
        return $this->drinks;
    }

    /**
     * Set the value of drinks
     *
     * @return  self
     */ 
    public function setDrinks($drinks)
    {
        $this->drinks = $drinks;

        return $this;
    }
}
   

?>