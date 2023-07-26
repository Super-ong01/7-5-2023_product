<title>Document</title>
<link rel="stylesheet" href = "styles.css"/>
<center><h1>ong</h1></center>
<center>
<?php
  include "connect.php";
  
  $sql = "SELECT * FROM tbl_product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  <table class="center"> 
    <th>ชื่อ</th>
    <th>ราคา</th>
    <th>จำนวน</th>
    <th>มีอะไรจะบอกม้ายยย</th>
    <th>รูป</th>
    <th>edit</th>
    <th>delete</th>
  <?php
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo"$row[name]"; ?> </td>
      <td><?php echo"$row[price]"; ?> </td>
      <td><?php echo"$row[stock]"; ?> </td>
      <td><?php echo"$row[deacription]"; ?> </td>
      <td><img src="./images/<?php echo $row[photo] ?>" width="200px" />  </td>
      <td><?php echo"<a href='product_edit.php?id=$row[id]'>edit</a>"; ?></td>
      <td><?php echo"<a href='product_del.php?id=$row[id]'>delete</a>"; ?></td>
  </tr>
  <?php
  }
  ?>
  </table>
  <?php
} else {
  echo "0 results";
}

mysqli_close($conn);                              # <table style="border:1px solid#990055">กรอบ style sheet เเบบ in line (solid เส้นทึบ)(tr เเถว)(td คอลัม)(th หัวข้อ)
?>
</center> 