<?php
// header.php
require __DIR__ . '/database/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPress - Online Course</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <img src="image/LOGO.png" alt="EduPress">
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Courses</a>
            <a href="#">Blog</a>
            <a href="#">Pages</a>
            <a href="#">LearnPress Add-On</a>
            <a href="#">Premium Theme</a>
        </nav>
        <div class="nav-right">
            <a href="#" class="btn">Login</a> /
            <a href="#" class="btn">Register</a>
            <img src="image/IconSearch.png" alt="Search" class="search-icon">
        </div>
    </header>
