<?php
  include_once 'header.php'
?>
    <div id="content">
     <form action="includes/search.inc.php" method="post">
     <span class="left">Search :&nbsp;</span><select name="dropdown-search" >
                                <option value="group">---Select---</option> 
                                <option value="city">City</option>
                                <option value="bloodgrp">Bloodgroup</option>
                                
                            </select>
        <input type="text" name="dropdown-text" >

        <button type="submit" name="submit" class="button">search</button>
     </form>

    </div>
<?php
    include_once 'footer.php'
?> 