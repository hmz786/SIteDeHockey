<?php

include_once "controleurs/manufactureControleur.class.php";
	
	if (!isset($_GET['action'])) {$action = "";}else {$action = $_GET['action'];}

	
	$controleur = manufactureControleur::creerControleur($action);

	
	$vue = $controleur->executerAction();
	


	include_once("vues/" . $vue . ".php");
