<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:logins.php');
}
else{
echo "You are logged in as".$user. "and".$pass;
}
?>