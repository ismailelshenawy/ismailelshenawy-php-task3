<?php
session_start();


if ( isset($_SESSION["user"])) {
    return header("location: profile.php");
    # code...
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head >

<body class="body-form">
  <h1>hello in page form</h1>
    <form action="./handel.php" method="post">
        <div>
            <input type="text" name="email" id="" placeholder="enter your name">
            <div>
                <small style="color:red">
                    <?php
        echo (isset($_SESSION["errors"]["email"])) ? $_SESSION["errors"]["email"]:""?>
                </small>
            </div>
        </div>
        <div>
            <input type="password" name="password" id="" placeholder="enter your password">
            <div>
                <small style="color:red">
                    <?php
        echo (isset($_SESSION["errors"]["password"])) ? $_SESSION["errors"]["password"]:""?>
                </small>
            </div>
        </div>
        <button type="submit" class=" btn btn-login">login</button>
   
    </form>

</body>

</html>