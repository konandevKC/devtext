
<?php
  include('conf.php');
  include('plus.php');
$secon = "SELECT * FROM projet ORDER BY id asc LIMIT 10";
$aff = mysqli_query($conn,$secon) or die('mysql_error');

   
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="voirp.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <title>Document</title>
      <!-- <script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script> -->
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
      <style>
     
	div.gallery {
  margin: 10px;
  margin-top: 40px;
  border: 1px solid #ccc;
  float: left;
  width: 220px;
  height: 220px;
  border-radius: 10px;

}

div.gallery:hover {
  /*border: 1px solid #777;*/
  box-shadow: 2px 2px 8px lightgray;
  text-decoration: underline;

}

div.gallery img {
  width: 220px;
  height: 150px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  
}
/*div.gallery img:hover {
  opacity: 1;
  box-shadow: inset 0 -10px 10px -10px blue;
}*/

div.desc {
  font-size: 10px;
  text-align: center;
  width: 200px;
  height: 60px;
}

.contenant:hover {
  text-decoration: underline;
  opacity: 1;
  /*box-shadow: inset 10px 10px 10px blue;*/
  box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

}
 .contenant:hover .overlay {
  opacity: 1;
}
.contenant:hover .img_plus {
  opacity: 1;
}
div.overlay{
    position: absolute;
    margin-top: -40px;
    color: transparent;
    text-align: center;
    opacity: 1;
    width: 22%;
}
div.gallery:hover .overlay{
    color: #ccc;
    box-shadow: inset 0 -60px 10px -40px rgba(0, 0, 0, 0.5);
    text-decoration: underline;
    width: 220px;
}

#load_more{
    position: relative;
    top: 50px;
    width: 98%;
    background-color: white;
    border: 3px  greenyellow solid ;
    border-radius: 30px;
	color: #000;
	font-size:  30px;
}

</style>
    </head>
    <body>
    <div id="grand">
    <?php
       while($mow = mysqli_fetch_assoc($aff)) 
       {  
      ?>
      
    <div class="gallery">
  <a target="_blank" href="incre.php?id=<?= $mow['id'] ?>">
  <img src="<?php echo $mow['imagepla'];?>" alt="">
    <div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div>
  </a>
    <div class="desc"><?php echo $mow['nomplat'];?><br><?php echo $mow['descrption'];?></div>
    </div>
    <?php
    $lastid= $mow['id'];
    }
    ?>
    </div>
    <div class="col-lg" id="div_load_more">
    <button type="button" id="load_more" name="more" data-id="<?php echo $lastid; ?>" class="btn btn-succes">Voir plus...</button>
  </div>
    <script src="voirp.js"></script>
    <!-- <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script> -->

    
    <!-- <div class="voir">
      <a href="page1.php?page=12"><button onclick="myfunction()" id="supp"  >voir plus...</button></a>
    </div>

    <script>
      const kc = document.getElementById('supp')
      kc.addEventListener("click",(e)=>{
        kc.style.opacity=0;
      })
    </script> -->
   <!-- <button class="voir" onclick="voirplus()" id="supp">voir plus...</button>

<script>
function voirplus() { 
  document.getElementById("supp").innerHTML="",
  location.replace("page1.php?page=12");
}
</script> -->
<!-- <div class="commentaire" id="commentaire">
    <a style="margin-top: 5px;" href="#">
      <img style="float: left;border: 0;
    height: 14px;
    margin: 0 5px -4px 0;
    width: 14px;
    display: inline;
    margin-top: 8px;
    " src="images/commentaire.jpg">
      <div>commentaire</div>
    </a>
  </div> -->
<?php
// if(isset($_GET["page"])) {
//     $page=$_GET["page"];
//     if($page == 12){
//       include("plus.php");
//     }
    
// }
?>
    
</body>
  </html>




