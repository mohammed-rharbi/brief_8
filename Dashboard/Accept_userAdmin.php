<?php 
include '..DAO/data_dao.php'; 
session_start();
 $id = $_GET["id"] ;
 $data = new Users() ; 

 $UsersData = $data->getUsers('*',"id = $id",'') ;









$Email = $UsersData[0]->getEmail() ;
$Password = $UsersData[0]->getPassword() ;


$dataAdmin = new admins() ; 


$newUser = new admin("",$Email,$Password ,"0") ; 

$dataAdmin->Createadmin($newUser);


 $data->deleteUser('users',"id = $id") ;




?>