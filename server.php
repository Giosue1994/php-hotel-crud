<?php
  include __DIR__ . '/database.php';

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
