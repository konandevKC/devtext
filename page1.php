<?php
include('conf.php');
$query = "SELECT * FROM projet";
$result = mysqli_query($conn,$query) or die('mysql_error()');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href=".css">
    
    <style>
   
  div.desc {
    text-align: center;
  }
  .swiper {
    width: 100%;
    height:  80px;

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
    height: 55px;      
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
include('view.php');
?>

    
</body>
</html>