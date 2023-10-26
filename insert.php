<?php

$name = $_POST['name'];
$age = $_POST['age'];


$conn = new mysqli("localhost", "root", "password", "testing");

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

$sql = "INSERT INTO user_info (Name, Age) VALUES ('$name', '$age')";



if ($conn->query($sql) === true) {
    echo "New record added successfully";
} else {
    echo "Error: " . $conn->error;
}
