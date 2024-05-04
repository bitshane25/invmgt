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
        <div class="header"></div>
        <div class="content_2">
            <div class="navigation">
                <a href="#">Dashboard</a>
                <a href="materials.php">Raw materials</a>
                <a href="products.php" style="background-color: grey; color: white;">Products</a>
            </div>
            <div class="content">
                <div>
                    <form action="add-product.php" method="get">
                        <div class="left">
                            
                        </div>
                        <div class="right">
                            <?php include "material-selection.php";?>
                        </div>
                        <div class="btn">
                            <input type="submit" name="submit" value="Create Project">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function redirectToAddProduct( material ){
            let qty = document.getElementById( material.id ).value;
            const xhttp = new XMLHttpRequest();
            xhttp.open("GET", "add-product.php?material=" + material.name + "&qty=" + qty);
            xhttp.send();
        }
    </script>
</body>
</html>