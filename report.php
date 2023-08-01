<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales reports</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="report">
<h2>Sales report</h2>
   </div> 
   <div class="print">
    <button onclick="window.print()" class="print">Print now</button>
   </div>
   <div class="sales_table">
    <table border="4">
        <tr>
            <td>Customer name</td>
            <td>Product name</td>
            <td>Sales price</td>
            <td>Quantity</td>
        </tr>
        <?php
        //connection
        $connect=mysqli_connect("localhost","root","","shop");
        //query
        $ok=mysqli_query($connect,"select c_name,p_name,p_price,quantity from products,customers,sales where sales.p_id=products.id and sales.c_id=customers.c_id;");
        //while loop
        while($data=mysqli_fetch_array($ok)){
            ?>
            <tr>
            <td><?php echo $data['c_name']?></td>
            <td><?php echo $data['p_name']?></td>
            <td><?php echo $data['p_price']?></td>
            <td><?php echo $data['quantity']?></td>
        </tr>
            <?php
        }
        ?>
    </table>
   </div>
</body>
</html>