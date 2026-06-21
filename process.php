<?php
echo 'Processing...';

// Check for a GET variable
if(isset($_GET['name'])){
    echo 'GET: Your name is '.$GET['name'];
}
// Check for a POST variable
if(isset($_POST['name'])){
    $name = mysqli_rea;_escape_string($conn, $_POST['name']);
    echo 'POST: Your name is '.$POST['name'];
    $query = "INSERT INOT users(name) VALUES('$name')";
    if(mysqli_query($conn,$query)){
        echo 'User Added...';
    } else {
        echo 'Error'. mysqli_error($conn)
    }
}

// Connect to database
$conn = mysqli_connect('localhost','root','123443','ajaxtest');











































