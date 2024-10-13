<?php
require "Create_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>shop</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <body>

    <div class="container my-5">
      <h2>New Client</h2>
      
      <form method="post">
       
        <div class="row mb-3">
          <label class='col-sm-3 col form-label'>Name</label>
          <div class="col-sm-6">
            <input type="text"class="form-control" name="name" value="<?php echo $name;?>">
          </div>
        </div>
 
        <div class="row mb-3">
          <label class='col-sm-3 col form-label'>Email</label>
          <div class="col-sm-6">
            <input type="text"class="form-control" name="email" value="<?php echo $email;?>">
        
       <div class="row mb-3">
          <label class='col-sm-3 col form-label'>Phone</label>
          <div class="col-sm-6">
            <input type="text"class="form-control" name="phone" value="<?php echo $phone;?>">
          </div>
        </div>
       
        <div class="row mb-3">
          <label class='col-sm-3 col form-label'>Address</label>
          <div class="col-sm-6">
            <input type="text"class="form-control" name="address" value="<?php echo $address;?>">
          </div>
        </div>
       
        <div class="row mb-3">
       <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/Index.php" role="button">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </body>
  
</body>
</html>