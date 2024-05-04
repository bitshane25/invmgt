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
        <div class="content_2">
            <div class="navigation">
                <a href="#">Dashboard</a>
                <a href="materials.php" style="background-color: grey; color: white;">Raw materials</a>
                <a href="products.php">Products</a>
            </div>
            <div class="content">
                <div class="search">
                    <button class="btn_add" onclick="addNewMaterial()">Add New Material</button>
                    <form action=""class="search_form" method="get">
                        <input type="text" placeholder="Search" name="search">
                        <input type="submit" value="Search" name="submit">
                    </form>
                </div>
                <div class="material_records">
                    <?php include "get-materials.php";?>
                </div>
            </div>
        </div>
    </div>
    <script>
        function addNewMaterial(){
            window.location.href = "add-material.php";
        }
    </script>
</body>
</html>