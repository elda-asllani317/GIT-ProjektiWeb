<?php
include './inc/functionNew.php';
$news = lexoniLajmet();
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela e Lajmeve</title>
    <style>
        /* Stil për trupin e faqes */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Container për të mbajtur përmbajtjen */
        .container {
            width: 80%;
            margin: 20px auto;
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

        /* Tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        /* Rreshti i tabelës */
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Ngjyra për titujt */
        table th {
            background-color: #007bff;
            color: #fff;
        }

        /* Lidhje - butona për veprime */
        a {
            display: inline-block;
            padding: 6px 12px;
            margin: 4px 10px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        /* Buton për veprime të tjera */
        a:hover {
            background-color: #218838;
        }

        /* Butoni i Fshirjes me ngjyrë të kuqe */
        a.delete {
            background-color: #dc3545;
        }

        a.delete:hover {
            background-color: #c82333;
        }

        /* Buton për krijimin e lajmeve */
        .btn-create {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
            text-align: center;
        }

        .btn-create:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

<h1>Tabela e Lajmeve</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulli</th>
            <th>Përmbajtja</th>
            <th>Emri i Fajllit</th>
            <th>Data e Krijimit</th>
            <th>Veprime</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($news as $lajm): ?>
        <tr>
            <td><?php echo $lajm['id']; ?></td>
            <td><?php echo htmlspecialchars($lajm['title']); ?></td>
            <td><?php echo htmlspecialchars($lajm['content']); ?></td>
            <td><?php echo htmlspecialchars($lajm['file_name']); ?></td>
            <td><?php echo $lajm['created_at']; ?></td>
            <td>
                <a href="updateNews.php?id=<?php echo $lajm['id']; ?>">Përditëso</a>
                <a href="deletNews.php?id=<?php echo $lajm['id']; ?>" onclick="return confirm('Jeni të sigurt?');">Fshi</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="createNews.php">Shto Lajm të Ri</a>

</body>
</html>