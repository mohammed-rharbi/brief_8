<?php 
session_start();
include '..DAO/data_dao.php'; 
$Database = new Database();

 $id = $_GET["id"] ;


$sql = "DELETE FROM produit WHERE Reference = $id";
$Database->updateData($sql);

header("Location: ../dashboard_Products.php");
exit; 




?>
