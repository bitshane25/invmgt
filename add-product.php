<?php 
    include "connection/conn.php";
    
    if(isset($_GET['submit'])){
        $update = "UPDATE raw_materials 
        JOIN current_materials ON raw_materials.ID = current_materials.ID
        SET raw_materials.Qty = current_materials.Qty";
        mysqli_query($conn, $update);
        mysqli_close($conn);
        header("Location: products.php");
        exit();
    }else{

        $material = $_GET['material'];
        $qty = $_GET['qty'];

        // Get qty of specified material
        $get = "SELECT * FROM raw_materials WHERE Name = '$material'";
        if($result = mysqli_query($conn, $get)){
            $row = mysqli_fetch_assoc($result);
            $material_qty = $row['Qty'];
        }
    
        // Update material
        if(isset($_GET['material']) && $qty != ""){
            $sql = "UPDATE current_materials SET Qty = $material_qty - $qty WHERE Name = '$material'";
            mysqli_query($conn, $sql);
        }else if($qty == ""){        
            $sql = "UPDATE current_materials SET Qty = $material_qty WHERE Name = '$material'";
            mysqli_query($conn, $sql);
        }
        mysqli_close($conn);
    }
    
    ?>