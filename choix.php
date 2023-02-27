<?php
include('conf.php');
$id = $_GET['id'];
$count1='0';
$sql = "SELECT*FROM `dislikes` WHERE postid = '$id' AND choi = 'like'";
$result = mysqli_query($conn, $sql);
$count1 = mysqli_num_rows($result);
if(isset($_POST['like']) ){
      $like=$_POST['likes'];
        $sqllike = "INSERT INTO `dislikes`( `choi`, `postid`) VALUES ('$like','$id')";
                 if(mysqli_query($conn, $sqllike)){
                  ;
                 }else{
                   echo "error: ". $sql . "<br>" .mysqli_error($conn);
      
                }         
            
            
    }
    $pointer2='0';
    $sql2 = "SELECT*FROM `t_likes` WHERE  idprog = '$id' AND choix = 'dislike' ";
          $result1 = mysqli_query($conn, $sql2);
          $pointer2 = mysqli_num_rows($result1);  
    if(isset($_POST['dislike'])){
          $like=$_POST['dislikes'];
            $sqllike = "INSERT INTO `t_likes`( `idprog`, `choix`) VALUES ('$id','$like')";
                     if(mysqli_query($conn, $sqllike)){
                     
                     }else{
                       echo "error: ". $sql . "<br>" .mysqli_error($conn);
                    }

}
?>