<?php
function usersConnexion()
{
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=clientswebshop;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

}
?>