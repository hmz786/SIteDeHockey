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
                    margin: 60px;">Matchs</h1>
                </div>
            </div>
        </header>


	<div>
	<?php include_once('modele/DAO/EquipeDAO.class.php');
	$equipe1 = EquipeDAO::chercherAvecFiltre("WHERE code = 1");
	$equipe2 = EquipeDAO::chercherAvecFiltre("WHERE code = 2");
	$equipe3 = EquipeDAO::chercherAvecFiltre("WHERE code = 3");
	$equipe4 = EquipeDAO::chercherAvecFiltre("WHERE code = 4");
	$equipe5 = EquipeDAO::chercherAvecFiltre("WHERE code = 5");
	$equipe6 = EquipeDAO::chercherAvecFiltre("WHERE code = 6");
	$equipe7 = EquipeDAO::chercherAvecFiltre("WHERE code = 7");
	$equipe8 = EquipeDAO::chercherAvecFiltre("WHERE code = 8");
	$equipe9 = EquipeDAO::chercherAvecFiltre("WHERE code = 9");
	$equipe10 = EquipeDAO::chercherAvecFiltre("WHERE code = 10");
		
?>
	<table>
		<tr>
			<th>Visiteur</th>
			<th>Receveur</th>
			<th>Date</th>
		</tr>
		<tr>
		<td><?php foreach($equipe1 as $a){echo $a;} ?> </td>
		<td><?php foreach($equipe2 as $a){echo $a;} ?> </td>
		<td>12/09/2022</td>
		</tr>
		<tr>
		<td><?php foreach($equipe3 as $a){echo $a;} ?> </td>
		<td><?php foreach($equipe4 as $a){echo $a;} ?> </td>
		<td>12/09/2022</td>
		</tr>
		<tr>
		<td><?php foreach($equipe5 as $a){echo $a;} ?> </td>
		<td><?php foreach($equipe6 as $a){echo $a;} ?> </td>
		<td>12/09/2022</td>
		</tr>
		<tr>
		<td><?php foreach($equipe7 as $a){echo $a;} ?> </td>
		<td><?php foreach($equipe8 as $a){echo $a;} ?> </td>
		<td>12/09/2022</td>
		</tr>
		<tr>
		<td><?php foreach($equipe9 as $a){echo $a;} ?> </td>
		<td><?php foreach($equipe10 as $a){echo $a;} ?> </td>
		<td>12/09/2022</td>
		</tr>



	</table>


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

       
            
    