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
    <form method="" enctype="multipart/form-data"></form>
   
<div class="container">
  <h2 align="center">Display Records</h2>   

  <h3><a href="<?php echo site_url('Hello/create/display') ?>">Add Member</a></h3>
    <table class="table table-bordered table-striped">
    <thead align="center">
      <tr>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Address</th>
        <th>City</th>
        <th>Avtar</th>
        <th colspan="2">D/U</th>
      </tr>
    </thead>
    <tbody align="center">
      <?php
      $i=1;
      foreach($data as $row)
      {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row->name."</td>";
        echo "<td>".$row->email."</td>";
        echo "<td>".$row->mobile."</td>";
        echo "<td>".$row->gender."</td>";
        echo "<td>".$row->hobbies."</td>";
        echo "<td>".$row->address."</td>";
        echo "<td>".$row->city."</td>";
        echo "<td>".$row->avtar."</td>";
        echo "<td><a href='deletedata?id=".$row->user_id."'><h4 class='btn btn-danger'>Delete</h4></a></td>";
        echo "<td><a href='updatedata?id=".$row->user_id."'><h4 class='btn btn-success'>Update</h4></a></td>";
      echo "</tr>";
      $i++;
    }?>
  </tbody>
  </table>
</form>






      







      
      




   
</body>
    
  </body>
</html>