<?php
session_start();
$_SESSION["GET_ID"]=$_GET['id'];

header('Location: ../detailArticle.php');
?>