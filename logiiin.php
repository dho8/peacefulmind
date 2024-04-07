<?php

require("cnx.php");
if (isset($_POST['email'])&&isset($_POST['password'])){
    if( !empty(!empty($_POST['email'])&& !empty($_POST['password']))){
        $email=$_POST['email'];
        $password=$_POST['password'];
    }
}
$user=connexion();
$email=$_POST['email'];
$password=$_POST['password'];
try{
    $sql="INSERT INTO signin(email,password)values('$email','$password')";
    $stat=$user->query($sql);
}
catch(Exeption $e){
    echo"$e";
}
$req="SELECT*FROM signin WHERE email='$email'AND password='$password'";
$res=$user->query($req);
if($res){
    if($res->fetchcolumn()>0){
        echo"Bienvenue";
    }else{
        echo"Email ou password incorrect";
}
}