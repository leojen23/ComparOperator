<?php

class Destination
{
  private   $id,
            $location,
            $price,
            $card_pic,
            $parallax_1,
            $parallax_2,
            $id_tour_operator
            ;
            
           
  public function __construct(array $data)
  {
    $this->hydrate($data);
  }
  

  public function hydrate(array $data)
  {
    foreach ($data as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      
      if(method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }
  

  // GETTERS //
  public function getId()
    {
    return $this->id;
    }
  public function getLocation()
    {
      return $this->location;
    }
  public function getPrice()
    {
      return $this->price;
    }
  public function getCard_pic()
    {
      return $this->card_pic;
    }
  public function getParallax_1()
    {
      return $this->parallax_1;
    }
    public function getParallax_2()
    {
        return $this->parallax_2;
    }
    public function getId_tour_operator()
    {
      return $this->id_tour_operator;
    }
    
  
   // SETTERS //

  public function setLocation(string $location)
  {
    if(is_string($location))
    {
      $this->location = $location;
    }
  }

  public function setPrice( int $price)
  {
    if(is_int($price))
    {
      $this->price = $price;
    }
  }

  public function setCard_pic(string $card_pic)
  {
    if(is_string($card_pic))
    {
      $this->card_pic = $card_pic;
    }
  }

  public function setParallax_1(string $parallax_1)
  {
    if(is_string($parallax_1))
    {
      $this->parallax_1 = $parallax_1;
    }
  }
  
  public function setParallax_2(string $parallax_2)
  {
    if(is_string($parallax_2))
    {
      $this->parallax_2 = $parallax_2;
    }
  }


  public function setId_tour_operator(int $id_tour_operator)
  {
      if(is_int($id_tour_operator))
    {
      $this->id_tour_operator = $id_tour_operator;
    }
  }
  public function destinationExist()
  {
    if ($this->getLocation()== $_POST['location'] AND $this->getId_tour_operator() == $_POST['id_tour_operator']){
     return true;
    }
  }

}