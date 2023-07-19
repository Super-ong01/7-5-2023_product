<?php
include "connect.php";
$sql = "SELECT * FROM tbl_product WHERE id='$_GET[id]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)
?>

<link rel="stylesheet" href="./styles.css">
<div class = "con">
<form action="product_update.php?id=<?php echo $row[id] ?>"method="post"enctype="multipart/form-data">
ชื่อ <input type = "text" name="name" class="input"value="<?php echo $row[name]; ?>"/><br><br>
ราคา <input type = "int" name="price"value="<?php echo $row[price]; ?>"/><br/><br/>
จำนวน <input type = "int" name="stock"value="<?php echo $row[stock]; ?>"/><br/><br/>
Deacription <input type = "text" name="deacription"value="<?php echo $row[deacription]; ?>"/><br/><br/>

<center><input type = "submit" class="button" value="บันทึกข้อมูลให้Superong"/><center>





</form>
</div>