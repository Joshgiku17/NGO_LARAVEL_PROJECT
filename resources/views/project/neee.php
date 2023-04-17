<?php
// Establish a database connection
$host = "localhost";
$dbname = "NGO";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// define variables and set to empty values
$ngo_id = $name = $address = $phone = $email = $url = "";

// define error messages array
$errors = array();

// validate form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ngo_id"])) {
    $errors['ngo_id'] = "NGO ID is required";
  } else {
    $ngo_id = test_input($_POST["ngo_id"]);
    // check if NGO ID only contains letters and numbers
    if (!preg_match("/^[a-zA-Z0-9]*$/",$ngo_id)) {
      $errors['ngo_id'] = "Only letters and numbers are allowed for NGO ID"; 
    }
  }

  if (empty($_POST["name"])) {
    $errors['name'] = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $errors['name'] = "Only letters and whitespace are allowed for Name"; 
    }
  }

  if (empty($_POST["address"])) {
    $errors['address'] = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["phone"])) {
    $errors['phone'] = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone number is valid
    if (!preg_match("/^[0-9]{10}$/",$phone)) {
      $errors['phone'] = "Invalid phone number"; 
    }
  }

  if (empty($_POST["email"])) {
    $errors['email'] = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if email address is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Invalid email format"; 
    }
  }

  if (empty($_POST["url"])) {
    $errors['url'] = "URL is required";
  } else {
    $url = test_input($_POST["url"]);
    // check if URL is valid
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
      $errors['url'] = "Invalid URL format"; 
    }
  }

  // if no errors, insert data into database
  if (empty($errors)) {
    try {
      // prepare SQL statement
      $stmt = $conn->prepare("INSERT INTO NGO (ngo_id, name, address, phone, email, url, created_by, updated_by) VALUES (:ngo_id, :name, :address, :phone, :email, :url, :created_by, :updated_by)");
      // bind parameters to statement
      $stmt->bindParam(':ngo_id', $ngo_id);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':address', $address);
      $stmt->bindParam(':phone', $phone);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':url', $url);
      $stmt->bindParam(':created_by', $_POST['created_by']);
      $stmt->bindParam(':updated_by', $_POST['updated_by']);
      // execute statement
      $stmt->execute();
      echo "New record inserted";
    }}
