<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
	render("hospital/indexP", array(
		'patients' => getAllPatients()
	));
}

function create()
{
	render("hospital/createP");
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
	render("hospital/editP", array(
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