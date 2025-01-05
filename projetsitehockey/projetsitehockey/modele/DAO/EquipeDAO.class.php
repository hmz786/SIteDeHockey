<?php


include_once("DAO.interface.php");
include_once("equipe.class.php");


	
class EquipeDAO implements DAO
{

	
	public static function chercher($cles)
	{
		
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}

		
		$uneEquipe = null;
			
		$requete = $connexion->prepare("SELECT * FROM equipe WHERE code=?");
		
		$requete->execute(array($cles));
		
		if ($requete->rowCount() != 0) {
			
			$enr = $requete->fetch();
			$uneEquipe = new Equipe(
				$enr['code'],
				$enr['nom'],
				$enr['ville'],
				$enr['point']
				
			);
		}
		
		$requete->closeCursor();
		
		ConnexionBD::close();
		
		return $uneEquipe;
	}

	
	static public function chercherTous()
	{
		
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$tableau = [];
			
		$requete = $connexion->prepare("SELECT * FROM equipe ");
		
		$requete->execute();
		
		foreach ($requete as $enr) {
			$uneEquipe = new Equipe(
				$enr['code'],
				$enr['nom'],
				$enr['ville'],
				$enr['point']
				
			);
																			
			array_push($tableau, $uneEquipe);
		}

		
		$requete->closeCursor();
		
		ConnexionBD::close();

		
		return $tableau;
	}

	
	static public function chercherAvecFiltre($filtre)
	{
		
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		
		$tableau = [];
			
		$requete = $connexion->prepare("SELECT * FROM equipe " . $filtre);
		$requete->execute();
		foreach ($requete as $enr) {
			$uneEquipe = new Equipe(
				$enr['code'],
				$enr['nom'],
				$enr['ville'],
				$enr['point']
			);
			array_push($tableau, $uneEquipe);
		}

		$requete->closeCursor();
		ConnexionBD::close();

		return $tableau;
	}


	static public function chercherTous2()
	{
		return self::chercherAvecFiltre("");
	}

	static function inserer($uneEquipe)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		$requete = $connexion->prepare("INSERT INTO equipe VALUES (?,?,?,?)");
		$tableauInfos = [
			$uneEquipe->getCode(), $uneEquipe->getNom(), $uneEquipe->getVille(),
			$uneEquipe->getPoint()
		];
		return $requete->execute($tableauInfos);
	}


	static public function modifier($uneEquipe)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		$requete = $connexion->prepare("UPDATE equipe SET code=?,nom=?,ville=?,points=? WHERE code=?");

		$tableauInfos = [
			$uneEquipe->getCode(), $uneEquipe->getNom(), $uneEquipe->getVille(),
			$uneEquipe->getPoint()
		];
		return $requete->execute($tableauInfos);
	}
	static public function supprimer($uneEquipe)
	{
		try {
			$connexion = ConnexionBD::getInstance();
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		$requete = $connexion->prepare("DELETE FROM equipe WHERE code=?");
		$tableauInfos = [$uneEquipe->getCode()];
		return $requete->execute($tableauInfos);
	}

	static public function getCode ($uneEquipe){
		return $uneEquipe->getCode();
	}

	static public function ajouterPoint ($unCode, $point){
		try {
			$connexion = ConnexionBD::getInstance();
			
		} catch (Exception $e) {
			throw new Exception("Impossible d’obtenir la connexion à la BD.");
		}
		$uneEquipe=EquipeDAO::chercher($unCode);
		$requete1= $connexion->prepare("UPDATE equipe SET point=point+?
 		WHERE code=?");
 	 	$requete1->execute(array($point,$unCode));
  		return $uneEquipe;

	}

	
 
}
