<?php


abstract class Review
{
  private   $id,
            $message,
            $author,
            $date,
            $id_tour_operator;
            
           
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

  public function getMessage()
    {
      return $this->message;
    }
  public function getAuthor()
    {
      return $this->author;
    }
  public function getDate()
    {
      return $this->date;
    }
  public function getId_tour_operator()
    {
      return $this->id_tour_operator;
    }
    
  
   // SETTERS //

  public function setMessage($message)
  {
    if(is_string($message))
    {
      $this->message = $message;
    }
  }


  public function setAuthor( string $author)
  {
    if(is_string($author))
    {
      $this->author = $author;
    }
  }


  public function setDate(DateTime $date)
  {
    $this->date = $date;
  }

  
  public function setId_tour_operator(int $id_tour_operator)
  {
      if(is_int($id_tour_operator))
    {
      $this->id_tour_operator = $id_tour_operator;
    }
  }

}