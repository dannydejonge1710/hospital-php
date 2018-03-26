<?php

function getOneBirthday() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllBirthdays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return $query->fetchAll();
}

function createBirthday() 
{
	$description = ($_POST['description']);

	if (strlen($description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(species_description) VALUES (:description)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $description));

	$db = null;
	
	return true;
}

function deleteBirthday($id) 
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



function editBirthday($id) 
{
	$firstname = ($_POST['firstname']);
	$lastname = ($_POST['lastname']);
	$id = ($_POST['id']);
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':id' => $id));

	$db = null;
	
	return true;
}



