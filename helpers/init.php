<?php

try
{ 
    $db = new PDO('mysql:127.0.0.1;dbname=c0ogComparOperator;charset=utf8','c0olivierG','olivier34');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>