<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    label{
      display: block;
    text-align: left;
    margin: 3px;
    }
   input[type=text]{
    height: 30px;
      width: 93%;
      padding: 5px 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid gray;
   }
   select{
    height: 30px;
      width: 93%;
      padding: 5px 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid gray;
   }
   input[type=file]{
    height: 30px;
      width: 93%;
      color: blue;
      padding: 5px 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid gray;
   }
    button{
      height: 30px;
      background-color: green;
      width: 93%;
      padding: 5px 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid gray;
    }
    textarea{
      resize: none;
      height: 80px;
      width: 93%;
      color: blue;
      padding: 5px 10px;
      font-size: 16px;
      border: 1px solid gray;
      border-radius: 5px;
    }
    h2{
      width:600px;
      font-size: 4em;
    }
  </style>
</head>
<body>
<h2>ajouter un plat</h2> 
<form action="connet.php" method="post" enctype="multipart/form-data">
  <label for="fname">nom du plat:</label><br>
  <input type="text" id="fname" name="platt" required ><br>
  <label for="lname">type publication:</label><br>
  <select name="typepub" id="">
  <option value="" disabled></option>
  <option value="retour">retour d’expérience</option>
  <option value="nourriture">recette</option>
  <option value="conseil">conseil</option>
  <option value="restaurant">restaurant</option>
  </select><br>
  <label for="lname">ajouter image:</label>
  <input type="file" name="plat" id="fileToUpload"><br><br>
  <label for="">Description</label>
  <textarea name="description" id="" cols="30" rows=""></textarea><br><br>
  <button type="submit" value="envoyer" name="submit">envoyer</button>
</form> 

</body>
</html>