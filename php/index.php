<?php

include 'db.php';
$sql = "SELECT * FROM pricing_plans";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Pricing Plans</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }

        .actions a {
            margin-right: 10px;
        }

        .actions a:nth-child(1) {
            color: #28a745;
        }

        .actions a:nth-child(2) {
            color: #dc3545;
        }
    </style>