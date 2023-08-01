<?php
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","shop");
//query
$ok=mysqli_query($connect,"truncate table products");
if($ok){
echo "<script>alert('Yes deleted!!')";
header("location:index.php");
}
?>