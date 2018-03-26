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
	render("student/create");
}

function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "student/indexC");
}

function deleteThis($id)
{
	deleteBirthday($id);
	header("Location:" . URL . "student/indexC");

}












function editThis($id)
{
	render("student/edit", array(
		'clients' => editBirthday($id)
	));
}


function editSaveThis()
{	
	editBirthday($_POST);
	header("Location:" . URL . "student/index");
} 


