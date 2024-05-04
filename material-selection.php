<?php 
    include "connection/conn.php";

    $sql = "SELECT Name FROM raw_materials;";
    if($result = mysqli_query($conn, $sql)){
        while($row = mysqli_fetch_assoc($result)){
            echo "<label for='" . $row['Name'] . "' style='display: block;  '>
            ". $row['Name'] ."
            <input type='number' id='". $row['Name'] ."' name='". $row['Name'] ."' onchange='redirectToAddProduct( " . $row['Name'] . ")'>
            </label>";
        }
    }
?>