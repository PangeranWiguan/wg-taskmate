<?php
// web-client/header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WG-TaskMate</title>
    <!-- Link to compiled Tailwind CSS -->
    <link rel="stylesheet" href="web-client/assets/css/styles.css">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <div class="logo flex items-center">
                <img src="assets/images/logo.png" alt="WG-TaskMate Logo" class="h-10 mr-2">
                <h1 class="text-xl font-bold">WG-TaskMate</h1>
            </div>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">Tasks</a></li>
                <li><a href="#" class="hover:text-gray-300">Schedule</a></li>
                <li><a href="#" class="hover:text-gray-300">Reports</a></li>
            </ul>
        </nav>
	<i class="fas fa-home"></i> <!-- Solid home icon -->
	<i class="far fa-envelope"></i> <!-- Regular envelope icon -->
	<i class="fab fa-twitter"></i> <!-- Twitter brand icon -->
    </header>