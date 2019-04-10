<?php

session_start();

//varijable

$username="";
$email="";

$errors = array();
//konekcija

$db = mysqli_connect('localhost', 'root', 'logreg') or die ('could connect to database');

//registracija korisnika

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//validacija forme

if(empty($username)) {array_push($errors, "Username is requared")};
if(empty($email)) {array_push($errors, "Email is requared")};
if(empty($password_1)) {array_push($errors, "Password is requared")};
if(password_1 != password_2) {array_push($errors, "Password do not match")};

//postojeci korisnik

$user_check_query = "SELECT * FROM user WHERE username = '$username' or 'email' LIMIT 1";

$results =  mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['username'] === $username){array_push($errors, "Username already exists");}
    if($user['email'] === $email){array_push($errors, "This email id already has a registred username");}
}
//registracija errors
    if(count($errors)== 0){
        $password = md5($password_1);
        $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        header('location : index.php');

    }

?>



























?>