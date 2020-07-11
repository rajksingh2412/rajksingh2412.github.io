<?php
 session_start();
  include_once 'header.php';
  $username =$_SESSION['u_id'];

?>
    <div id="content">
      <h3>Donor table</h3>
       <div class="request-table">
       <table class="view-table" >
      <thead>
        <tr>
          <th>Donor_id</th>
          <th>Donor_Name</th>
          <th>Donor_Address</th>
          <th>Donor_city</th>
          <th>Donor_bloogroup</th>
          <th>Donor_age</th>
          <th>Donor_gender</th>
          <th>Donor_contact</th>
        </tr>
      </thead>
      <tbody>
        <?php
         include_once 'includes/dbh.inc.php';
        
        $result = mysqli_query($conn ,"SELECT * FROM donor where username='$username'");
        
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row ['donorid']}</td>
              <td>{$row ['dname']}</td>
              <td>{$row ['daddress']}</td>
              <td>{$row ['city']}</td>
              <td>{$row ['bloodgrp']}</td>
              <td>{$row ['age']}</td> 
              <td>{$row ['gender']}</td>
              <td>{$row ['mobile']}</td> 
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     




       <h3>Request table</h3>
       <div class="request-table">
       <table class="view-table" >
      <thead>
        <tr>
          <th>Req_id</th>
          <th>Req_Name</th>
          <th>Req_Address</th>
          <th>Req_city</th>
          <th>Req_bloogroup</th>
          <th>Req_age</th>
          <th>Req_gender</th>
          <th>Req_contact</th>
        </tr>
      </thead>
      <tbody>
        <?php
         include_once 'includes/dbh.inc.php';
        
        $result = mysqli_query($conn ,"SELECT * FROM request where username='$username'");
        
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row ['reqid']}</td>
              <td>{$row ['name']}</td>
              <td>{$row ['address']}</td>
              <td>{$row ['city']}</td>
              <td>{$row ['bloodgrp']}</td>
              <td>{$row ['age']}</td> 
              <td>{$row ['gender']}</td>
              <td>{$row ['mobile']}</td> 
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
  
     <?php 
     //trying to echo the table modification
      echo 
      " <style>
       .view-table td, .view-table th {
       border: 1px solid #ddd;
       padding: 8px;
     }
     
     .view-table tr:nth-child(even){background-color: #f2f2f2;}
     
     .view-table tr:hover {background-color: #ddd;
     }
       
       </style>";
     
     mysqli_close($conn); ?>
       </div>



    </div>
<?php
    include_once 'footer.php'
?> 





<!-- 
      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("test_db", $connector)
        or die("Unable to connect");
  -->
