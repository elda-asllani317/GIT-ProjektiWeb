<?php
// functions.php

// Lidhja me bazën e të dhënave
function connectDatabase() {
    $host = 'localhost'; // Ndrysho sipas nevojës
    $dbname = 'contact_form'; // Emri i bazës së të dhënave
    $username = 'root'; // Ndrysho sipas nevojës
    $password = ''; // Ndrysho sipas nevojës

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Lidhja me bazën e të dhënave dështoi: " . $e->getMessage());
    }
}

// Krijimi i një kontakti të ri
function createContact($firstName, $lastName) {
    $conn = connectDatabase();
    $sql = "INSERT INTO contacts (first_name, last_name) VALUES (:first_name, :last_name)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['first_name' => $firstName, 'last_name' => $lastName]);
}

// Leximi i të gjithë kontakteve
function readContacts() {
    $conn = connectDatabase();
    $sql = "SELECT * FROM contacts";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Përditësimi i një kontakti
function updateContact($id, $firstName, $lastName) {
    $conn = connectDatabase();
    $sql = "UPDATE contacts SET first_name = :first_name, last_name = :last_name WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['first_name' => $firstName, 'last_name' => $lastName, 'id' => $id]);
}

// Fshirja e një kontakti
function deleteContact($id) {
    $conn = connectDatabase();
    $sql = "DELETE FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
}
?>
