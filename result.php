<?php

include("conn/mysqlcon.php");
// define variables and set to empty values
$name = $email = $gender = $comment = $address  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  //$name = trim($_POST["name"]);
  //$lastname = test_input($_POST["lastname"]);
  
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
 // $telephonenumber = test_input($_POST["telephonenumber"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name."<br>".$email."<br>".$age."<br>".$address."<br>".$gender."<br>";

//insert data
$sql = "INSERT INTO userprofile(name, age, address, gender) 
VALUES ('$name', '$age', '$address', '$gender')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);//ปิดการconnection

?>