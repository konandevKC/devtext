<?php
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
include('conf.php');
  ?>
<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>welikefood</title>
		<link rel="stylesheet" type="text/css" href="style_css.css" />
        <link rel="stylesheet" href="acc.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <style>
		.dropbtn {
  background-color: grey;
  color: white;
  width: 140px;
  height: 5px; 
  padding-bottom: 16px;
  border: 3px solid black;
  font-size: 16px;
  text-align: center;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: grey;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: relative;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
hr{
	margin-top: 10px;
}
	</style>
    </head>
    <body>
	&nbsp;
	<div style="display: flex;align-items: center;">
		&nbsp;&nbsp;&nbsp;<img width="100" height="20" src="esset/logo.jpeg">
 		<input id="rech" type="text" name="rech">
 		<img style="margin-left: -110px;margin-bottom: -5px;" src="images/micro.png">
 		<img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png">
 		<img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png">
 		<input type="button" name="connexion" id="connexion" value="connexion">
 		&nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png">
	</div><br>

	<!--div de la 2eme ligne-->
	<div style="display: flex;align-items: center;">

		<div style="display: flex;align-items: center;">
		<nav>
		<a id="tout" href="#">TOUT</a>
		<a id="actu" href="#">ACTUALITES</a>
		<a id="imag" href="#">IMAGES</a>
		<a id="videos" href="#">VIDEOS</a>
		<a id="cartes" href="index.php?page=10">AJOUTER</a>
		<div class="animation start-home"></div>
		</nav>
	  </div>

	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 
	 <div style="display: flex;align-items: center;">
	 Filtre adulte: &nbsp;	 	 
	 <div class="dropdown">
  <button onclick="myuser()" class="dropbtn">-----tout-----</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="index.php?page=2">tout</a>
    <a href="index.php?page=3">Restaurant</a>
    <a href="index.php?page=4">recette</a>
    <a href="index.php?page=5">retour d’expérience</a>
    <a href="index.php?page=6">conseil</a>
  </div>
</div>
<script>
function myuser() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
	 <a href=""></a>
	 &nbsp;&nbsp;&nbsp;&nbsp;Filtre<img style="margin-bottom: -7px;" src="images/filtre.png">
	 	</div>
	</div>
    <hr>
    <?php
if(isset($_GET["page"])) {// s'il y a des éléments 
    $page=$_GET["page"]; 
if($page == 1){
    include("form.php");
}else if($page == 2){
    include('page1.php');
}else if($page == 3){
	include('Restaurant.php');
}else if($page == 4){
	include('recette.php');
}else if($page == 5){
	include('retour.php');
}else if($page == 6){
	include('conseil.php');
}else if($page == 10){
	include('form.php');
}
}
else{
?>
<?php
include('page1.php');
?>

<?php
}
?>
