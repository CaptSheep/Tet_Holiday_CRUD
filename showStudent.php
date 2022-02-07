<?php
include "Class/Admin.php";
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    $accounts = $_SESSION["student"];
//    header("location:showStudent.php");
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
        table{
            /*background: image(Background/pngtree-futuristic-shape-abstract-background-chemistry-technology-concept-for-website-picture-image_1250295.jpg);*/
            border: 1px solid black;
            padding: 1px;
            text-align: center;
        }
        body {
            background-image: url("Background/gradient-1761190__340.jpg");
            background-color: #cccccc;
            background-size: cover;
        }
    </style>
</head>

<body>
<a href="addStudent.php">
    <button> ADD STUDENTS</button>
</a>
<table border="1">
    <thead>
    <tr>
        <th style="color: black">ID</th>
        <th style="color: black">FULL NAME</th>
        <th style="color: black">NAME</th>
        <th style="color: black">EDIT</th>
        <th style="color: black">DELETE</th>
        <th style="color: black">DETAIL</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($accounts as $key => $account): ?>
        <tr>
            <td style="color: white"> <?php echo $key + 1 ?></td>
            <td style="color: white"> <?php echo $account["full-name"] ?></td>
            <td style="color: white"> <?php echo $account["name"] ?></td>
            <td style="color: white"><a  onclick="return confirm('A ziu sua o bao zit')" href="deleteStudent.php?id=<?php echo $key ?>"  >DELETE STUDENT</a></td>
            <td style="color: white"><a href="editStudent.php?id=<?php echo $key ?>">EDIT STUDENT</a></td>
            <td style="color: white"><a href="#">DETAIL</a></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
<a style="text-align: center" href='index.php' > RETURN TO HOMEPAGE</a>
</body>
</html>