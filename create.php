<?php
session_start();
include_once "db/MySQL.class.php";
$conn = new MySQL();
$sql = "insert into tag_image(image,tag) values(".($_SESSION['index']+2).",'".$_POST['tag']."')";
$conn->execute($sql);
$_SESSION['index']+=1;
header("location:index.php");
?>