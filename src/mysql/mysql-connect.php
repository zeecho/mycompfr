<?php

  require_once dirname( __FILE__ ) . '/mysql-credentials.php';

  /* Connect to DB */
  mysqli_report( MYSQLI_REPORT_STRICT );
  $conn = new mysqli( HOST, USERNAME, PASSWORD, DB );
   
  if ( $conn->connect_errno ) 
  {
    echo "Failed to connect to MySQL: ({$conn->connect_errno}) {$conn->connect_error}";
  }
  
?>