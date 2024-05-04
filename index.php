<?php 

    $username = "";
    $user_not_found = true;

    
    if(isset($_POST['submit'])){
        include './connection/conn.php';
        
        
        $name = $_POST['name'];
        $id_number = $_POST['id_number'];
        $sql = "SELECT * FROM admin WHERE Name = '$name' AND id_no = $id_number";
        $result = mysqli_query($conn, $sql);
        
        
        if(mysqli_num_rows($result) > 0){
            $user_not_found = true;
            $username = "";
            header("Location: ./dashboard.php");
        }else{
            $user_not_found = false;
            $username = $_POST['name'];
        }
        
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
        <style>
            input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            
        </style>
</head>
<body>
    <div class="alert"></div>
    <div class="container">
        <div class="login-form">
            <!-- <div class="circle"><span style="color: white; position: absolute; top: 18px; left: 18px;" class="material-symbols-outlined">engineering</span></div> -->
            <h2>DETALIA AURORA INC.</h2>
            <div class="upper-form">
                <img class="logo" src="./images/logo.jpg" alt="">
                <p>INVENTORY LIST</p>
            </div>
            <div class="lower-form">
                <form action="" method="post">
                    <label>EMPLOYEE NAME</label>
                    <input class="inputs" id="name" type="text" name="name" value="<?php if($username) echo $username;?>"required autofocus autocomplete="off">
                    <label for="id_number">ID NUMBER</label>
                    <input class="inputs" id="id_number" type="number" name="id_number" autocomplete="off" required>
                    <div class="btn">
                        <input class="button" type="submit" value="ENTER" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
        if(!$user_not_found) {
            echo '<script>
                alert("user not found");
            </script>';
        }
    ?>
</body>
</html>