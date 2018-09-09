<!DOCTYPE html>
<html>
<body>
<header>
	<center>
	
	<h1 style="background-color:#ff6347;">Run for ตุ๊ตตู่ กันเถอะ</h1>

	<center>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #177;
    padding: 25px;
    text-align: center;
    font-size: 24px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 20%;
    height:400px; /* only for demonstration, should be removed */
    background: 130;
    padding: 15px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 400px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
<form action="/action_page.php">
  ชื่อ: &nbsp
  <input type="text" name="firstname" value="Mickey">
  &nbsp;&nbsp;
  นามสกุล:
  <input type="text" name="lastname" value="Mouse">
  &nbsp;&nbsp;
  อายุ:
  <input type="number_format" name="age" value="21">
  &nbsp;&nbsp;
  <br><br>
  ที่อยู่:
  <input type="text" name="	address" value="Ratchaburi">
  &nbsp;&nbsp;
  ไซส์เสื้อ:
  <input type="text" name="size" value="">
  &nbsp;&nbsp;
  โรคประจำตัว:
  <input type="text" name="sick" value="">
  &nbsp;&nbsp;
  แพ้ยา:
  <input type="	text" name="medi" value="">
  
  <br><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>