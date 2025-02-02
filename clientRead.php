<?php
require_once 'db.php';

// Lexo të gjitha planet nga databaza
$sql = "SELECT * FROM pricing_plans";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cl.css">

    <title>Cmimore</title>
   
</head>
<body>
<a href="./iindex.php"><button>Admin</button></a>
<h1>Subscriptions</h1>

<div class="pricing-table">
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="plan-card">
            <h3><?php echo htmlspecialchars($row["plan_name"]); ?></h3>
            <p><?php echo htmlspecialchars($row["description"]); ?></p>
            <h2><?php echo htmlspecialchars($row["price"]); ?>€</h2>
            <p><?php echo isset($row["billing_cycle"]) ? htmlspecialchars($row["billing_cycle"]) : "N/A"; ?></p>
            <ul>
                <?php 
                $features = explode(",", $row["features"]);
                foreach ($features as $feature): ?>
                    <li><?php echo htmlspecialchars(trim($feature)); ?></li>
                <?php endforeach; ?>
            </ul>
            <form action="payment.php" method="POST">
                <input type="hidden" name="plan_id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="plan_name" value="<?php echo htmlspecialchars($row['plan_name']); ?>">
                <input type="hidden" name="price" value="<?php echo htmlspecialchars($row['price']); ?>">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>

<?php
$conn->close();
?>


