<?php
require_once('../models/beneficiary_model.php');
        if(isset($_POST['save'])){
            echo "click";
            $insert_ben=new beneficiary_model();
            echo $insert_ben->save_beneficiary($_POST['names']);
        }
      ?>
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