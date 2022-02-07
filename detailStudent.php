<?php
include "Class/Admin.php";
if (isset($_REQUEST["id"])){
$admin = $_SESSION["student"][$_REQUEST["id"]];
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
</head>
<body>
    <table>
        <thead>
        <tr>
            <td>NAME</td>
            <td>FULLNAME</td>
            <td>PASSWORD</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($admin as $key):
        ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
