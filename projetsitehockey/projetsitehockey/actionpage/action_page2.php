<?php
if ((isset($_GET['point']) && $_GET['point'] != null)  and (isset($_GET['code']) && $_GET['code'] != null)) {
	include_once('../modele/DAO/EquipeDAO.class.php');
	
	
	$code=$_GET['code'];
	$point=$_GET['point'];
	$resultat = EquipeDAO::ajouterPoint($code,$point);
	$uneEquipe=EquipeDAO::chercher($code);
	echo "Reussi ".$uneEquipe." (vous allez etre redirige dans 5 secondes)";
}
if ((isset($_GET['codeEquipe']) && $_GET['codeEquipe'] != null) and	(isset($_GET['nomEquipe']) && $_GET['nomEquipe'] != null) and (isset($_GET['villeEquipe']) && $_GET['villeEquipe'] != null)) {
	include_once('../modele/DAO/EquipeDAO.class.php');
	include_once('../modele/DAO/equipe.class.php');
	$code=$_GET['codeEquipe'];
	$nom=$_GET['nomEquipe'];
	$ville=$_GET['villeEquipe'];
	$point=0;

	$uneEquipe = new Equipe($code,$nom,$ville,$point);
	EquipeDAO::inserer($uneEquipe);
	echo "Reussi ".$uneEquipe." (vous allez etre redirige dans 5 secondes)";
	
}
if ((isset($_GET['codesupp']) && $_GET['codesupp'] != null)){
	
	include_once('../modele/DAO/EquipeDAO.class.php');
	$codesupp = $_GET['codesupp'];
	$uneEquipe = EquipeDAO::chercher($codesupp);
	EquipeDAO::supprimer($uneEquipe);
	echo "Reussi! l'equipe numero #".$codesupp." a ete supprimee (vous allez etre redirige dans 5 secondes)";


}
	
	




?>
<script>
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= '/';
}, 5000);
</script>

       
            
    