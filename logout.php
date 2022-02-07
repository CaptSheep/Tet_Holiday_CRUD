<?php
include "Class/Admin.php";
if (isset($_SESSION["user"])){
$admin = new Admin();
$admin->logout();
}