<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();




$template->display('views/partida.tpl');
//header('location: index.tpl');
