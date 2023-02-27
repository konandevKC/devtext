<?php
include('conf.php'); 
include('server.php');
include('comment.php');
include('choix.php');


$id = (int) $_GET['id'];
$query = "SELECT * FROM projet ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn,$query) or die('mysql_error()');

$EXE = "SELECT * FROM projet ORDER BY id DESC LIMIT 10";
$rec = mysqli_query($conn,$EXE) or die('mysql_error()');

$bare = "SELECT *  FROM projet WHERE id = $id";

$afficher_profil = mysqli_query($conn,$bare) or die('mysql_error()');
?>
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href=".css">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <style>
      

      nav .animation{
	margin-bottom: -10px;
	position: absolute;
	height: 4px;
	
	z-index: 0;
	background: skyblue;
	/*border-radius: 8px; #1abc9c*/
	transition: all .5s ease 0;
}
nav a{
	position: relative;
	font-size: 15px;
	line-height: 30px;
	text-decoration: none;
	z-index: 1;


}
a:nth-child(1){
	width: 100px;
}



a:nth-child(4){
	width: 100px;
}
nav .start-home,a:nth-child(4):hover~.animation{
	width: 70px;
	left: 380px;
}

a:nth-child(5){
	width: 100px;
}
nav .start-home,a:nth-child(5):hover~.animation{
	width: 70px;
	left: 470px;
}
nav .start-home,a:nth-child(1):hover~.animation{
	width: 50px;
	left: 120px;
}

a:nth-child(2){
	width: 110px;
}
nav .start-home,a:nth-child(2):hover~.animation{
	width: 100px;
	left: 185px;
}
a:nth-child(3){
	width: 100px;
}
nav .start-home,a:nth-child(3):hover~.animation{
	width: 70px;
	left: 300px;
}

