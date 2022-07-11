<?php

include'conn.php';


if(isset($_POST['insert'])){
    $StudentId= $_POST['studentId'];
    $StudentName= $_POST['studentName'];
    $StudentClass= $_POST['studentClass'];
//  prepare query
    $query = "Insert into ardaykle(Id, name, class) Values('$StudentId', '$StudentName', '$StudentClass')";
    // excute query
     

    $result= $conn->query($query);
    if($result){
        echo "Data Registred";
    }else{
        $conn->error;
    }
    
}

if(isset($_POST['update'])){
    $StudentId= $_POST['studentId'];
    $StudentName= $_POST['studentName'];
    $StudentClass= $_POST['studentClass'];
//  prepare query
    $query = "UPDATE ardaykle set name='$StudentName', class='$StudentClass' where id='$StudentId'";

             
    // excute query
     

    $result= $conn->query($query);
    if($result){
        echo "Update succesfully";
        header("location: list.php");
    }else{
        $conn->error;
    }
    
}
if(isset($_GET['id'])){
     $id= $_GET['id'];
    
     echo $id;
     $qry= "Delete from ardaykle where id=$id" ;
    
     $natijo= $conn->query($qry);
     if($natijo){
         header("location: list.php");
     }else{
         $conn->error;
     }
  }

?>   

