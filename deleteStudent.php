<?php
include "Class/Admin.php";
if (isset($_REQUEST["id"])){
    $student = new Admin();
    $student->deleteStudent($_REQUEST["id"]);
    header("location:showStudent.php");
}