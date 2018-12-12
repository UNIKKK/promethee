<?php

try
{
	$bdd = new PDO('mysql:host=promethesqcedric.mysql.db;dbname=promethesqcedric;charset=utf8', 'promethesqcedric', '123Soleil');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*
try

{
	$bdd = new PDO('mysql:host=localhost;dbname=promethee;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
*/
?>