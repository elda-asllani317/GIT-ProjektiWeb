<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM pricing_plans WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plan_name = $_POST['plan_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $features = $_POST['features'];

    $sql = "UPDATE pricing_plans 
            SET plan_name='$plan_name', description='$description', price='$price', features='$features' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Update Plan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #218838;
        }

        textarea {
            resize: none;
            height: 80px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h1>Update Plan</h1>
        <label>Plan Name:</label>
        <input type="text" name="plan_name" value="<?php echo $row['plan_name']; ?>" required>
        
        <label>Description:</label>
        <textarea name="description" required><?php echo $row['description']; ?></textarea>
        
        <label>Price:</label>
        <input type="number" step="0.01" name="price" value="<?php echo $row['price']; ?>" required>
        
        <label>Features:</label>
        <textarea name="features" required><?php echo $row['features']; ?></textarea>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>

