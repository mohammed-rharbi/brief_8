<?php 
session_start();
include '..DAO/data_dao.php'; 
$Database = new Database();


if ( empty($_SESSION["user"]) ) {  
  
    echo "no" ; 
   }else {
$user_id = $_SESSION["user"] ;


$panierData =  $Database->selectData('panier','*',"client_id = $user_id",'');



echo json_encode($panierData);

   }