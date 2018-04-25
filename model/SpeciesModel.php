<?php

function getOneSpecie($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species ORDER BY species_description";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return $query->fetchAll();
}

function createSpecie($data) 
{
	$description = ($data['description']);

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

function deleteSpecie($id) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	
	$db = null;
	
	return true;
}



function editSpecie($data) 
{
	$description = ($data['description']);
	$id = ($data['id']);
	
	if (strlen($description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_description = :description WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $description,
		':id' => $id));

	$db = null;
	
	return true;
}



