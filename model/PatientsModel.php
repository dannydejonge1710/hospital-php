<?php

function getOneBirthday() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patients_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllBirthdays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return $query->fetchAll();
}

function createBirthday() 
{
	$patient_name = ($_POST['patientname']);
	$species_id = ($_POST['speciesid']);
	$client_id = ($_POST['clientid']);
	$patient_status = ($_POST['patientstatus']);


	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($client_id) == 0 || strlen($patient_status) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, client_id, patient_status) VALUES (:patientname, :speciesid, :clientid, :patientstatus)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patientname' => $patient_name,
		':speciesid' => $species_id,
		':clientid' => $client_id,
		':patientstatus' => $patient_status));

	$db = null;
	
	return true;
}

function deleteBirthday($id) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id=:id ";
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



