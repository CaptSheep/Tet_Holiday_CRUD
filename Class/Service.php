<?php
if(!isset($_SESSION))
{
    session_start();
}
trait Service
    {
        public string $ADMIN = "admin";
        public string $STUDENT = "student";

        public function saveData($key, $data)
        {
            $_SESSION[$key] = $data;
        }

        public function loadData($key)
        {
            return $_SESSION[$key] ?? [];
        }
    }