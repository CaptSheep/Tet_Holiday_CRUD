<?php
include "Class/Admin.php";
if (isset($_REQUEST["id"])) {
    $admin = new Admin();
    $admin->deleteAdmin($_REQUEST["id"]);
    header("location:showAdmin.php");
}