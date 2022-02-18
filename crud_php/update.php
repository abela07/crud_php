<?php include "php/update.php";?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update</title>
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
      <form action="php/update.php" method="POST">

          <h4 class="display-4 text-center">Update</h4><hr><br>
          <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
              <?php    echo $_GET['error'];   ?>
     
          </div>
          <?php } ?>
       <div class="form-group">
       <label for="name">Name</label>
       <input type="name" class="form-control" id="name" value="<?=$row['name']; ?>" name="name" >
    
      </div>
      <div class="form-group">
       <label for="email">Email</label>
       <input type="nemailame" class="form-control" id="email" value="<?=$row['email']; ?>" name="email" >
      </div>
      <input type="text" 
      name="id"
      value="<?=$row['id'] ?>"
      hidden>

      <button type="submit" name="update" class="btn btn-primary">Update</button>
     <a href="read.php" class="link-primary">View</a>
   </form>

      </div>
  
  </body>
</html>