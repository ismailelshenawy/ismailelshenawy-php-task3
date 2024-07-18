<?php
session_start();
if (! isset($_SESSION["user"])) {
    return header("location: form.php");
    # code...
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-profile">
<h1>hello in page profile</h1>
<h2> welcome :<?php echo $_SESSION["user"]?></h2>
<div>
    <button type="submit" class=" btn btn-logout"><a href="logout.php" >log out</a></button>
</div>
</body>
</html>