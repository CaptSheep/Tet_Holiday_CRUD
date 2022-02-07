<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once "Service.php";
include "account.php";

class Admin
{
    use Service;

    private $id;
    private $name;
    private $password;
    private $account;

    public function __construct()
    {
    }


    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function setAccount($account): void
    {
        $this->account = $account;
    }

    public function login($name, $password)
    {
        $accounts = $this->loadData($this->ADMIN);
        foreach ($accounts as $account) {
            if ($name == $account["name"] && $password == $account["password"]) {
                $_SESSION["user"] = $account;
                header("location:index.php");
            } else {
//                echo "Tai khoan hoac mat khau sai";
                echo "<script type='text/javascript'>alert(' Tài khoản hoặc mật khẩu bị sai');</script>";
            }
        }
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        header("location:login.php");
    }

    public function deleteStudent($id)
    {
        $user = $this->loadData($this->STUDENT);
        array_splice($user, $id, 1);
        $this->saveData($this->STUDENT, $user);
//        header("location:showStudent.php");
    }
    public function deleteAdmin($id)
    {
        $user = $this->loadData($this->ADMIN);
        array_splice($user, $id, 1);
        $this->saveData($this->ADMIN, $user);
//        header("location:showStudent.php");
    }
    public function addStudent($name, $fullname, $password)
    {
        $list = [
//            "id" => $this->getId(),
            "name" => $name,
            "full-name" => $fullname,
            "password" => $password,
        ];
        $accounts = $this->loadData($this->STUDENT);
        $accounts[] = $list;
        $this->saveData($this->STUDENT, $accounts);
    }
    public function addAdmin($name, $fullname, $password)
    {
        $list = [
            "id" => $this->getId(),
            "name" => $name,
            "full-name" => $fullname,
            "password" => $password,
        ];
        $accounts = $this->loadData($this->ADMIN);
        $accounts[] = $list;
        $this->saveData($this->ADMIN, $accounts);
    }

    public function getId(): int
    {
        $student = $this->loadData($this->STUDENT);
        if (empty($student)) {
            return 1;
        } else {
            $last = $student[count($student) - 1];
            return (int)$last->id + 1;
        }
    }

    public function editStudent($id, $name, $fullname, $password)
    {
        $list = [
            "name" => $name,
            "full-name" => $fullname,
            "password" => $password,
        ];
        $accounts = $this->loadData($this->STUDENT);
        $accounts[$id] = $list;
        $this->saveData($this->STUDENT, $accounts);
    }

    public function editAdmin($id, $name, $fullname, $password)
    {
        $list = [
            "name" => $name,
            "full-name" => $fullname,
            "password" => $password,
        ];
        $accounts = $this->loadData($this->STUDENT);
        $accounts[$id] = $list;
        $this->saveData($this->STUDENT, $accounts);
    }

    public function register($name,$fullname,$password)
    {
        $list = [
            "id" => $this->getId(),
            "name" => $name,
            "full-name" => $fullname,
            "password" => $password,
        ];
        $accounts = $this->loadData($this->ADMIN);
        $accounts[] = $list;
        $this->saveData($this->ADMIN, $accounts);
//        header("location:login.php");
    }
}
