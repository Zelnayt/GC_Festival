<?php
    include_once("../src/databaseFunctions.php");


function registerUser($firstName,$lastName,$email,$password)
{
    $mysqli = db_connect();
    $query = "INSERT INTO users (firstName,lastName,email,password) VALUES ('$firstName','$lastName','$email','$password')";
    $result = $mysqli->query($query);
    return $result;
}

function getUser($email,$password)
{
    $user = db_getData("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    if ($user->num_rows > 0 )
    {
        // User found, return user data
        return $user;
    }
    else
    {
        return "No user found";
    }
}

?>