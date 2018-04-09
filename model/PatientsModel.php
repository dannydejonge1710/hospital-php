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

	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;


	return $query->fetchAll();
}

function createPatient() 
{
	$patient_name = ($_POST['patient_name']);
	$patient_status = ($_POST['patient_status']);
	$patient_gender = ($_POST['patient_gender']);



	if (strlen($patient_name) == 0 || strlen($patient_status) == 0 || strlen($patient_gender) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, patient_status, patient_gender) VALUES (:patient_name, :patient_status, :patient_gender)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':patient_status' => $patient_status,
		':patient_gender' => $patient_gender));

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



function editClient() 
{
	$patient_name = ($_POST['patient_name']);
	$patient_status = ($_POST['patient_status']);
	$patient_gender = ($_POST['patient_gender']);
	
	if (strlen($patient_name) == 0 || strlen($patient_status) == 0 || strlen($patient_status) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patient_name, patient_status = :patient_status, patient_gender = :patient_gender WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':patient_status' => $patient_status,
		':patient_gender' => $patient_gender,
		':id' => $id));

	$db = null;
	
	return true;
}



