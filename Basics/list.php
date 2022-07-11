<?php

include 'conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
       <div class="row justify-content-center mt-4">
           <div class="col-sm-8">
             <a href="home.php"><button class="btn btn-primary">Add Info</button></a>
              <table class="table">
                  <thead class="thead">
                      <tr class="tr">
                          <th>StudentId</th>
                          <th>StudentName</th>
                          <th>studentClass</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                   
                     <?php
           
          $qry= "Select * from ardaykle";
      
          $result= $conn->query($qry);
    
          if($result){
              $htmltr = "<tr>";
              while($rw = $result->fetch_assoc()){
            $htmltr .= "<td>" . $rw['Id'] ."</td>";
            $htmltr .= "<td>" . $rw['name'] ."</td>";
            $htmltr .= "<td>" . $rw['class'] ."</td>";
            $link= "home.php?" . "id=" . $rw['Id'] . "&name=" . $rw['name'] . "&class=" . $rw['class'];
            $Deletelink= "operation.php?" ."id= ". $rw['Id'];
            $htmltr .= "<td>" . '<a href="'.$link.'" class="btn btn-primary">Update</a>' ."</td>";
            $htmltr .= "<td>" . '<a href="'.$Deletelink.'" class="btn btn-danger">Delete</a>' ."</td>";
            $htmltr .= "</tr>";
              }
              echo $htmltr;
          }else {
              $conn->error;
          }

          ?>
       

                  </tbody>
              </table>
           </div>
       </div>
   </div>
</body>
</html>

