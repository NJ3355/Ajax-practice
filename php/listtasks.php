<?php // sqltest.php

  require_once 'login.php';
  $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);  if ($conn->connect_error) die($conn->connect_error);


  $x = array();

  
  $query  = "SELECT * FROM list";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;

  
  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

   // $name = $row['todoText'];
    $x[$j] = json_decode($row[2]);

   
     
   
    
    
            
  
  

  }

  echo json_encode($x);

  
  $result->close();
  $conn->close();


  
 /* function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }*/
?>
