<?php
  include "connect.php";
  
  $sql = "SELECT * FROM tbl_product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "$row[name] $row[price] $row[stock] $row[deacription] <br/>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>