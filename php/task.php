<?php
// Kontrollo nëse të dhënat janë pranuar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["mainInput"])) {
        $task = $_POST["mainInput"];
        
        // Debugging
        error_log("Task received: " . $task);
        echo "Task received: " . $task;
    } else {
        error_log("No task received.");
        echo "No task received.";
    }
} else {
    error_log("Invalid request method.");
    echo "Invalid request method.";
}
?>
