<?php

	include_once("controleurs/controleur.abstract.class.php");
	
	class VoirPage3 extends  Controleur {
		// ******************* Attributs
		
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			
		
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
			
			return "page3";
		
		}


		
	}	
	
?>