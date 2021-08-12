<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
   <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />

    <title>Hello, world!</title>
  </head>
  <body>
    <?php          
    $i=1;
    foreach($data as $row)

     { ?>
    <form method="post">
      <div class="container" >
        <h3>Updated Data</h3>
   <div class="mb-3">
  <label>Name</label>
  <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>">
</div>
<div class="mb-3">
  <label>Email</label>
  <input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>">
  </div>
  <div class="mb-3">
  <label>Mobile</label>
  <input type="text" class="form-control" name="mobile" value="<?php echo $row->mobile; ?>">
  </div>
  <div class="mb-3">
  <label>Gender</label>
  <input type="radio" name="gender" value="<?php echo $row->gender; ?>">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="gender" value="<?php echo $row->gender; ?>">Female
  </div>
  <div class="mb-3">
  <label>Hobbies</label>
  <input type="text" class="form-control" name="hobbies" value="<?php echo $row->hobbies; ?>">
  </div>
  <div class="mb-3">
  <label>Address</label>
  <input type="text" class="form-control" name="address" value="<?php echo $row->address; ?>">
  </div>
  <div class="mb-3">
  <label>City</label>
  <select name="city" value="<?php echo $row->city; ?>">
    <option value="mumbai">mumbai</option>
     <option value="pune">pune</option>
      <option value="nasik">nasik</option>
       <option value="nagpur">nagpur</option>
  </select>
  </div>
  <div class="mb-3">
  <label>Avtar</label>
  <input type="file" class="form-control" name="avtar" value="<?php echo $row->avtar; ?>">
  </div>

    
  <input type="submit" name="update" value="update"/></td>
  
</div>
</form>
<?php } ?>

   

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    
  </body>
</html>