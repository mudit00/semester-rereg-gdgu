<?php
$database_username = "root";
$database_password = "smahi3003";
$database_host = "127.0.0.1";
$database_name = "REGISTRATION";

$database_link = mysqli_connect($database_host, $database_username, $database_password, $database_name);

if($database_link == false) {
    die("Connection to database could not be established.");
}

$table_students = 'studentsinfo';
$table_courses = 'courses';
$table_grievances = 'grievances';