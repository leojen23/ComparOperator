<?php

class OperatorsManager extends Manager
{

 

  public function addOperator($tourOperator)
  {
   
    $request = $this->db->prepare('INSERT INTO tour_operators(name, grade,link,logo,is_premium) VALUES(:name, :grade,:grade,:link,:logo)');
    $request->bindValue(':name', $tourOperator->getName());
    $request->bindValue(':grade', $tourOperator->getGrade());
    $request->bindValue(':link', $tourOperator->getLink());
    $request->bindValue(':logo', $tourOperator->getLogo());
    $request->execute();
    
    // $tourOperator->hydrate([
    //   'id' => $this->db->lastInsertId(),
    //   'name' => ,
    //   'grade' => ,
    //   'link' => ,
    //   'logo' => ,
    // ]);
  }
  
}