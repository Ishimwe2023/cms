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
                <h2>Suppliers form</h2>
                <form action="suppliers.php" method="post">
                    <input type="text" name="s_name" id="" placeholder="supplier name">
                    <input type="text" name="address" id="" placeholder="supplier address">
                    <input type="number" name="phone" id="" placeholder="supplier phone">
                    <button type="submit" name="go" class="btn" >Save</button>
                </form>
            </div>
            <div class="table">
                <h2>All suppliers</h2>
                <table border="2">
                    <tr>
                        <td>s_id</td>
                        <td>s_name</td>
                        <td>address</td>
                        <td>phone</td>
                        <tr>
                        <td colspan="5" class="delete"><a href="delet supplier.php"> <button type="reset" name="delete" class="delete">Delete all</button></a></td><tr>
                    </tr>
                    <?php

                    //connection
            $connect=mysqli_connect("localhost","root","","shop");
            //query
           $qu=mysqli_query($connect,"select * from suppliers");
            //while
            while($data=mysqli_fetch_array($qu)){
                ?>
                <tr>
                        <td><?php echo $data['s_id']?></td>
                        <td><?php echo $data['s_name']?></td>
                        <td><?php echo $data['address']?></td>
                        <td><?php echo $data['phone']?></td>
                        <td><a href="supplier delete.php?s_id=<?php echo $data['s_id']?>"> <button class="btn">Delete</button></a></td>
                       
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
@$sn=$_POST['s_name'];
@$a=$_POST['address'];
@$phone=$_POST['phone'];
@$btn=$_POST['go'];
if(isset($btn)){
//query
$result=mysqli_query($connect,"insert into suppliers values('','$sn','$a','$phone')");
if($result){
    echo "<script>alert('OK ! successfull')</script>";
    header("location:suppliers.php");
}
}

?>