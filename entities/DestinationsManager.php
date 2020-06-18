<?php

class DestinationsManager extends Manager
{

    public function addDestination($destination)
  {

  }

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