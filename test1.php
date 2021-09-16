<?php
session_start();
$uid = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<?php

include_once('connection.php');


$queryr = "SELECT * FROM invoice WHERE user_id='$uid'";
$resultr = mysqli_query($conn,$queryr);


if ($resultr->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>UID</th><th>Date</th></tr>";
  // output data of each row
  while($row = $resultr->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["user_id"]. "</td><td> " . $row["date_ts"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

?>

</body>
</html>