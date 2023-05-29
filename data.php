<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['lname'];
$number = $_REQUEST['number'];
$con = mysqli_connect("localhost", "root","", "mydb") or die("Error Connection Database");

$q=mysqli_query($con, "insert into
employees(name,email) values
('$name','$email','$number)");

if($q)
{
echo "=============== Record inserted successfully ===================";
}
else
{
echo mysqli_error($con);
}
?>