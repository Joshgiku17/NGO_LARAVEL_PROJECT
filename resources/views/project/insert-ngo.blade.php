<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NGO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST['ngo_id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['url']) && isset($_POST['created_by']) && isset($_POST['created_at'])) {
    try {
        $stmt = $conn->prepare("INSERT INTO ngo (ngo_id, name, address, phone, email, url, created_by, created_at) VALUES (:ngo_id, :name, :address, :phone, :email, :url, :created_by, :created_at)");
        $stmt->bindParam(':ngo_id', $_POST['ngo_id']);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':address', $_POST['address']);
        $stmt->bindParam(':phone', $_POST['phone']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':url', $_POST['url']);
        $stmt->bindParam(':created_by', $_POST['created_by']);
        $stmt->bindParam(':created_at', $_POST['created_at']);
        $stmt->execute();
        
        echo "Data inserted successfully";
        header('Location: ngoform.php');
    } catch (Exception $e) {
        die("Error inserting data: " . $e->getMessage());
    }
}
?>
