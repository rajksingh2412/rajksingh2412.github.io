<?php
if(isset($_POST['submit'])) {
   
    include_once 'dbh.inc.php';

    $dsearch=mysqli_real_escape_string($conn,$_POST['dropdown-search']);
    $dtext=mysqli_real_escape_string($conn,$_POST['dropdown-text']);

                    $sql = "SELECT * FROM  donor where $dsearch ='$dtext' ;";
                    $result= mysqli_query($conn,$sql);
                    $resultCheck= mysqli_num_rows($result);

                    if($resultCheck == 0){
                      echo"'$dsearch' ='$dtext'";
                       echo "$resultCheck";
                      echo  "<h3>Sorry not found</h3>";
                      //  exit();
                    }
                    else{
                        // if($row = mysqli_fetch_assoc($result)){
                          echo "$resultCheck";
                          echo"'$dsearch' ='$dtext'";

                         
                      echo
                           "
                           <head>
                           <link rel='stylesheet' type='text/css' href='login.css'>
                           </head>
                            <table id='search-table' >
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
                            </thead>";
                           
                          
  
                                                          while( $row = mysqli_fetch_assoc( $result ) ){
                                                            echo
                                                            "
                                                            
                                                            <tbody> 
                                                            <tr>
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
                        echo"
                        </tbody>
                        </table>";
                          echo 
                             "<h3> end is here</h3>";
        }


        echo"
      <style>  
#search-table {
  font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#search-table td, #search-table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#search-table tr:nth-child(even){background-color: #f2f2f2;}

#search-table tr:hover {background-color: #ddd;}

#search-table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>";
        
        
        
                          exit();
                                
                          
                            
                     mysqli_close($conn); 

                        }
                     
            
 else {
    header("Location: ../.php");
    exit();
}
                        