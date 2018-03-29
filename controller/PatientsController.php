<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
	render("student/indexP", array(
		'patients' => getAllBirthdays()
	));
}

function create()
{
	render("student/createP");
}

function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Patients/index");
}

function deleteThis($id)
{
	deleteBirthday($id);
	header("Location:" . URL . "Patients/index");

}












function editThis($id)
{
	render("student/edit", array(
		'patients' => editBirthday($id)
	));
}


function editSaveThis()
{	
	editBirthday($_POST);
	header("Location:" . URL . "Patients/index");
} 


