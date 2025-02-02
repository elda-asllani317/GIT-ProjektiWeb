<?php
// Lidhja me bazën e të dhënave
$dsn = 'mysql:host=localhost;dbname=contact_form';
$username = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo 'Gabim lidhje: ' . $e->getMessage();
}

// Funksioni për të lexuar të dhënat
function lexoniLajmet() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM news ORDER BY created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Funksioni për të krijuar një lajm të ri
function krijoLajm($title, $content, $file_name) {
    global $pdo;
    $sql = "INSERT INTO news (title, content, file_name) VALUES (:title, :content, :file_name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $title, 'content' => $content, 'file_name' => $file_name]);
}

// Funksioni për të përditësuar një lajm
function perditesoLajm($id, $title, $content, $file_name) {
    global $pdo;
    $sql = "UPDATE news SET title = :title, content = :content, file_name = :file_name WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $title, 'content' => $content, 'file_name' => $file_name, 'id' => $id]);
}

// Funksioni për të fshirë një lajm
function fshiLajm($id) {
    global $pdo;
    $sql = "DELETE FROM news WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
}
?>
