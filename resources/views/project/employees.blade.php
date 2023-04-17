<!DOCTYPE html>
<html>
  <head>
    <?php
     include("inclusion.php")
    ?>
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
  </head>
  <body>
    <form action="insert-employee.php" method="POST">
      <!-- <label for="emp_id">Employee ID:</label>
      <input type="number" id="emp_id" name="emp_id" required> -->
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="address">Application Date:</label>
      <input type="date" id="application_date" name="application_date" required>
      <label for="url">DOB:</label>
      <input type="date" id="dob" name="dob" required>
      <label for="name">User Name:</label>
      <input type="text" id="username" name="username" required>
      <label for="ngo_id">NGO ID:</label>
      <input type="text" id="ngo_id" name="ngo_id" required>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
