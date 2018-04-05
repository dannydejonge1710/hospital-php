<?php

function getOneClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return $query->fetchAll();
}

function createClient() 
{
	$firstname = ($_POST['firstname']);
	$lastname = ($_POST['lastname']);


	if (strlen($firstname) == 0 || strlen($lastname) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(client_firstname, client_lastname) VALUES (:firstname, :lastname)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname));

	$db = null;
	
	return true;
}

function deleteClient($id) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE client_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	
	$db = null;
	
	return true;
}



function editClient() 
{
	$firstname = ($_POST['firstname']);
	$lastname = ($_POST['lastname']);
	$id = ($_POST['id']);
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':id' => $id));

	$db = null;
	
	return true;
}



function sortClients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients ORDER BY client_firstname ASC ";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return true;

}