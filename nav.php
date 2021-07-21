<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php include 'links.php' ?>
  </head>
  <body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Sparks Foundation Bank</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/">Website</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="users.php">Customers</a>
          </li>   
          <li class="nav-item active">
            <a class="nav-link" href="history.php">Transaction History</a>
          </li>  
        </ul>
      </div>
    </nav>
</body>
</html>

<?php
include 'connect.php';
?>
