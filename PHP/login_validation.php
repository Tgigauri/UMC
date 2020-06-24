<?php
session_start();
require_once "class.php";
require "../pages/examples/login.html";
$user = new User();
$user->setName($_POST['userId']);
$id = $_POST['userId'];
$position = $user->getUserPosition();
$name = $user->getName();
$user =  $user->getUserName();
//თუ სახელი არ არის USER_ID ბაზაში იუზერი შევა სახელით Guest
if($user == FALSE){
    $_SESSION["name"]="Guest";
    header('Location: index.php') ;
}
    
//თუ სახელი არის, მაშინ სესია გადავა index.php ფაილში, და სესიის მიხედვით index.php წამოიღებს იუზერის პოზიციას
else {
    $_SESSION["position"]=$position;
    $_SESSION["name"]=$user;
    header('Location: index.php') ;
}
?>