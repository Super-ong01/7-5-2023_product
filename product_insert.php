<?php
include "connect.php";

$sql = "INSERT INTO tbl_product (name, price,stock,deacription)
VALUES ('$_POST[name]','$_POST[price]','$_POST[stock]','$_POST[deacription]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>