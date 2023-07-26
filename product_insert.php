<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO tbl_product (name, price,stock,deacription,photo)
VALUES ('$_POST[name]','$_POST[price]','$_POST[stock]','$_POST[deacription]','$filename')";

if ($conn->query($sql) === TRUE) {
  if (copy($tempname, $folder)) {
    echo "อับโหลดรูปได้แล้ว";
  } else {
    echo "อับโหลดรูปไม่ได้";
  }
  echo "New record created successfully";
  header("location: product_show.php"); #เปลี่ยนหน้าอัตโนมัติโดยไม่ต้องกดย้อนกลับ
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>