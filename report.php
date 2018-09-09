<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
 
<body>
 <table class="table ">
    <thead>
      <tr>
	    <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
		<th>Address</th>
		<th>gender</th>
      </tr>
    </thead>
  
 
<?php
include("conn/mysqlcon.php");
$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	?>
	<tr>
        <td><?php echo $row["userid"];?></td>
        <td><?php echo $row["name"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["age"];?></td>
		<td><?php echo $row["address"];?></td>
		<td><?php echo $row["gender"];?></td>
      </tr>
	<?php
       // echo "userid: " . $row["userid"]. " - Name: " . $row["name"]. " " . $row["email"]." " . $row["age"]." " . $row["address"]." " . $row["gender"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
</table>
</body>
</html>