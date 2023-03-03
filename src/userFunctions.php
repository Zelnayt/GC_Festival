<?php
    include_once("../src/databaseFunctions.php");


function registerUser($firstName,$lastName,$email,$phone,$password)
{
    $DB = db_connect();
    $query = "INSERT INTO users (firstName,lastName,email,telefoon,password) VALUES ('$firstName','$lastName','$email','$phone','$password')";
    $result = $DB->query($query);
    return $result;
}

function getUser($email,$password)
{
    $user = db_getData("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    if ($user->rowCount() > 0 )
    {
        // User found, return user data
        return $user;
    }
    else
    {
        return "No user found";
    }
}

function sendOrder($boot,$dagdeel)
{
    // send order to database
    $DB = db_connect();
    $query = "INSERT INTO orders (boot,dagdeel) VALUES ('$boot','$dagdeel')";
    $result = $DB->query($query);
    return $result;
}

function getOrder($email,$password)
{
    $order = db_getData("SELECT * FROM orders");
    if ($order->rowCount() > 0 )
    {
        // User found, return user data
        return $order;
    }
    else
    {
        return "No orders found";
    }
}

?>