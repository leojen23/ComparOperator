<?php

class OffersManager extends Manager
{

    public function addOperator()
  {

  }
  public function getAllOffers($location){
  
    
    $request = $this->getDb()->prepare("SELECT
                                          *
                                        FROM
                                            `tour_operators`
                                        INNER JOIN `destinations`

                                        ON tour_operators.id = destinations.id_tour_operator
                                        WHERE location = :location");


    $request->bindValue(':location',$location, PDO::PARAM_STR);
    //
    $request->execute();
    //
   
    $rawOffers = $request->fetchAll(PDO::FETCH_ASSOC);
    $offers = [];
        
        foreach($rawOffers as $rawOffer){
          
          array_push($offers, new Offer($rawOffer));
        }
    return $offers;
  }
}