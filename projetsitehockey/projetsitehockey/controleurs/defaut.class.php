<?php
  
	include_once("controleurs/controleur.abstract.class.php");

	class Defaut extends  Controleur {
		
		
		public function __construct() {
			parent::__construct();
		
		}
		

		
		public function executerAction() {
			return "page1";
		
		}


		
	}
