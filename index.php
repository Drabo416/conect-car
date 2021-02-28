<!DOCTYPE html>
<html>
<head>
	<title>Connect car</title>
	<meta charset="utf-8">
</head>
<body>
<div class="display">
	<div class="contenair">
	<div class="titre">
		<span>Bienvenue sur notre site WEB</span>
		
	</div>
	<dir class="texte-intro">
		<span >
			Connect car est un projet réalisé par des étudiants de Licence 2 de l'Esatic(Ecole Supperieur Africaine Des TIC)
		</span>
	</dir>
	<dir class="texte-intro">
		<span>
		Il consiste à Télécommander  une voiture à l'aide de son téléphone Android
	</span>
	</dir>
	<div class="texte-intro">
		<span>
		Télécharger l'application  sur le lien ci-dessous 
	</span>
	</div>
	<div class="lien"><a href="Connect_car.apk">TELECHARGER</a></div>
</div>
</div>
<style type="text/css">
	body{
		background-image: url("IMG-20210222-WA0007.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 10% 20%;
	}
	.display{
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		height: 100%;
		position: fixed;
			width: 100%;
	}
	.titre{
		width: 100%;
		height: 40px;
		background-color: #025955;
		display: flex;
		justify-content: center;
		align-items: center;
		color: white;
		font-size: 1.8em;
	}
	.contenair{
		width: 60%;
		height: 85%;
		box-shadow: 0px 0px 15px;
		background-color: rgba(0, 0, 0, 0.5);

	}
	.texte-intro{
		font-size: 2em;
		color: white;
		text-align: center;
		text-shadow: 0 0 15px #161d6f;
		font-family: Arial;
	}
	.lien{
		width: 150px;
		text-align: center;
		padding-top: 10px;
		border-radius: 75px;
		margin:auto;
		margin-top: 20px;
		height: 30px;
		background-color: #025955;
		
	}
	a{
		color: white;
		text-decoration: none;
		font-family: arial;
	}
	a:hover{
		text-decoration: underline;
	}
	@media screen and (max-width: 1050px)
{
 body{
 	background-image: none;
 }  
 .contenair{
 	background-color: #03506f;
 }
}
@media all and (max-device-width: 480px)
{
    .contenair{
    	height: 40%;
    	width: 80%;
    }
    .texte-intro{
    	font-size: 2.5em;
    }
    .titre
    {
    	font-size: 2.5em;
    }
    a{
    	font-size: 2.5em;
    }
    .lien{
    	width: 400px;
    	height: 60px;
    }
    body{
    	background: radial-gradient(#1687a7, #045762);
    }
}
</style>
</body>
</html>
