<?php


class Offer
{
  private   $name,
            $location,
            $grade,
            $link,
            $logo,
            $is_premium,
            $price;

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

public function getName()
  {
    return $this->name;
  }

  public function getLocation()
  {
  return $this->location;
  }
public function getGrade()
  {
    return $this->grade;
  }
public function getLink()
  {
    return $this->link;
  }
public function getLogo()
  {
    return $this->logo;
  }
  public function getIs_premium()
  {
    return $this->is_premium;
  }
  public function getPrice()
    {
        return $this->price;
    }

    // SETTERS //

  public function setName($name)
  {
    if(is_string($name))
    {
      $this->name = $name;
    }
  }

  public function setGrade(int $grade)
    {
      $grade = (int) $grade;

      if($grade > 0 && $grade <=5){
        $this->grade = $grade;
      }
    }

    public function setLocation(string $location)
  {
    if(is_string($location))
    {
      $this->location = $location;
    }
  }
  public function setLink(string $link)
  {
    if(is_string($link))
    {
      $this->link = $link;
    }
  }


  public function setLogo(string $logo)
  {
      if(is_string($logo))
    {
      $this->logo = $logo;
    }
  }


  public function setIs_premium(int $is_premium)
  {
    if(is_int($is_premium))
    {
      $this->is_premium = $is_premium;
    }
  }

    public function setPrice(int $price)
  {
    if(is_int($price))
    {
      $this->price = $price;
    }
  }

  

  }



            