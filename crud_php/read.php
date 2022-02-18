<?php include "php/read.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>crud php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <div class="container">
          <div class="box">
          <h4 class="display-4 text-center">Read</h4><hr><br>
          <?php if (isset($_GET['success'])) { ?>
          <div class="alert alert-success" role="alert">
              <?php    echo $_GET['success'];   ?>
     
          </div>
          <?php } ?>
          <?php if (mysqli_num_rows($result)) { ?>
            
         <?php } ?>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>


    
     
    </tr>
  </thead>
  <tbody>
  <?php 
  $i = 0;
  while($rows = mysqli_fetch_assoc($result)){
$i++;

  ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['name']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td> <a href="update.php?id=<?=$rows['id']?>" class="btn btn-success">update</a>
      <td> <a href="php/delete.php?id=<?=$rows['id']?>" class="btn btn-danger">delete</a>

      

      </td>

      

     
     
    </tr>
    <?php } ?>
  </tbody>
</table>

<div class="link-right"> <a href="index.php" class="link-primary">Create</a>

</div>

          </div>
     

      </div>
  
  </body>
</html>