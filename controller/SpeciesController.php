<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	render("hospital/SpeciesMap/index", array(
		'species' => getAllSpecies()
	));
}

function create()
{
	render("hospital/SpeciesMap/create");
}

function createSave()
{
	if (!createSpecie($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}


	header("Location:" . URL . "Species/index");
}

function delete($id)
{
	if (!deleteSpecie($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Species/index");
}


function edit($id)
{
	render("hospital/SpeciesMap/edit", array(
		'species' => getOneSpecie($id)
	));
}


function editSave()
{
	if (!editSpecie($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Species/index");
} 

