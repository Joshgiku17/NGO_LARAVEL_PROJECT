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
    <form action="insert_data.php" method="post">
      <label for="don">Don ID:</label>
      <input type="number" id="don_id" name="don_id" required>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
      <label for="url">URL:</label>
      <input type="text" id="url" name="url" required>
      <label for="ngo_id">NGO ID:</label>
      <input type="text" id="ngo_id" name="ngo_id" required>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
