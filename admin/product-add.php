<?php
include "C:\\xampp\htdocs\wes\connect.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="prod">
            <label>Product Name</label>
            <a href="adding-prod.php">Add Product</a>
        </div>
        <div class="prod_table">
            <table>
                <thead>
                    <th>id</th>
                    <th>Name</th>
                    <th>status</th>
                </thead>
                <?php
                $query="select * from category";
                $res = mysqli_query($con,$query);
                while($row=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['category']?></td>
                        <td><?php echo $row['status']?></td>
                    </tr>
                    <?php

                }
                ?>
            </table>
        </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>