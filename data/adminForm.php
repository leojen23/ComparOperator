<?php
// connection db
require '../helpers/init.php';
// autoload
function loadClass($classe)
{
    require_once ('../entities/'.$classe.'.php') ;
    
}
spl_autoload_register('loadClass');
$DestinationsManager = new DestinationsManager($db);
$OperatorsManager = new OperatorsManager($db);




if (isset($_POST['name']) AND isset($_POST['grade']) AND isset($_POST['logo']) AND isset($_POST['is_premium']) AND isset($_POST['link'])){
     

    $rawTourOperators=
    [
       'name'=>$_POST['name'],
       'grade'=> $_POST['grade'],
        'logo'=>$_POST['logo'],
        'link'=>$_POST['link'],
        'is_premium'=>intval($_POST['is_premium'])
    ];
    
    $tourOperator = new TourOperator($_POST);
    
    $OperatorsManager= new OperatorsManager($db);
    $OperatorsManager->addOperator($tourOperator);

    
}
// echo "<pre>". var_export($_POST['id_tour_operator'], true) . "</pre>";
if (isset($_POST['location']) AND isset($_POST['price']) AND isset($_POST['card_pic']) AND isset($_POST['parallax_1']) AND isset($_POST['parallax_2']) AND isset($_POST['id_tour_operator'])){
    //  echo "<pre>". var_export($_POST['id_tour_operator'], true) . "</pre>";
    // echo $_POST['location'];
    $rawDestinations=
    [
       'location'=>$_POST['location'],
       'price'=> $_POST['price'],
        'card_pic'=>$_POST['card_pic'],
        'parallax_1'=>$_POST['parallax_1'],
        'parallax_2'=>$_POST['parallax_2'],
        'id_tour_operator'=>intval($_POST['id_tour_operator'])
    ];
    // echo "<pre>". var_export($rawDestinations, true) . "</pre>";
    
    $destinations = new Destination($rawDestinations);
    // echo "<pre>". var_export($tourOperator, true) . "</pre>";
    $DestinationsManager= new DestinationsManager($db);
    // if($destinations->destinationExist()){
    //     echo "cette destination est déjà existante pour votre tour opérateur!";
    
    
    // }else{
    $DestinationsManager->addDestination($destinations);
        header('Location: ../views/admin.php');
    // };

    // echo "<pre>". var_export($destinations->getLocation(), true) . "</pre>";
}
// echo "<pre>". var_export($_POST, true) . "</pre>";
if (isset($_POST['nameStandardOperator']) AND isset($_POST['switch'])){
//  echo "<pre>". var_export($_POST['nameStandardOperator'], true) . "</pre>";
    $premiumInfos=
    [
       'name'=>$_POST['nameStandardOperator'],
       'is_premium'=> $_POST['switch']
    ];
    $newPremiumOperator = new TourOperator($premiumInfos);
    $OperatorsManager->updateToPremium($newPremiumOperator);

}
