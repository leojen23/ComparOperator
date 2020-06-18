<?php  

require '../helpers/init.php';

// include "../helpers/autoload.php";


function loadClass($classe)
{
    require_once ('../entities/'.$classe.'.php') ;
    
}
spl_autoload_register('loadClass');

$DestinationsManager = new DestinationsManager($db);
$OperatorsManager = new OperatorsManager($db);
$OffersManager = new OffersManager($db);


if(!empty($_GET["destinationName"])){
    
    $location = $_GET["destinationName"];
    $destinationDisplay = $DestinationsManager->getOperatorPageDisplayContent($location);
    $offers = $OffersManager->getAllOffers($location);
    // $operatorsDisplay = $OperatorsManager->getOperatorListForADestination($location);
}
?>



<!DOCTYPE html>
<html>

<?php include "../partials/head.php"?>
<body>

<!-- Navbar--------------------------------------------------- -->
<?php include "../partials/navbar.php"?>

<?php include "../partials/parallax.php"?>




<!-- END of body content ------------------------------------------------------------------------------------------>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- Materialize Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Link to JavaScript file-->
<script src="../assets/js/script.js"></script>
</body>
</html>