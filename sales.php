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
                <table border="2">
                    <tr>
                        <td>id</td>
                        <td>p_id</td>
                        <td>c_id</td>
                        <td>price</td>
                        <tr>
                        <td colspan="5" class="delete"><a href="delet sales.php"> <button type="reset" name="delete" class="delete">Delete all</button></a></td><tr>
                    </tr>
                    <?php

                    //connection
            $connect=mysqli_connect("localhost","root","","shop");
            //query
           $qu=mysqli_query($connect,"select * from sales");
            //while
            while($data=mysqli_fetch_array($qu)){
                ?>
                <tr>
                        <td><?php echo $data['id']?></td>
                        <td><?php echo $data['p_id']?></td>
                        <td><?php echo $data['c_id']?></td>
                        <td><?php echo $data['price']?></td>
                        <td><a href="sales delete.php?id=<?php echo $data['id']?>"> <button class="btn">Delete</button></a></td>
                       
                    </tr>
                <?php
            }

                    ?>
                </table>
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