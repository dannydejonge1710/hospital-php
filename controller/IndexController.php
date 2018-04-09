<?php

require(ROOT . "model/IndexModel.php");

function index()
{
	render("hospital/indexI", array(
		'patients' => getAllPatients()
	));
}

function create()
{
	render("hospital/createI");
}

function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}


	header("Location:" . URL . "Index/index");
}

function deleteThis($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Index/index");
}


function editThis($id)
{
	render("hospital/editI", array(
		'patients' => getOnePatient($id)
	));
}


function editSaveThis()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Index/index");
} 