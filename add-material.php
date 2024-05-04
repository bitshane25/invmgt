<?php

    if(isset($_GET['submit'])){

        include "connection/conn.php";
        $name = $_GET['name'];
        $qty = $_GET['qty'];
        $category = $_GET['category'];

        $date = date('Y-m-d');

        $sql = "INSERT INTO raw_materials (Name, Qty , Category , Date) VALUES('$name', $qty, '$category', '$date');";
        $sql .= "INSERT INTO current_materials (Name, Qty , Category , Date) VALUES('$name', $qty, '$category', '$date');";
        mysqli_multi_query($conn, $sql);
        mysqli_close($conn);
        header("Location: add-material.php");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/materials.css">
</head>
<body>
    <div class="container">
        <div class="header">

        </div>
        <!-- Content container -->
        <div>
            <!-- Navigation -->
            <div class="navigation">
                <a href="#">Dashboard</a>
                <a href="materials.php">Raw materials</a>
                <a href="products.php">Products</a>
            </div>
            <!-- Content -->
            <div class="content">
                <h1>Add new material</h1>
                <form action="" method="get">
                    <div class="label">
                        <label for="name">Item Name
                            <input type="text" id="name" name="name" autofocus required>
                        </label>
                    </div>
                    <div class="label">
                        <label for="qty">Qty
                            <input type="number" id="qty" name="qty" required>
                        </label>
                    </div>
                    <div class="label">
                        <label for="category">Category
                            <select name="category" id="unit">
                                <option value="Consumables">Consumables</option>
                                <option value="Marbles">Marbles</option>
                                <option value="Jolin">Jolin</option>
                            </select>
                        </label>
                    </div>
                    <input type="submit" name="submit" value="Add material">
                </form>
            </div>
        </div>
    </div>
</body>
</html>