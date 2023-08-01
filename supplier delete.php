<?php
$id=$_GET['s_id'];
$connect=mysqli_connect("localhost","root","","shop");
//query
$ok=mysqli_query($connect,"delete from suppliers where s_id=$id");
if($ok){
echo "<script>alert('Yes deleted!!')";
header("location:suppliers.php");
}
?>