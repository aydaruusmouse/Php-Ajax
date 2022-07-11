<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-sm-8">
            <button class="btn btn-primary">Add User</button>
                 <h1>User Info</h1>
                 <table class="table">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Class</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody class="tbody">
                 
                     </tbody>
                 </table>
            </div>
            <div class="modal" tabindex="-1" id="info-model">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" id="studentForm">
         <div class="form-group">
           <label for="">Studentid</label>
           <input type="text" class="form-control" name="Id" class="Id" id="id">
         </div>
         <div class="form-group">
           <label for="">StudentName</label>
           <input type="text" class="form-control" name="name" class="name" id="name">
         </div>
         <div class="form-group">
           <label for="">StudentClass</label>
           <input type="text" class="form-control" name="class" class="class" id="class">
         </div>
         
        
       </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="btn">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
 integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
 crossorigin="anonymous"></script>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>
 
<script src="test.js"></script>
</body>
</html>