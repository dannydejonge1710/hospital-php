<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	render("student/indexS", array(
		'species' => getAllBirthdays()
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

	header("Location:" . URL . "student/indexS");
}

function deleteThis($id)
{
	deleteBirthday($id);
	header("Location:" . URL . "student/indexS");

}












function editThis($id)
{
	render("student/edit", array(
		'species' => editBirthday($id)
	));
}


function editSaveThis()
{	
	editBirthday($_POST);
	header("Location:" . URL . "student/index");
} 


