<!DOCTYPE html>
<html>
  <head>
  <title>Signup page</title>
    <link rel="stylesheet" href="style1.css">
    <style>
  <?php
  // Set up a PDO database connection
  $host = 'localhost';
  $dbname = 'NGO';
  $user = 'root';
  $password = '';
  
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate the form data
    $errors = array();
  
    if (empty($_POST['fname'])) {
      $errors[] = 'First name is required';
    }
  
    if (empty($_POST['lname'])) {
      $errors[] = 'Last name is required';
    }
  
    if (empty($_POST['email'])) {
      $errors[] = 'Email address is required';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Invalid email address';
    }
  
    if (empty($_POST['password'])) {
      $errors[] = 'Password is required';
    }
  
    // If there are no errors, insert the data into the database
    if (count($errors) === 0) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      $stmt = $db->prepare("INSERT INTO users (fname, lname, email, password) VALUES (:fname, :lname, :email, :password)");
      $stmt->bindParam(':fname', $fname);
      $stmt->bindParam(':lname', $lname);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', $password);
      $stmt->execute();
  
      // Redirect to a success page
      header('Location: login.html');
      exit;
    }
  }
  ?>
    </style>
  </head>
  <body>
    <form class="login-frm" action="" method="POST">
    <div class="login-box">
      <h2>creating Account</h2>
        <label for="first name">Fund Type Id</label>
        <input type="number" id="fund_type_id" name="fnafund_type_idme" placeholder="Enter Fund Type Id"> <br>
        <label for="last name">Fund Type name</label>
        <input type="text" id="fund_type_name" name="fund_type_name" placeholder="Enter Fund Type name"> <br>
        <label for="email">created At </Address></label>
        <input type="date" id="created_at" name="created_at" placeholder="Enter date of creation "> <br>
        <input type="submit" value="Submit">
       
    </div>
    </form>
  </body>
</html>
