<?php 
if(isset($_POST["btn"])){
    $username = $_POST["user_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form: Using Php</title>
</head>
<body>
    <h1>Username: <?php if(isset($username)){
        echo $username;
    } ?></h1>
    <h1>Email: <?php if(isset($email)){
        echo $email;
    } ?></h1>
    <h1>Password: <?php if(isset($password)){
        echo $password;
    } ?></h1>
    <form action="" method="POST">
        <label>Username</label><br>
        <input type="text" name="user_name" placeholder="Your Name">
        <br>
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Your Email">
        <br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="submit" value="Submit" name="btn">
    </form>
</body>
</html>

