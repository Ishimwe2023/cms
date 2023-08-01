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
                <h2>Customers form</h2>
                <form action="customers.php" method="post">
                    <input type="text" name="c_name" id="" placeholder="customer name">
                    <input type="text" name="phone" id="" placeholder="customer phone">
                    <button type="submit" name="go" class="btn" >Save</button>

                </form>
            </div>
            <div class="table">
                <h2>All customers</h2>
                <table border="2">
                    <tr>
                        <td>c_id</td>
                        <td>c_name</td>
                        <td>c_phone</td>
                        <tr>
                        <td colspan="4"> <a href="delet customer.php"><button type="reset" name="delete" class="btn" >Delete all</button></a></td>
                        </tr>
                    <?php

                    //connection
            $connect=mysqli_connect("localhost","root","","shop");
            //query
           $qu=mysqli_query($connect,"select * from customers");
            //while
            while($data=mysqli_fetch_array($qu)){
                ?>
                <tr>
                        <td><?php echo $data['c_id']?></td>
                        <td><?php echo $data['c_name']?></td>
                        <td><?php echo $data['phone']?></td>
                        <td><a href="customer delete.php?c_id=<?php echo $data['c_id']?>"> <button class="btn">Delete</button></a></td>
                       
                    </tr>
                <?php
            }

                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php
//connection
$connect=mysqli_connect("localhost","root","","shop");
//declaration of variables
@$cn=$_POST['c_name'];
@$phone=$_POST['phone'];
@$btn=$_POST['go'];
if(isset($btn)){
//query
$result=mysqli_query($connect,"insert into customers values('','$cn','$phone')");
if($result){
    echo "<script>alert('OK ! successfull')</script>";
    header("location:customers.php");
}
}

?>