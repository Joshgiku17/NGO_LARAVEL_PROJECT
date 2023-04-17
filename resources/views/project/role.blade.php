<!DOCTYPE html>
<html>
  <head>
    <title>NGO Form</title>
    <style>
      /* CSS styling for the form */
      form {
        width: 500px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: Arial, sans-serif;
        padding-top:100px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      input[type="text"],
      input[type="email"],
      input[type="tel"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
      }
      input[type="submit"] {
        background-color: #0A2558;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }
      input[type="submit"]:hover {
        background-color:#0A2558;
      }
      .error {
        color: red;
        font-weight: bold;
      }
    </style>
<?php
     include("inclusion.php");
  $host = 'localhost';
  $dbname = 'NGO';
  $user = 'root';
  $password = '';
  
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = array();
  
    if (empty($_POST['role_id'])) {
      $errors[] = 'Role Id is required';
    }
  
    if (empty($_POST['role_of_emp'])) {
      $errors[] = 'role of employee is required';
    }
  
    if (empty($_POST['created_at'])) {
      $errors[] = 'Date is required';
    }
    if (count($errors) === 0) {
      $id = $_POST['role_id'];
      $role = $_POST['role_of_emp'];
      $date = $_POST['created_at'];
  
      $stmt = $db->prepare("INSERT INTO roles (role_id, role_of_emp, created_at) VALUES (:role_id, :role_of_emp, :created_at)");
      $stmt->bindParam(':role_id', $id);
      $stmt->bindParam(':role_of_emp', $role);
      $stmt->bindParam(':created_at', $date);
      $stmt->execute();
      header('Location: role.php');
      exit;
    }
  }
  ?>
  </head>
  <body>
    <form action="" method="POST" class="frm">
      <label for="role_id">Role Id:</label>
      <input type="number" id="role_id" name="role_id" required>
      <label for="role_of_emp">Role of Employee:</label>
      <input type="text" id="role_of_emp" name="role_of_emp" required>
      <label for="address">Created At:</label>
      <input type="date" id="created_at" name="created_at" required> <br> <br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
