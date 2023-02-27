<?php
include('conf.php');

        if(isset($_POST["comm"])){
          $comme = $_POST["comment"];
      
          $sql = "INSERT INTO `comments`( `post_id`,`body`) VALUES ('$id','$comme')";
          if(mysqli_query($conn, $sql)){
            header("location:incre.php?id=$id");
          }
      }
        ?>