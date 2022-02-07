<?php
include "Class/Admin.php";

if (isset($_REQUEST["id"])) {
//    $student = new Admin();
//    $students = $student->loadData($this->STUDENT);
    $studentId = $_SESSION["student"][$_REQUEST["id"]];


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<form action="#" method="post">
    <label>
        <input type="text" name="name" value="<?php echo $studentId['name'] ?>" >
    </label>
    <label>
        <input type="text" name="full-name" value="<?php echo $studentId['full-name'] ?>">
    </label>
    <label>
        <input type="password" name="password" value="<?php echo $studentId['password'] ?>" >
    </label>
    <button>EDIT STUDENT</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST["name"];
    $fullName = $_REQUEST["full-name"];
    $password = $_REQUEST["password"];
    $student = new Admin();
    $student->editStudent($_REQUEST["id"],$name,$fullName,$password);
    header("location:showStudent.php");
}
