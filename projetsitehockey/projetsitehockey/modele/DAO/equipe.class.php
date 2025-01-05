<?php


class Equipe {
	
	private $code;
	private $nom;
	private $ville;
	private $point;
	

	
	public function __construct($code,$nom,$ville,$point){
		$this->code=$code;
		$this->nom=$nom;
		$this->ville=$ville;
		$this->point=$point;
	}
	
	
	public function getCode() {return $this->code;}
	public function getNom() {return $this->nom;}
	public function getVille() {return $this->ville;}
	public function getPoint() {return $this->point;}
	public function setNom($valeur) {$this->nom=$valeur;}
	public function setVille($valeur) {$this->ville=$valeur;}
	public function setCode($valeur) {$this->code=$valeur;}
	public function setPoint($valeur) {$this->point=$valeur;}

	
	public function ajouterPoint($quantiteAjoutee) {
		$this->point+=$quantiteAjoutee;
	}
	public function enleverPoint($quantiteEnlevee) {
		$this->point-=$quantiteEnlevee;
	}
	
	
	public function __toString(){
		$message="[#".$this->code."] ".$this->nom." - ".$this->ville." - ".$this->point." points";
		
		return $message;
	}
}
?>






