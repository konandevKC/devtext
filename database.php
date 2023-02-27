<?php
function connection(){
    $link=mysqli_connect("localhost","spcom_userkonan","RXAOSZX5GJBV") or die("impossible de se connecter au serveur");
    mysqli_select_db("spcom_konan") or die("erreur de connexion".mysqli_error($link));
    }
    function connect(){
     $link=mysqli_connect("localhost","spcom_userkonan","RXAOSZX5GJBV") or die("impossible de connecté");
    
     return $link;
    }
    $link=connect();
    $res=mysqli_query($link,$req);
mysqli_select_db($link,"spcom_konan");
    

    $req="create table projet(id int primary key
  auto_increment,
    nomplat	varchar(100),
    imagepla varchar(100),
    datepub	datetime,
    typepub	varchar(100),
    descrption	varchar(200)) ";
    $res=mysqli_query($link,$req) or die("impossible de creer la table projet");
    
    $req = "create table comment(id int primary key auto_increment,
    post_id	int(11),
    user_id	int(11),
    body	text,
    created_at	timestamp

    foreign key(post_id) references projet(id)
       ON DELETE CASCADE 
       ON UPDATE CASCADE
    )";
    $res=mysqli_query($link,$req) or die("impossible de creer la table comment");

    $req = "create table dislikes(id_dislikes int primary key
    auto_increment,
    choi varchar(50),
    postid 	int(11),
    foreign key(postid) references projet(id)
       ON DELETE CASCADE 
       ON UPDATE CASCADE
    )";
    $res=mysqli_query($link,$req) or die("impossible de creer la table dislikes");

    $req = "create table t_likes (idliks int primary key auto_increment,
    idprojet int(11),
    choix varchar(100),
    
    foreign key(idprojet) references projet(id)
       ON DELETE CASCADE 
       ON UPDATE CASCADE
    )";
    $res=mysqli_query($link,$req) or die("impossible de creer la table t_likes");
    

?>