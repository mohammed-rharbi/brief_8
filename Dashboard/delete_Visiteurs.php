<?php 
include '..DAO/data_dao.php'; 
session_start();



 $id = $_GET["id"] ;

 $data = new Users() ; 

 $data->deleteUser('users',"id = $id") ;




?>
