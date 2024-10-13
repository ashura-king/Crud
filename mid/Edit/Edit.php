<?php
require "Edit_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container my-5">
    <h2>Edit Client</h2>

    <!-- Check if there are error or success messages -->
    <?php if (!empty($errorMessage)): ?>
      <div class="alert alert-danger"><?= $errorMessage; ?></div>
    <?php endif; ?>

    <?php if (!empty($successMessage)): ?>
      <div class="alert alert-success"><?= $successMessage; ?></div>
    <?php endif; ?>

    <form method="post">
      <!-- Hidden input for the client ID -->
      <input type="hidden" name="id" value="<?php echo $id; ?>">

      <div class="row mb-3">
        <label class='col-sm-3 col form-label'>Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" value="<?=$name; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class='col-sm-3 col form-label'>Email</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="email" value="<?=    $email; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class='col-sm-3 col form-label'>Phone</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="phone" value="<?=  $phone; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class='col-sm-3 col form-label'>Address</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="address" value="<?=   $address; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      <div class="col-sm-3 d-grid">
        <a class="btn btn-outline-primary" href="/index.php" role="button">Cancel</a>
      </div>
      
    </form>
  </div>

</body>
</html>
