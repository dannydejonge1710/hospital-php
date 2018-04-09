<?php

function getOnePatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients INNER JOIN species ON patients.species_description=species.species_description";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return $query->fetchAll();
}

function createPatient() 
{
	$patient_name = ($_POST['patient_name']);
	$species_id = ($_POST['species_id']);
	$client_id = ($_POST['client_id']);
	$patient_status = ($_POST['patient_status']);


	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($client_id) == 0 || strlen($patient_status) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, client_id, patient_status) VALUES (:patient_name, :species_id, :client_id, :patient_status)";
	
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':species_id' => $species_id,
		':client_id' => $client_id,
		':patient_status' => $patient_status));

	$db = null;
	
	return true;
}

function deletePatient($id) 
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



function editPatient() 
{
	$patient_name = ($_POST['patient_name']);
	$species_id = ($_POST['species_id']);
	$client_id = ($_POST['client_id']);
	$patient_status = ($_POST['patient_status']);
	$id = ($_POST['id']);
	
	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($client_id) == 0 || strlen($patient_status) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patient_name, species_id = :species_id, client_id = :client_id, patient_status = :patient_status WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':species_id' => $species_id,
		':client_id' => $client_id,
		':patient_status' => $patient_status,
		':id' => $id));

	$db = null;
	
	return true;
}



