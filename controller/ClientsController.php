<?php

require(ROOT . "model/ClientsModel.php");

function index()
{
	render("student/indexC", array(
		'clients' => getAllBirthdays()
	));
}

function create()
{
	render("student/createC");
}

function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Clients/index");
}

function deleteThis($id)
{
	deleteBirthday($id);
	header("Location:" . URL . "Clients/index");

}












function editThis($id)
{
	render("student/edit", array(
		'clients' => getOneBirthday($id)
	));
}


function editSaveThis()
{
	if (!editBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Clients/index");
} 
