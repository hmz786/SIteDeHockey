<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/utilisateurDAO.class.php");
	
	

	class SeConnecter extends  Controleur {
		
		
		
		
		public function __construct() {
			parent::__construct();
			
		
		}

		
		public function executerAction() {
			
			
			//----------------------------- VÉRIFIER LA VALIDITÉ DES POSTS ---------------
			if (isset($_POST['user']) and isset($_POST['pass'])) {
				$unUtilisateur = UtilisateurDAO::chercher($_POST['user']);
				if ($unUtilisateur == null) {
					array_push($this->messagesErreur, "Cet utilisateur n'existe pas.");
					return "page4";
				} elseif (!$unUtilisateur->verifierMotPasse($_POST['pass'])) {
					array_push($this->messagesErreur, "Le mot de passe est incorrect.");
					return "page4";
				} else {
					$this->acteur = "utilisateur";
					$_SESSION['utilisateurConnecte'] = $_POST['user'];
					
					return "page5";
				}
			} else {
				return "page4";
			}
			}}	
	
?>