<?php

$name = "name";
$age = "age";


$conn = new mysqli("localhost", "root", "", "testing");

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

$sql = "INSERT INTO user_info (name, age) VALUES ('$name', '$age')";



if ($conn->query($sql) === true) {
    echo "New record added successfully";
} else {
    echo "Error: " . $conn->error;
}
