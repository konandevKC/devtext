<?php
include('conf.php');
$query = "SELECT * FROM `projet` WHERE `typepub` = 'Restaurant'";
$result = mysqli_query($conn,$query) or die('mysql_error()');

while($row = mysqli_fetch_assoc($result)) 
{  
?>
   <style>
 
 div.gallery {
margin: 10px;
border: 1px solid #ccc;
float: left;
width: 200px;
height: 200px;
border-radius: 10px;

}

div.gallery:hover {
/*border: 1px solid #777;*/
box-shadow: 2px 2px 8px lightgray;
text-decoration: underline;
width: 200px;
}

div.gallery img {
width: 200px;
height: 150px;
border-top-left-radius: 10px;
border-top-right-radius: 10px;

}


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
div.gallery :hover .overlay{
 color: #ccc;
 box-shadow: inset 0 -60px 10px -40px rgba(0, 0, 0, 0.5);
 text-decoration: underline;
 width: 200px;
} 
</style>
</head>
<body>
<div class="gallery" >
<a target="_blank" href="profil.php?id=<?= $row['id'] ?>">
<img src="<?php echo $row['imagepla'];?>" alt="">
<div class="" >
<div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div>
</div>
</a>
<div class="desc"><?php echo $row['nomplat'];?><br><?php echo $row['descrption'];?></div>
</div>
<?php
}
?>
</body>
</html>