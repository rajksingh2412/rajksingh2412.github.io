<?php
  include_once 'header.php'
?>
     <div id="form-box">
        <form action="includes/donor.inc.php" class="donor" method="POST">
            <fieldset>
              <legend>Donor Registration:</legend>
              <!-- <span>Name:&nbsp;&nbsp; &nbsp; &nbsp;</span> -->
              <input type="text" name="d_name" placeholder="name of donor">
              <br>
              <!-- <span>address:&nbsp;&nbsp; &nbsp; &nbsp;</span> -->
              <input type="text" name="d_add" placeholder="address of donor">
              <br>
              <!-- <span>city:&nbsp; &nbsp; &nbsp; &nbsp;</span> -->
              <input type="text" name="d_city" placeholder="city of donor">
              <br>
              <!-- <span class="left">Blood Group:&nbsp;</span> -->
              <select name="d_bloodgrp" >
                                <option value="group">Blood Group</option> 
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="O+">O+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                                <option value="O-">O-</option>
                            </select>
                <BR>           
              <!-- <span>Age:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</span> -->
              <input type="text" name="d_age" placeholder="age of donor">
              <br>
              <select name="d_gen" >
                  <option value ="others">Gender</option>
                  <option value ="male">Male</option>
                  <option value ="female">Female</option>
              </select>
              <br>
              <!-- <span>Mobile No:</span> -->
              <input type="text" name="d_mob" placeholder="mobile of donor">
              <br>
              <button type="submit" class="button button1" name="submit">submit</button>
            </fieldset>
          </form>
        </div>
<?php
    include_once 'footer.php'
?> 