<?php

 
$mysqlConnection = new PDO(
 'mysql:host=localhost;dbname=burger_project;charset=utf8',
 'root',
 'root'
);

try
{
   $db = new PDO('mysql:host=localhost;dbname=burger_project;charset=utf8', 'root', 'root');


}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

// >>>>>>>>>>>>>>>>>>>>>>><<Là  On est connecté à la base !!!!!<<<<<<<<<<<<<<<<<<<<<








?>


