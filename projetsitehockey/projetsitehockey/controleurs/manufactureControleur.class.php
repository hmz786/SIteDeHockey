<?php
 
	include_once("controleurs/defaut.class.php");
	include_once("controleurs/voirPage2.class.php");
	include_once("controleurs/voirPage3.class.php");
	include_once("controleurs/voirPage4.class.php");
	include_once("controleurs/voirPage5.class.php");
	include_once("controleurs/SeConnecter.class.php");
	
	
	class ManufactureControleur {
		
		
		public static function creerControleur($action) {
			$controleur = null;

			if($action=="voirPage1"){
				$controleur = new Defaut();
	
	
				}elseif($action=="voirPage2"){
				  $controleur = new voirPage2();
				}
				elseif($action=="voirPage3"){
				$controleur = new VoirPage3();
			  	}
				  elseif($action=="voirPage4"){
					$controleur = new VoirPage4();
				}
				elseif($action=="voirPage5"){
					$controleur = new VoirPage5();}
				elseif($action=="SeConnecter"){
						$controleur = new SeConnecter();
				}
				
				else{
					$controleur = new Defaut();
	
				}
		
			
			

		
			return $controleur;
		}
	}
