<?php
session_start();
include_once "Class/Admin.php";
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    $accounts = $_SESSION["student"];
} else {
    header("location:login.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body{
            background: url("Background/gradient-1761190__340.jpg");
            background-size: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showAdmin.php">ADMIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showStudent.php">STUDENT</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <?php echo $user["full-name"] ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Information</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </form>
    </div>
</nav>
<!--<a href="addStudent.php">-->
<!--    <button> ADD STUDENTS</button>-->
<!--</a>-->
<!--<table border="1" style="text-align: center" cellpadding="1">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>Full Name</th>-->
<!--        <th>Account</th>-->
<!--        <th>EDIT</th>-->
<!--        <th>DELETE</th>-->
<!--        <th>DETAIL</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($accounts as $key => $account): ?>
<!--        <tr>-->
<!--            <td> --><?php //echo $key + 1 ?><!--</td>-->
<!--            <td> --><?php //echo $account["full-name"] ?><!--</td>-->
<!--            <td> --><?php //echo $account["name"] ?><!--</td>-->
<!--            <td><a href="delete.php?id=--><?php //echo $key ?><!--"  onclick="alert(confirm('A ziu sua o bao zit'))">DELETE STUDENT</a></td>-->
<!--            <td><a href="editStudent.php?id=--><?php //echo $key ?><!--">EDIT STUDENT</a></td>-->
<!--            <td><a href="#">DETAIL</a></td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!---->
<!--    </tbody>-->
<!--</table>-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
