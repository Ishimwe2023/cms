<?php
$id=$_GET['s_id'];
$connect=mysqli_connect("localhost","root","","shop");
//query
$ok=mysqli_query($connect,"truncate table suppliers");
if($ok){
echo "<script>alert('Yes deleted!!')";
header("location:suppliers.php");
}
?>