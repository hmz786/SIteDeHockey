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
			<a href="?action=voirPage4" class="menubutton3" id="open">Connexion</a>

		</div>
		
			<header>
				
				<div class="subheader2">
					<div id="subheader">
						<h1 class="textheader">Votre Ligue En Un Seul Clic</h1>
						<div class="button"><a href="?action=voirPage2" class="buttontext">Voir les résultats</a></div>

						
					</div>
				</div>
			</header>
			<div style="display: flex; flex-wrap: wrap;">
			<div>
					<h2 style="
					
					position: absolute;
					font: normal normal bold 33px/43px THE GLOBE PERSONAL USE;
					letter-spacing: 0px;
					left: 175px;
					top: 700px;
					color: #47B1CC;
					text-shadow: 10px 10px 20px #00000029;
					opacity: 1;
					margin-top: 50px;
					display:flex;
					min-width: auto;
					min-height: auto;
					">À Propos
					</h2>
			
				
				
				<p class="textmain">
				Notre Ligue de garage est l'une des plus compétitive au Québec. Nous avons 10 équipes qui sont présentement investies à rendre notre projet de plus en plus grand. Les matchs se jouent normalement le samedi et sont programmés pour 18h du soir (sauf exception). Le gagnant du tournoi gagnera une somme de 5000$ pour investir dans l’équipement des joueurs. Pour vous inscrire veuillez contacter l’administrateur du tournoi au 514-908-3213. 
					
				</p>
			</div>
			<div class="pop"><h2
			style="
					
					position: absolute;
					font: normal normal 23px/33px THE GLOBE PERSONAL USE;
					letter-spacing: 0px;
					left: 100px;
					top: -112px;
					width: 400px;
					color: #47B1CC;
					text-shadow: 10px 10px 20px #00000029;
					opacity: 1;
					margin-top: 50px;
					display:flex;
					min-width: auto;
					min-height: auto;
					">Cliquer sur la photo
			</h2><img onclick="fonction();" src="image\image1.jpg" id="image"></div>
			<script>
				function fonction() {
 				 var image = document.getElementById("image");
				 if (image.src == "http://localhost/image/image1.jpg"){
					image.src = "http://localhost/image/image2.jpg";
				 }
				 else if (image.src == "http://localhost/image/image2.jpg"){
					image.src = "http://localhost/image/image1.jpg";
				 }
				 
				
        }
		</script>
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
