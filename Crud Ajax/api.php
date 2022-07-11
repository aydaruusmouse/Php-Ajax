<?php


header("Content-type: application/json");
include "conn.php";
//function ReadAll
//Function Insert
// Function Update
// function Delete

$action= $_POST['action'];
function ReadAll($conn){
$data= array();
$message= array();

   $query= "select * from ardaykle";
   $result= $conn->query($query);
   if($result){
       while ($row =$result->fetch_assoc()) {
              $data []= $row;
       }
       $message= array("status"=> true );
   }else{
       $message= array("status"=> false, "data"=> $conn->error);
   }

   echo json_encode($data);
 
}
function ReadStudent_info($conn){
    $data= array();
    $message= array();
    $id= $_POST['id'];
       $query= "select * from ardaykle where id= $id";
       $result= $conn->query($query);
       if($result){
           while ($row =$result->fetch_assoc()) {
                  $data []= $row;
           }
           $message= array("status"=> true );
       }else{
           $message= array("status"=> false, "data"=> $conn->error);
       }
    
       echo json_encode($data);
     
    }
function Insert($conn){
    $id= $_POST['Id'];
    $name= $_POST['name'];
    $class= $_POST['class'];
    $query= "insert into ardaykle(id, name, class) Values('$id', '$name', '$class')";

    $result= $conn->query($query);
    if($result){
        $data= array("status"=> true, "data"=> "registerd data");
    }else{
        $data= array("status"=> false, "data"=> $conn->error);
    }
    echo json_encode($data);
}
function UpdateStudent($conn){
    $id= $_POST['Id'];
    $name= $_POST['name'];
    $class= $_POST['class'];
    $query= "UPDATE ardaykle set name= '$name', class='$class' where id='$id'";

    $result= $conn->query($query);
    if($result){
        $data= array("status"=> true, "data"=> "registerd data");
    }else{
        $data= array("status"=> false, "data"=> $conn->error);
    }
    echo json_encode($data);
}function DeleteStudent($conn){
    $id= $_POST['id'];
   
    $query= "DELETE FROM ardaykle where id= '$id'";

    $result= $conn->query($query);
    if($result){
        $data= array("status"=> true, "data"=> "Deleted data");
    }else{
        $data= array("status"=> false, "data"=> $conn->error);
    }
    echo json_encode($data);
}

if(isset($action)){
    $action($conn); 
}else{
    echo "action is required"; 
}
?>