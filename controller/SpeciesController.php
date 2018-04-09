<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	render("hospital/indexS", array(
		'species' => getAllSpecies()
	));
}

function create()
{
	render("hospital/createS");
}

function createSave()
{
	if (!createSpecie($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}


	header("Location:" . URL . "Species/index");
}

function deleteThis($id)
{
	if (!deleteSpecie($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Species/index");
}


function editThis($id)
{
	render("hospital/editS", array(
		'species' => getOneSpecie($id)
	));
}


function editSaveThis()
{
	if (!editSpecie()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Species/index");
} 

