

<?php
  include_once 'header.php'

?>
<?php
session_start();

echo '<h1 align="center">welcome back ';
echo $_SESSION['u_id'];
echo'</h1>';

?>
<!-- <h1> To give blood you need neither extra strength nor extra food, and you will save a life.</h1> -->
 

<?php
    include_once 'footer.php'
?> 