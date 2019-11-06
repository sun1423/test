<?php
define('ER_DUP_KEY', 1022);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "sunil", "sunil123", "demo");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$color = mysqli_real_escape_string($link, $_REQUEST['color']);
$choice = mysqli_real_escape_string($link, $_REQUEST['choice']);

// Attempt insert query execution
$sql ="INSERT INTO example (name, color, choice) VALUES ('$name', '$color', '$choice')";

if(mysqli_query($link, $sql)){
    echo "$name,  $color,  $choice \n\nRecords added successfully. <a href='insert.html'>Go Back .. </a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
