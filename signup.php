<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_signup";  
    
    if(isset($_POST['submit'])){
        $conn = mysqli_connect($server , $username , $password , $dbname);
     
        // if($conn->connect_error){
        //     die("Connection failed: " . $conn->connect_error());
        // }
        // else{
        //     if($_POST){
        //         print_r($_POST);
        //     }
        // }
        
        $name = $_POST['name'];
        $usrname = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];
        
        $sql = "INSERT INTO `signup`(`Name`, `Username`, `Email`, `Password`, `Date`) 
                VALUES ('$name','$usrname','$email','$pass',current_timestamp())";
            
        $run = mysqli_query($conn,$sql);

        if($run){
            print_r($_POST);
            echo "<script> alert('Successful Insertion')</script>";
            echo " Successful Insertion";
        }
        else{
            echo "<script> alert('OOPS' $conn->error)</script>";
        }
    //     if($pass == $cpass){
            
    //     }
    //     else{
    //         echo "<script>alert('Password Confirmation Failed')</script>";
    //     }
        $conn->close();
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP PAGE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background-image: url("https://images.pexels.com/photos/326055/pexels-photo-326055.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        header {
            margin: auto;
            background-color: rgb(28 22 32 / 85%);
            padding: 20px 20px;
            color: white;
        }
        .welcome{
            width: fit-content;
            font-size: 32px;
            padding: 0px 37%;
            color: #f5d8a8;
            text-shadow: 2px 2px 5px orange;
            font-family: 'Dancing Script', cursive;
        }
        .form-area{
            width: 100%;
            height: 600px;  
            color: white;
        }
        .form-sign-up{
            width: 400px;
            height: 500px;
            margin: 30px auto;
            background-color: #351212ad;
            border-radius: 10px;
        } 
        .fields input {
            width: 315px;
            height: 30px;
            margin: 10px 10%;
            border-radius: 5px;
            border-color: snow;
        }
       
        .btn button {
            width: 320px;
            height: 35px;
            margin: 10px 10%;
            padding: 2px 10px;
            font-size: 20px;
            font-weight: bolder;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #1e1a21c7;
            color: beige;
            border-radius: 10px;
            border-color: rgb(159 159 189);
            cursor: pointer;
        }
        .pagename{
            background-color: #0c0cd34a;
            width: auto;
            height: 60px;
            font-family: 'Lobster', cursive;
            font-size: 50px;
            text-align: center;
            border-radius: 10px 10px 0px 0px;
            color: aliceblue;
            text-shadow: 2px 2px 5px orange;
        }
        .login{
            background-color: #0c0cd34a;
            width: auto;
            height: 30px;
            font-family: 'Lobster', cursive;
            font-size: 20px;
            color: aliceblue;
            text-align: center;
            margin-top: 60px;
        }
        .login a{
            text-decoration: none;
            color: aliceblue;
            text-shadow: 2px 2px 5px orange; 
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
        <div class="welcome" width="50">ABHIJEET WELCOMES YOU</div>
        </header>
        <div class="form-area">
            <div class="form-sign-up">
                <form action="" method="POST">
                    <div class="pagename">
                        SIGN UP
                    </div>
                    <div class="fields">
                        <input type="text" size="25" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="fields">
                        <input type="text" size="25" name="username" placeholder="User Name: example_123" required>
                    </div>
                    <div class="fields">
                        <input type="email" size="25" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="fields">
                        <input type="password" size="20" name="password" placeholder="Your Password: example@123" required>
                    </div>
                    <div class="fields">
                        <input type="password" size="20" name="cpassword" placeholder="Confirm Your Password" required>
                    </div>
                    <div class="btn" id="contactbutton">
                        <button type="submit" name="submit">SIGN UP</button>
                    </div>
                    <div class="login fields">
                        Already Registered? Go to:-  <a href="login.php">LOGIN</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>