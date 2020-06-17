<?php

class DestinationsManager extends Manager
{

    public function addDestination($destination)
  {

  }

  public function getDestinationsCardContent()
  {
    $request = $this->getDb()->query("SELECT
                                    `id`,
                                    `location`,
                                    `card_pic`,
                                    `id_tour_operator`
                                FROM
                                    `destinations`
                                GROUP BY `location`");

    $destinationsCardContent = $request->fetchAll(PDO::FETCH_ASSOC);
    return $destinationsCardContent;

    // $destinationsCardContent->getLocation();

  }
  public function getOperatorPageDisplayContent($location)
  {
    // $location='canada';
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

    $destinationDisplayInfos = $request->fetch(PDO::FETCH_ASSOC);

    
    return $destinationDisplayInfos;
    

  }


}