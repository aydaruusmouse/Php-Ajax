
 //   if($result){
        //      while($rw = $result->fetch_assoc()){
        //        ?>
        //         <!-- <?php $link= "home.php?" . "id=" . $rw['Id']. "name=".$rw['name']. "class=". $rw['class']; ?>
        //          <?php  echo $link ?> -->
        //        <tr>
                 
                 
        //           <td><?php echo $rw['Id'];   ?></td>
        //            <td><?php echo $rw['name'];   ?></td>
        //            <td><?php echo $rw['class'];   ?></td>
        //           <td><button class="btn btn-primary" name="update">Update</button></td> 
        //           <td><button class="btn btn-danger" name="delete" value="<?php $rw['Id']; ?>">Delete</button></td> 
        //        </tr>
              
           
        //  <?php
        //      }
        //   } else{
        //       $conn->error;
        //   }

        //    ?>


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
     $qry= "Delete from ardaykle where id='$id'" ;
    
     $natijo= $conn->query($qry);
     if($natijo){
         echo "Waad Saartay";
         header("location: list.php");
     }else{
         $conn->error;
     }
  }


