<?php


abstract class TourOpertor
{
  private   $id,
            $name,
            $grade,
            $link,
            $logo,
            $is_premium;
           
  
  
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
  
   // SETTERS //

  public function setName($name)
  {
    if(is_string($name))
    {
      $this->name = $name;
    }
  }


  public function setGrade( int $grade)
    {
      $grade = (int) $grade;

      if($grade > 0 && $grade <=5){
        $this->grade = $grade;
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
}