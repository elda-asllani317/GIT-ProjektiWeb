<?php
include './inc/functionNew.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $file_name = $_POST['file_name'];
    
    // Thirrja e funksionit për të krijuar lajmin
    krijoLajm($title, $content, $file_name);
    
    header("Location: readNews.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krijo Lajm të Ri</title>
    <style>
        /* Stil për trupin e faqes */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Container për formularin */
        .container {
            width: 60%;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Titulli */
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Etiketa dhe inputet */
        label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            height: 150px;
        }

        /* Butoni i dërgimit */
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Ngjyra kur butoni është mbi */
        button:hover {
            background-color: #218838;
        }

        /* Stili për lidhjet */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<h1>Krijo Lajm të Ri</h1>
<form method="POST">
    <label for="title">Titulli:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="content">Përmbajtja:</label>
    <textarea name="content" id="content" required></textarea><br>

    <label for="file_name">Emri i Fajllit:</label>
    <input type="text" name="file_name" id="file_name"><br>

    <button type="submit">Krijo Lajm</button>
</form>

</body>
</html>
