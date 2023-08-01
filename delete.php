<?php
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","shop");
//query
$ok=mysqli_query($connect,"delete from products where id=$id");
if($ok){
echo "<script>alert('Yes deleted!!')";
header("location:index.php");
}
?>