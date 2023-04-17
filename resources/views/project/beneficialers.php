<!DOCTYPE html>
<html>
  <head>
    <?php
     include("inclusion.php");
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
    <div> 
      <?php
        if(isseet($_POST['save'])){
            require_once('../models/beneficiary-model.php');
            $insert_ben=new beneficiary();
            echo $insert_ben->save_beneficiary($_POST['names'],$_POST['phone'],$_POST['email'],$_POST['dob']);
        }
      ?>
    </div>
    <form action="" method="post">
      <label for="name">Names:</label>
      <input type="text" id="names" name="names" required>
      <label for="address">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="dob">DOB:</label>
      <input type="date" id="dob" name="dob" required>
      <label for="ngo_id">NGO ID:</label>
      <input type="text" id="ngo_id" name="ngo_id" required>
      <input type="submit" value="Submit" name="save">
    </form>
  </body>
</html>
