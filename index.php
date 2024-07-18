<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-index">
    <h1>hello in page index </h1>
    <div>
        <h2 class="d-flex">hello welcome in home page</h2>
      <?php  if (! isset($_SESSION["user"])) {
   echo '<button type="submit" class=" btn btn-login"><a href="form.php">login</a></button>';
    # code...
}else{echo '<button type="submit" class=" btn btn-logout"><a href="logout.php">log out</a></button>';}
       ?>
    </div>


</body>
</html>