#rech {
		width: 600px;
		height: 40px;
		border-radius: 20px;
		margin-left: 120px;		
		box-shadow: 1px 1px 5px lightgray;
  		border-style: inherit;
}
#connexion {
		background-color: grey;
		margin-left: 200px;
    width: 170px;
    color: #ddd;
    height: 40px;
}
#tout {
		color: black;
		margin-left: 125px;			
}
#actu {
		color: black;
			margin-left: 20px;		
}
#imag {
		color: black;
			margin-left: 20px;	
}
#videos {
		color: black;
		 margin-left: 20px;			
}
#cartes {
		color: black;
		margin-left: 20px;		
}
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
  position: absolute;
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
  div.profil{
  border: 1px solid rgb(39, 150, 39);
  padding: 25px 10px 10px 40px;
  width: 310px;
  height: 240px;
  border-radius: 40px;
  margin-left: 300px;
  margin-bottom: 20px;
  }
  div.profil img{
    margin-left: 20px;
    width: 250px;
    height: 200px;
    border: none;
    opacity: 0.5s;
  }
  
  input{
    background-color: transparent;
    margin-left: 10px;
    color: transparent;
    border: 0;
    position: absolute;
    width: 40;
    height: 50px;
  }
  textarea{
    resize: none;
    margin-left: 200px;
    margin-top: 10px;
    height: 90px;
    width: 500px;
    padding: 0px 15px;
    color: #000;
    border: 2px solid blue;
    border-radius: 20px;
  }
  i{
    margin-left: 15px;
    margin-top: 10px;
  }
  div.base{
    display: flex;
  }
  .post-info{
    margin-left: 80px;
    margin-top: 30px;
    position: absolute;
    width: 600px;
    height: 20px;
    display: flex;

  }
  h1{
    text-align: center;
    margin-left: -300px;
    color: #008518;
  }
  .lik{
    width: 40px;
    height: 40px;
    background-color: blue;
    font-size: 30px;
    color: white;
    border-radius: 100px;
    text-align: center;
    margin-top: -30px;
    margin-left: -40px;
  }
  .dilik{
    width: 40px;
    height: 40px;
    background-color: red;
    color: white;
    font-size: 30px;
    border-radius: 100px;
    margin-left: 80px;
    text-align: center;
    margin-top: -30px;
  }
  div.desc {
    text-align: center;
  }
     div.div_text_scroll{
      font-size:  10px;
     }
      .voir{
        width: 80%;
        height: 40px;
        background: white;
        border: 5px solid greenyellow;
        position:absolute;
        margin-top: 500px;
        border-radius: 30px;
        margin-left: -1020px;
        text-align: center;
        font-size: 20px;
      }
      .voir a{
        text-decoration: none;
      }
      .cote{
        margin-right: 10px;
      }
  div.desc {
    text-align: center;
  }
  .swiper {
    width: 100%;
    height:  70px;

  }
  @media screen and (min-width: 480px) {
    .swiper-slide { width: 100%; }
    .gallery {width: 200px;}
  }
  .swiper-slide{
  font-size: 18px;
        background: #fff;
         margin-left: -5px;
    padding: 10px;
    display: flex;
    border-radius: 50px;   
    border: 0.5px solid skyblue;
     width: 170px;
    height: 45px;      
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

  .swiper-slide img {
    display: block;
    margin-left: -20px;
    width: 40px;
    height: 40px;
    border-radius: 40px;
  }
     div.div_text_scroll{
      font-size:  10px;
     }
      .voir{
        width: 80%;
        height: 40px;
        background: white;
        border: 5px solid greenyellow;
        position:absolute;
        margin-top: 500px;
        border-radius: 30px;
        margin-left: -1020px;
        text-align: center;
        font-size: 20px;
      }
      .voir a{
        text-decoration: none;
      }
    </style>
    <title>Document</title>
</head>
<body>
&nbsp;
  	<div style="display: flex;align-items: center;">
  		&nbsp;&nbsp;&nbsp;<img width="100px" height="20px" src="esset/logo.jpeg">
   		<input id="rech" type="text" name="rech">
   		<img style="margin-left: 500px;margin-bottom: -5px;" src="images/micro.png">
   		<img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png">
   		<img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png">
      <div class="cote">
      <input type="button" name="connexion" id="connexion" value="connexion">
   		&nbsp;<img style="margin-left: 380px; height: 45px;" src="images/parametre.png">
  	</div>
      </div>
   		<br>

  	<!--div de la 2eme ligne-->
  	<div style="display: flex;align-items: center;">

  		<div style="display: flex;align-items: center;">
  		<nav>
  		<a id="tout" href="#">TOUT</a>
  		<a id="actu" href="#">ACTUALITES</a>
  		<a id="imag" href="#">IMAGES</a>
  		<a id="videos" href="#">VIDEOS</a>
  		<a id="cartes" href="#">CARTES</a>
  		<div class="animation start-home"></div>
  		</nav>
  	  </div>

  	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	 
  	 <div style="display: flex;align-items: center;">
  	 Filtre adulte: &nbsp;	 	 
  	 <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">-----tout-----</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">-----tout-----</a>
    <a href="accueil.php?page=3">Restaurant</a>
    <a href="accueil.php?page=4">recette</a>
    <a href="accueil.php?page=6">retour d’expérience</a>
    <a href="accueil.php?page=7">conseil</a>
  </div>
</div>
<script>
function myFunction() {
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
  	 &nbsp;&nbsp;&nbsp;&nbsp;Filtre <img style="margin-bottom: -7px;" src="images/filtre.png">
  	 	</div>
  	</div>
  	 <div>
  	 	<hr style="margin-bottom: 10px;margin-top: 1px;">	 	
  	 </div>
<div class="swiper mySwiper" >
    <div class="swiper-wrapper">
    <?php
    while($row = mysqli_fetch_assoc($result)) 
    {  
    ?>
        <div class="swiper-slide">
            <img class="img_scroll" src="<?php echo $row['imagepla'];?>" alt="image" name="photo">
            <div class="div_text_scroll"><?php echo $row['nomplat'];?> <br>  <b>Chat</b></div>  
        </div>
        <?php
}
?>
    </div>

      <!-- les fleches -->
      <div class="swiper-button-next" style="color:black;"></div>
      <div class="swiper-button-prev" style="color:black;"></div>
    </div>
    
	 
	 


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 8,
    spaceBetween: 4,
    slidesPerGroup: 8,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  </script>
 <?php
 while($row = mysqli_fetch_assoc($afficher_profil)) 
    {  
    ?>
     <h1><?php echo $row['typepub'];?></h1>
<div class="base">
  <div class="profil">
    <img src="<?php echo $row['imagepla'];?>" alt="">
      <?php  
        // if(isset($_GET["id"])){
        //   $sql = "SELECT*FROM `avis` WHERE avis_image = '$id' AND avis_action = '1'";
        //   $result = mysqli_query($conn, $sql);
        //   $count1 = mysqli_num_rows($result);
        //   $sql2 = "SELECT*FROM `avis` WHERE avis_image = '$id' AND avis_action = '2'";
        //   $result1 = mysqli_query($conn, $sql2);
        //   $count2 = mysqli_num_rows($result1);     
        // }
          ?>
      
   	<div class="post">
      <div class="post-info" >
	      <form action="" method="POST">
        <input hidden type="text" value="like" name="likes">
      <button type="submit" name="like"  style="background-color: transparent; border:none;"><i class="fa fa-thumbs-up like-btn" class="fa fa-thumbs-o-up like-btn" style="color: blue;width: 30px;"></i>
      </button>
      <div class="lik"><span class="likes"><?= $count1 ?></span> </div>
        </form>

      	
      	&nbsp;&nbsp;&nbsp;&nbsp;
        <form action="" method="POST">
        <input hidden type="text" value="dislike" name="dislikes">
        <button type="submit" name="dislike" style="background-color: transparent; border:none;"><i
      		  class="fa fa-thumbs-down dislike-btn" 
      		  class="fa fa-thumbs-o-down dislike-btn" style="color: red;"
      	  data-id=""></i></button>
          <div class="dilik"><span class="dislikes">
          <?php echo $pointer2 ?>
          </span></div>
      
        </form>
        <?php
      
        ?>
      </div>
   	</div>
</div>
<div>Quelques informations:    
    <ul>    
    <li style="color: #3551EC;"> <?= $row['nomplat'] ?></li>
    <li> <?= $row['descrption'] ?></li>           
      <li> <?= $row['id'] ?></li>                                                        
      <li style="color: #596CE5;">publié le : <?= $row['datepub'] ?></li>                                       
    </ul>
  </div>
  </div>

  <?php
    }
    ?> 
  <section class="comment">
    <form action="" method="POST">
      <textarea name="comment" id="" cols="  60" rows="2" placeholder="commentaire...."></textarea>
      <input type="hidden" name="loisir" value="<?php echo $id ?>" />
      <input type="submit" name="comm" >
      <span class="iconify" data-icon="ant-design:message-outlined" style="color: blue; width:90px; height:90px"></span></div>
    </form>
  </section>   
    <script src="man.js"></script>
  <body>                                                                                                  
</html>