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
                <h2>Products form</h2>
                <form action="index.php" method="post">
                    <input type="text" name="pname" id="" placeholder="product name">
                    <input type="text" name="price" id="" placeholder="product price">
                    <input type="number" name="quantity" id="" placeholder="product quantity">
                    <button type="submit" name="go" class="btn" >Save</button>
                </form>
            </div>
            <div class="table">
                <h2>All products</h2>
                <table border="2">
                    <tr>
                        <td>p_id</td>
                        <td>p_name</td>
                        <td>p_price</td>
                        <td>quantity</td>
                        <tr>
                        <td colspan="5" class="delete"><a href="delet.php"> <button type="reset" name="delete" class="delete">Delete all</button></a></td><tr>
                    </tr>
                    <?php

                    //connection
            $connect=mysqli_connect("localhost","root","","shop");
            //query
           $qu=mysqli_query($connect,"select * from products");
            //while
            while($data=mysqli_fetch_array($qu)){
                ?>
                <tr>
                        <td><?php echo $data['id']?></td>
                        <td><?php echo $data['p_name']?></td>
                        <td><?php echo $data['p_price']?></td>
                        <td><?php echo $data['quantity']?></td>
                        <td><a href="delete.php?id=<?php echo $data['id']?>"> <button class="btn">Delete</button></a></td>
                       
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
@$n=$_POST['pname'];
@$price=$_POST['price'];
@$q=$_POST['quantity'];
@$btn=$_POST['go'];
if(isset($btn)){
//query
$result=mysqli_query($connect,"insert into products values('','$n','$price','$q','')");
if($result){
    echo "<script>alert('OK ! successfull')</script>";
    header("location:index.php");
}
}

?>