<?php

class OffersManager extends Manager
{

    public function addOperator()
  {

  }
  public function getAllOffers($location){
  
     var_dump("ppl");
    $request = $this->getDb()->prepare("SELECT
                                          *
                                         
                                        FROM
                                            `tour_operators`
                                        INNER JOIN `destinations`

                                        ON tour_operators.id = destinations.id_tour_operator
                                        WHERE location = :location");


    $request->bindValue(':location',$location, PDO::PARAM_STR);
    // var_dump("ppl");
    $request->execute();
    // var_dump("ppl");
   
    $rawOffers = $request->fetchAll(PDO::FETCH_ASSOC);
    $offers = [];
        
        foreach($rawOffers as $rawOffer){
          
          array_push($offers, new Offer($rawOffer));
        }
        // echo "<pre>". var_export($offersList, true) . "</pre>";
      
    return $offers;
   

  }
}