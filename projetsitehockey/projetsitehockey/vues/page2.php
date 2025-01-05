<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="project.css">
		
	
	</head>
    
	<body>
		<div class="header">
			<a href="?action=voirPage1" class="menubutton1">Acceuil</a>
			<a href="?action=voirPage2" class="menubutton2">Classement</a>
			<a href="?action=voirPage3" class="menubutton3">Matchs</a>
			<a href="?action=voirPage4" class="menubutton3">Connexion</a>

		</div>
        <header>
				
            <div class="subheader2">
                <div id="subheader">
                    <h1 style="position: sticky;
                    top: 90px;
                    left: 600px;
                    min-width: 100px;
                    height: 230px;
                    text-align: center;
                    font: normal normal bold 50px/60px THE GLOBE PERSONAL USE;
                    letter-spacing: 5px;
                    color: #FFFFFF;
                    text-shadow: 10px 10px 20px #00000029;
                    opacity: 1;
                    display: flex;
                    margin: 60px;">Classement</h1>
                </div>
            </div>
        </header>

		<div>
			<h2> Voici le classement de la saison 2022</h2>
		<table>

  <tbody>
    
    <?php 

		include_once('modele/DAO/EquipeDAO.class.php');
		include_once('modele/DAO/equipe.class.php');
		$result = EquipeDAO::chercherAvecFiltre("ORDER BY point DESC");
		foreach($result as $values){
		echo "<tr><td>".$values."</td></tr>";}
	?>

  </tbody>
 
</table>

<div>
	<table>
		</br>
		<?php
		$results=EquipeDAO::chercherAvecFiltre("ORDER BY point DESC
		LIMIT 3") ;

		echo "<p> Les 3 Premiers Sont : </p></br></br>";

		foreach($results as $sa){
			echo "<tr><td>".$sa."</td></tr></br></br>";
		}
			?>
	</table>
</div>



		</div>
















        <div class="subfooter"></div>
			<div class="footer">
			<a href="https://twitter.com/home"><img src="image/icons8-twitter-80.png" style=" 
					position: relative;
					display: flex;
					margin-left: 30px;
					top: 25px;
					left: 150px;
					width: 55px;
					height: 55px;
					background: transparent url('img/icons8-twitter-80.png') 0% 0% no-repeat padding-box;
					box-shadow: 0px 3px 6px #00000029;
					opacity: 1;"
					></a>
				<a href="https://www.facebook.com/"><img src="image/icons8-facebook-80.png" style="
				    position: relative;
					display: flex;
					margin-left: 30px;
					top: 25px;
					left: 150px;
					width: 53px;
					height: 53px;
					background: transparent url('img/icons8-facebook-80.png') 0% 0% no-repeat padding-box;
					box-shadow: 0px 3px 6px #00000029;
					opacity: 1;
					"
					></a>
				<a href="https://www.instagram.com/"><img src="image/icons8-instagram-80.png" style="
					position: relative;
					display: flex;
					margin-left: 30px;
					top: 25px;
					left: 150px;
					width: 53px;
					height: 53px;
					background: transparent url('img/icons8-instagram-80.png') 0% 0% no-repeat padding-box;
					box-shadow: 0px 3px 6px #00000029;
					opacity: 1;
					"></a>
			
			
			
			
			</div>
		
			
			



		</body>
		
		
		
	   	
		
		
	
	
</html>

       
            
    