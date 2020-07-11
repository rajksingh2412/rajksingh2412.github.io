<?php
  include_once 'header.php'
?>
    <div id="form-box">
                <form action="includes/send.inc.php" class="donor" method="POST">
                <fieldset>  
                      <legend>Request For Blood</legend>
                      <!-- <span>Name:&nbsp;&nbsp; &nbsp; &nbsp;</span> -->
                      <input  type="text" name="s_name" placeholder="enter the name of requestee" >
                      <br>
                      <!-- <span>address:&nbsp;&nbsp; &nbsp; &nbsp;</span> -->
                      <input  type="text" name="s_add" placeholder="enter the address of requestee"  >
                      <br>
                      <!-- <span>city:&nbsp; &nbsp; &nbsp; &nbsp;</span> -->
                      <input  type="text" name="s_city" placeholder="enter the city of requestee"  >
                      <br>
                      <!-- <span class="left">Blood Group:&nbsp;</span> -->
                      <select name="s_bloodgrp" >
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
                      <input  type="text" name="s_age" placeholder="enter the age of requestee"  >
                      <br>
                      <!-- <span >Gender:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; -->
                            <select  name="s_gen"  >
                            <option value ="others">Gender</option>
                            <option value ="male">Male</option>
                            <option value ="female">Female</option>
                            </select>
                      </span>
                      <br>
                      <!-- <span >Mobile No:</span> -->
                      <input type="text" name="s_mob" placeholder="enter the mobile of requestee"  >
                      <br>
                      <button type="submit" class="button button1" name="submit">submit</button>
                    </fieldset>
                  </form>
                </div>

<?php
    include_once 'footer.php'
?> 