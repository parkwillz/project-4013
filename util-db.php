<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'parkwill_projectUser', 'WeInThisJawn89!', 'parkwill_project');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
