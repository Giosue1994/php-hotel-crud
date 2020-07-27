<?php
  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
  }

  $sql = "SELECT * FROM `stanze`";
  $result = $conn->query($sql);

  $rooms = [];

  if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $rooms[] = $row;
    }
  }
  elseif ($result) {
    $rooms = [];
  }
  else {
    echo "query error";
  }

  $conn->close();
?>
