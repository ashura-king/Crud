<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container my-5">
    <h2>List of Clients</h2>
    <a class="btn btn-primary" href="Create/Create.php" role="button">New client</a> <br>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>phone</th>
          <th>address</th>
          <th>created_at</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "Connect/Connect.php"
        ?>
      </tbody>
    
    </table>
  </div>
  
</body>
</html>