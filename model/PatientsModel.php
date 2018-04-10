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

	$sql = "SELECT patients.patient_name, patients.species_id, patients.patient_status, 	patients.client_id
			FROM patients
			INNER JOIN species ON patients.species_id=species.species_id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return $query->fetchAll();
}

function createPatient() 
{
	$patient_name = ($_POST['patient_name']);
	$species_id = ($_POST['species_id']);
	$patient_status = ($_POST['patient_status']);
	$client_id = ($_POST['client_id']);

	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($patient_status) == 0 || strlen($client_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, patient_status, client_id) VALUES (:patient_name, :species_id, :patient_status, :client_id)";
	
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':species_id' => $species_id,
		':patient_status' => $patient_status,
		':client_id' => $client_id));

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
	$patient_status = ($_POST['patient_status']);
	$client_id = ($_POST['client_id']);
	$id = ($_POST['id']);
	
	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($patient_status) == 0 || strlen($client_id) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patient_name, species_id = :species_id, patient_status = :patient_status, client_id = :client_id  WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(

		':patient_name' => $patient_name,
		':species_id' => $species_id,
		':patient_status' => $patient_status,
		':client_id' => $client_id,
		':id' => $id));

	$db = null;
	
	return true;
}



