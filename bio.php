<?php 

if(isset($_POST["btn"])){
    $username = $_POST["user_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $password = $_POST["password"];
}

?>

<h1>Username: <?php if(isset($username)){
    echo $username;
}?></h1>

<h1>Email: <?php if(isset($email)){
    echo $email;
}?></h1>

<h1>Gender: <?php if(isset($gender)){
    echo $gender;
}?></h1>

<h1>Date of Birth: <?php if(isset($dob)){
    echo $dob;
}?></h1>

<h1>Age: <?php if(isset($age)){
    echo $age;
}?></h1>

<h1>Username: <?php if(isset($password)){
    echo $password;
}?></h1>