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
