


<?php // sqltest.php
  
  require_once 'login.php';
  $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);  if ($conn->connect_error) die($conn->connect_error);

  //echo "Hello";



  if (isset($_POST['postitem']))     
      
  
    $postitem   = get_post($conn, 'postitem');


    
   
    
    $query    = "INSERT INTO list (task) VALUES" .
      "('$postitem')";
    $result   = $conn->query($query);

  	if (!$result) echo "INSERT failed: $query<br>" .
      $conn->error . "<br><br>";


    //$id = mysqli_insert_id($conn);






  


 
  
  
  
  $conn->close();
  
  function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
?>
