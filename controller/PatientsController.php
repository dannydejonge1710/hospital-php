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
	if (!createPatient()) {
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
		'patients' => getOnePatient($id)
	));
}


function editSaveThis()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Patients/index");
} 

