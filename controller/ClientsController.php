<?php

require(ROOT . "model/ClientsModel.php");

function index()
{
	render("hospital/ClientsMap/index", array(
		'clients' => getAllClients()
	));
}

function create()
{
	render("hospital/ClientsMap/create");
}

function createSave()
{
	if (!createClient($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}


	header("Location:" . URL . "Clients/index");
}

function deleteThis($id)
{
	if (!deleteClient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Clients/index");
}


function editThis($id)
{
	render("hospital/ClientsMap/edit", array(
		'clients' => getOneClient($id)
	));
}


function editSaveThis()
{
	if (!editClient($_POST)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Clients/index");
} 

