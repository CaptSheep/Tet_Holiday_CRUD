<?php
if(!isset($_SESSION))
{
    session_start();
}
include "Class/Admin.php";
include "account.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];
    $admin = new Admin();
    if (!empty($name) && !empty($password)){
        $admin->login($name,$password);
    }
    else{
//        echo " Tai khoan hoac mat khau bi trong";
        echo "<script type='text/javascript'>alert(' Tài khoản hoặc mật khẩu đang bị trống');</script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body{
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg,#2980b9, #8e44ad);
            height: 100vh;
            overflow: hidden;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: white;
            border-radius: 10px;
            box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
        }
        .center h1{
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid silver;
        }
        .center form{
            padding: 0 40px;
            box-sizing: border-box;
        }
        form .txt_field{
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
        }
        .txt_field input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }
        .txt_field label{
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .txt_field span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #2691d9;
            transition: .5s;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
            top: -5px;
            color: #2691d9;
        }
        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before{
            width: 100%;
        }
        .pass{
            margin: -5px 0 20px 5px;
            color: #a6a6a6;
            cursor: pointer;
        }
        .pass:hover{
            text-decoration: underline;
        }
        input[type="submit"]{
            width: 100%;
            height: 50px;
            border: 1px solid;
            background: #2691d9;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }
        input[type="submit"]:hover{
            border-color: #2691d9;
            transition: .5s;
        }
        .signup_link{
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: #666666;
        }
        .signup_link a{
            color: #2691d9;
            text-decoration: none;
        }
        .signup_link a:hover{
            text-decoration: underline;
        }

    </style>
</head>
<body>
<form action="#" method="post">
<!--    <input type="text" name="name" placeholder=" Nhap ten tai khoan" id="name">-->
<!--    <input type="password" name="password" placeholder=" Nhap mat khau tai khoan" id="password">-->
<!--    <button> Login </button>-->
<!--</form>-->
    <script>
        let input = document.getElementById("name");
        input.oninvalid = function(event) {
            event.target.setCustomValidity('Username should only contain lowercase letters. e.g. john');
        }
    </script>
<div class="center">
    <h1>Login</h1>
    <form method="post">
        <div class="txt_field">
            <input type="text" required name="name" id="name">
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="password" required name="password" id="password">
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
            Not a member? <a href="register.php">Signup</a>
        </div>
    </form>
</div>
</body>
</html>