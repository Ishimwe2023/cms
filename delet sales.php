<?php
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","shop");
//query
$ok=mysqli_query($connect,"truncate table sales");
if($ok){
echo "<script>alert('Yes deleted!!')";
header("location:sales.php");
}
?>