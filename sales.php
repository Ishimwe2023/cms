<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock management system</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header"><h2>Welcome in Stock management system</h2></div>
    <div class="row">
        <div class="menu">
            <ol>
                <li><a href="index.php">products</a></li>
                <li><a href="customers.php">customers</a></li>
                <li><a href="suppliers.php">suppliers</a></li>
                <li><a href="sales.php">sales</a></li>
            </ol>
        </div>
        <div class="content">
            <div class="form">
                <h2>Sales form</h2>
                <form action="sales.php" method="post">
                    <input type="text" name="p_id" id="" placeholder="product id">
                    <input type="text" name="c_id" id="" placeholder="customer id">
                    <input type="text" name="price" id="" placeholder="sales price">
                    <button type="submit" name="go" class="btn" >Save</button>
                 <a href="report.php" target="_blank">See reports</a>
                </form>
            </div>
            <div class="table">
                <h2>sales reports</h2>
                
            </div>
        </div>
    </div>
    <div class="reports"></div>
</body>
</html>
<?php
//connection
$connect=mysqli_connect("localhost","root","","shop");
//declaration of variables
@$pid=$_POST['p_id'];
@$cid=$_POST['c_id'];
@$price=$_POST['price'];
@$btn=$_POST['go'];
if(isset($btn)){
//query
$result=mysqli_query($connect,"insert into sales values('','$pid','$cid','$price')");
if($result){
    echo "<script>alert('OK ! successfull')</script>";
    header("location:sales.php");
}
}

?>
