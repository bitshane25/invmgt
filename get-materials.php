<?php 
    include "connection/conn.php";

    if(isset($_GET['submit']) && $_GET['search'] != ""){

        $search = $_GET['search'];
        $sql = "SELECT * FROM raw_materials WHERE Name LIKE '%$search%';";
        $result = mysqli_query($conn, $sql);
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Qty</th><th>Category</th><th>Action</th></tr>";
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Qty'] . "</td>";
                echo "<td>" . $row['Category'] . "</td>";
                echo "<td></td>";
                echo "</tr>";
            }
        }else{
            echo "<tr><td colspan='5'>No material/s found</td></tr>";
        }
    }else{

        $sql = "SELECT * FROM raw_materials";
        $result = mysqli_query($conn, $sql);
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Qty</th><th>Category</th><th>Action</th></tr>";
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Qty'] . "</td>";
                echo "<td>" . $row['Category'] . "</td>";
                echo "<td></td>";
                echo "</tr>";
            }
        }else{
            echo "<tr><td colspan='5'>No material/s found</td></tr>";
        }
    }
    echo "</table>";
?>

