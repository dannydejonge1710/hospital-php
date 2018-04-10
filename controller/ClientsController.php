<?php

require(ROOT . "model/ClientsModel.php");

function index()
{
	render("hospital/indexC", array(
		'clients' => getAllClients()
	));
}

function create()
{
	render("hospital/createC");
}

function createSave()
{
	if (!createClient()) {
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
	render("hospital/editC", array(
		'clients' => getOneClient($id)
	));
}


function editSaveThis()
{
	if (!editClient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Clients/index");
} 

