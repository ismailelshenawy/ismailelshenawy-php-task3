<?php
$errors = [];
// reciv datd 
$email = $_POST["email"];
$password = $_POST["password"];
// Clean Data
function cleandata($input) {
    return htmlspecialchars(stripcslashes(trim($input)));
}
$email = cleandata($email);
$password = cleandata($password);

echo "<br>";
echo $email . "<br>". $password ;
// validate data 
if (empty($email)) {
    $errors["email"] = "Email is required";
    
}else if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors["email"] = "you must enter true email";
}
if (empty($password)) {
    $errors["password"] = "password is required";
    
}else if (strlen($password) < 8) {
    $errors["password"] = "this is must by longer  8 charter";
    
}

if (count($errors) > 0) {
    session_start();
$_SESSION["errors"] = $errors;
    return header("location: form.php");
}else{
    session_start();
    $_SESSION["user"] = $email;
    return header("location: profile.php");
}
