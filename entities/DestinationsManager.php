<?php

class DestinationsManager extends Manager
{
  // crud
     public function addDestination($Destination)
  {
   
    $request = $this->db->prepare('INSERT INTO destinations (location, price,card_pic,  parallax_1,parallax_2,id_tour_operator) 
                                  VALUES(:location, :price,:card_pic,:parallax_1,:parallax_2,:id_tour_operator)');
    $request->bindValue(':location', $Destination->getLocation());
    $request->bindValue(':price', $Destination->getPrice());
    $request->bindValue(':card_pic', $Destination->getCard_pic());
    $request->bindValue(':parallax_1', $Destination->getParallax_1());
    $request->bindValue(':parallax_2', $Destination->getParallax_2());
    $request->bindValue(':id_tour_operator', $Destination->getId_tour_operator());
    $request->execute();
    
    // $Destination->hydrate([
    //   'id' => $this->db->lastInsertId(),
    //   'location' => ,
    //   'price' => ,
    //   'card_pic' => ,
    //   'parallax_1' => ,
    //   'parallax_2' => ,
    //   'id_tour_operator' => ,
    // ]);
  }


  // method
  public function getDestinationsCardContent()
  {
    $destinationCards = [];
    $request = $this->getDb()->query("SELECT
                                    *
                                FROM
                                    `destinations`
                                GROUP BY `location`");

    while($destinationsCardContent = $request->fetch(PDO::FETCH_ASSOC)){

     array_push($destinationCards, new Destination($destinationsCardContent)) ;

    };
    return $destinationCards;
    

    // $destinationsCardContent->getLocation();

  }


  public function getOperatorPageDisplayContent($location)
  {
    // $destinationInfos =[];
    
    $request = $this->getDb()->prepare("SELECT
                                      `location`, 
                                      `parallax_1`, 
                                      `parallax_2`
                                  FROM
                                      `destinations`
                                  WHERE location = :location
                                  GROUP BY `location`");

    $request->bindValue(':location',$location, PDO::PARAM_STR);
    $request->execute();

    while($destinationDisplayInfos = $request->fetch(PDO::FETCH_ASSOC)){
      
     return new Destination ($destinationDisplayInfos);
      
    };

    // var_dump($destinationInfos);
    // return $destinationInfos;
   
    // var_dump($destinationInfos);
    

  }


}