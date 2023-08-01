<?php
$id=$_GET['c_id'];
$connect=mysqli_connect("localhost","root","","shop");
//query
$ok=mysqli_query($connect,"truncate table customers");
if($ok){
echo "<script>alert('Yes deleted!!')";
header("location:customers.php");
}
?>