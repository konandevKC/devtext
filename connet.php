<?php
include('server.php');
// enregistrement de l'image dans le dossier
if(isset($_POST["submit"])){
$nom = $_POST["platt"];
$datepub = date("Y/m/d h:m:s");
$typepub  = $_POST["typepub"];
$descr = $_POST["description"];
$target_dir = "image1/";
$target_file = $target_dir . basename($_FILES["plat"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["plat"]["tmp_name"]);
  if($check !== false) {
    echo "c'est bien une image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "le fichier est different d'une image.";
    $uploadOk = 0;
  }
  // renomer l'image
$temp = explode(".", $_FILES["plat"]["name"]);
$newfilename = round(microtime(true)) . '.' .end($temp);
$finaldestination = $target_dir .$newfilename;

if($uploadOk == 0){
    echo"image non enregistré";

}else{
    if(move_uploaded_file($_FILES["plat"]["tmp_name"],"" . $finaldestination)) {
        
        $sql = "INSERT INTO `projet`(nomplat, imagepla, datepub, typepub,descrption)
         VALUES('$nom', '$finaldestination', '$datepub','$typepub','$descr')";
        

    }
    if(mysqli_query($conn, $sql)){
      header('location:accueil.php');
    }else{
      echo "error: ". $sql . "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
}

?>