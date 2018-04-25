<?php

require(ROOT . "model/PatientsModel.php");
require(ROOT . "model/SpeciesModel.php");
require(ROOT . "model/ClientsModel.php");

function index()
{
	render("hospital/PatientsMap/index", array(
		'patients' => getAllPatients()
	));
}

function create()
{
	render("hospital/PatientsMap/create", array(
		'patients' => getAllPatients(),
		'species' => getAllSpecies(),
		'clients' => getAllClients()
	));
}

function createSave()
{
	if (!createPatient($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}


	header("Location:" . URL . "Patients/index");
}

function deleteThis($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Patients/index");
}


function editThis($id)
{
	render("hospital/PatientsMap/edit", array(
		'patients' => getOnePatient($id),
		'clients' => getAllClients(),
		'species' => getAllSpecies()
	));
}


function editSaveThis()
{
	if (!editPatient($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Patients/index");
} 

