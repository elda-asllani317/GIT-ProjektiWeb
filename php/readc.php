<?php

// Lidhu me databazën
require_once 'db.php';

// Krijo query për të lexuar planet e çmimeve
$sql = "SELECT * FROM pricing_plans";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
}

h1 {
    color: #333;
    text-align: center;
    margin-top: 20px;
}

/* Stili i butonave */
a, button {
    text-decoration: none;
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    display: inline-block;
}

a:hover, button:hover {
    background-color: #0056b3;
}

/* Stili i tabelës */
table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
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
    background-color: #e0e0e0;
}

/* Stili për kartat e çmimeve */
.c-karta {
    text-align: center;
    padding: 40px 10px;
}

.c-tabela {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
}

.c-klasa {
    background: white;
    padding: 20px;
    width: 250px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.c-klasa h3 {
    color: #333;
    margin-bottom: 10px;
}

.c-klasa h2 {
    color: #007BFF;
    font-size: 24px;
    margin: 10px 0;
}

.c-klasa p {
    color: #666;
    margin-bottom: 10px;
}

.c-klasa ul {
    list-style: none;
    padding: 0;
}

.c-klasa ul li {
    padding: 5px 0;
    color: #444;
}

/* Stili për veprimet (Edit, Delete, Read) */
.actions a {
    margin-right: 10px;
    font-size: 14px;
    padding: 5px 10px;
}

.actions a:nth-child(1) {
    background-color: #28a745;
}

.actions a:nth-child(2) {
    background-color: #dc3545;
}

.actions a:nth-child(3) {
    background-color: #6c757d;
}

.actions a:hover {
    opacity: 0.8;
}

    </style>
</head>
<body>
    <h1>Pricing Plans</h1>
    <div style="text-align: center; margin-bottom: 20px;">
    <button id="addNewPlan">Shto Plan të Ri</button>
</div>

    <div style="text-align: center; margin-bottom: 20px;">
        <a href="create.php" style="padding: 10px 20px; background-color: #007BFF; color: white; border-radius: 5px;">Add New Plan</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Plan Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Billing Cycle</th>
            <th>Features</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['plan_name']); ?></td>
            <td><?php echo htmlspecialchars($row['description']); ?></td>
            <td><?php echo htmlspecialchars($row['price']); ?></td>
            <td><?php echo isset($row['billing_cycle']) ? htmlspecialchars($row['billing_cycle']) : "N/A"; ?></td>
            <td>
                <ul>
                    <?php 
                    $features = explode(",", $row['features']);
                    foreach ($features as $feature): ?>
                        <li><?php echo htmlspecialchars(trim($feature)); ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
            <td class="actions">
                <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                <a href="readc.php?id=<?php echo $row['id']; ?>">Read</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h1>The best work solution, for the best price.</h1>
    <div class="c-tabela">
        <?php
        // Rifillo kërkimin pasi kemi përdorur fetch_assoc më parë
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()):
        ?>
        <div class="c-klasa">
            <h3><?php echo htmlspecialchars($row["plan_name"]); ?></h3>
            <p><?php echo htmlspecialchars($row["description"]); ?></p>
            <h2><?php echo htmlspecialchars($row["price"]); ?></h2>
            <p><?php echo isset($row["billing_cycle"]) ? htmlspecialchars($row["billing_cycle"]) : "N/A"; ?></p>
            <form action="payment.php" method="POST">
    <input type="hidden" name="plan_id" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="plan_name" value="<?php echo htmlspecialchars($row['plan_name']); ?>">
    <input type="hidden" name="price" value="<?php echo htmlspecialchars($row['price']); ?>">
    <button type="submit">
        <?php echo isset($row["button_text"]) ? htmlspecialchars($row["button_text"]) : "Subscribe"; ?>
    </button>
</form>

            <ul>
                <?php 
                $features = explode(",", $row["features"]);
                foreach ($features as $feature): ?>
                    <li><?php echo htmlspecialchars(trim($feature)); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endwhile; ?>
    </div>
    <script>
document.getElementById("addNewPlan").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "add_plan.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status === 200) {
            alert("Plani u shtua me sukses!");
            location.reload(); // Rifreskon faqen për të shfaqur të dhënat e reja
        } else {
            alert("Gabim gjatë shtimit të planit.");
        }
    };

    xhr.send();
});
</script>


</body>
</html>

<?php
$conn->close();
?>
