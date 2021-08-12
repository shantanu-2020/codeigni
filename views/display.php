<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
    <title>Hello, world!</title>
  </head>
  <body>

    <form method="post" action="<?php echo site_url('Hello/savingdata'); ?>" enctype="multipart/form-data">
      <div class="container" >
        <h3>Add Member Records</h3>
   <div class="mb-3">
  <label>Name</label>
  <input type="text" class="form-control" name="name">
</div>
<div class="mb-3">
  <label>Email</label>
  <input type="text" class="form-control" name="email">
  </div>
  <div class="mb-3">
  <label>Mobile</label>
  <input type="text" class="form-control" name="mobile">
  </div>
  <div class="mb-3">
  <label>Gender</label>
  <input type="radio" name="gender" value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="gender" value="Female">Female
  </div>
  <div class="mb-3">
  <label>Hobbies</label>
  <input type="text" class="form-control" name="hobbies">
  </div>
  <div class="mb-3">
  <label>Address</label>
  <input type="text" class="form-control" name="address">
  </div>
  <div class="mb-3">
  <label>City</label>
  <select name="city">
    <option value="mumbai">mumbai</option>
     <option value="pune">pune</option>
      <option value="nasik">nasik</option>
       <option value="nagpur">nagpur</option>
  </select>
  </div>
  <div class="mb-3">
  <label>Avtar</label>
  <input type="file" class="form-control" name="avtar">
  </div>

    
  <input type="submit" name="register" value="Register Me"/></td>
  
</div>
</form>

   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      
    </script>
  </body>
</html>