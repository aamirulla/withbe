<?php
$insert=false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "Aamir#01";

    $con =mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   // echo "Success connecting to the db";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql= "INSERT INTO `signupdetails`.`detailsss` (`name`, `email`, `password`, `date`) VALUES ('$name', '$email', '$password', current_timestamp());";
   // echo $sql;

    if($con->query($sql)==true){
        //echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="outer-box">
        <div class="inner-box">
            <header class="signup-header">
                <?php
                if($insert==true){
                echo "<div class='as'>THANKS FOR SIGNING UP. CHALO AB NIKLO</div>";
                }
                ?>
                <h1>Sign Up</h1>
                <p>It Just Takes 30 Seconds</p>
            </header>
            <main class="signup-body">
                <form action="index.php" method="post">
                    <p>
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Your Name Here" required>
                    </p>
                    <p>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="abc@gmail.com" required>
                    </p> 
                    <p>
                        <label for="pass">Enter New Password</label>
                        <input type="password" name="password" id="pass" placeholder="Enter atleast 8 Characters" required>
                    </p>
                    <p>
                        <input type="submit" id="submit" value="Creat Account">
                    </p>
                </form>
            </main>
            <footer class="signup-footer">
                <p>Already have an Account? <a href="#">Login</a></p>
            </footer>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
