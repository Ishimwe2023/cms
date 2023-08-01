<?php
$id=$_GET['c_id'];
$connect=mysqli_connect("localhost","root","","shop");
//query
$ok=mysqli_query($connect,"delete from customers where c_id=$id");
if($ok){
echo "<script>alert('Yes deleted!!')";
header("location:customers.php");
}
?>