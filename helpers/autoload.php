<?php

include 'init.php';
function loadClass($classe)
{
    require_once ('./entities/'.$classe.'.php') ;
    
}
spl_autoload_register('loadClass');