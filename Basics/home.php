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

<?php
  if(isset($_GET['id'])){
     $id= $_GET['id'];
     $name= $_GET['name'];
     $class= $_GET['class'];
    

  }else{
      $id="";
      $name="";
      $class="";
  }



?>
   <div class="container">
       <div class="row justify-content-center mt-4">
           <div class="col-sm-8">
               <div class="card">
                  <form action="operation.php" method="POST">
                      <div class="form-group">
                          <label for=""> StudentId</label>
                          <input type="text" class="form-control" name="studentId" value="<?php  echo $id ?>" placeholder="Enter Id">
                      </div>
                      <div class="form-group">
                          <label for="">StudentName</label>
                          <input type="text" class="form-control" name="studentName" placeholder="Enter name" value="<?php  echo $name ?>"> 
                      </div>
                      <div class="form-group">
                          <label for="">Class</label>
                          <input type="text" class="form-control" name="studentClass" placeholder="Enter Class" value="<?php  echo $class ?>">
                      </div>
                     <button type="submit" class="btn btn-primary"  name="insert">Save Info</button>
                     <button type="submit" class="btn btn-danger" name="update">Update Info</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</body>
</html>

