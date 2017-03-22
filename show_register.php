<?php
include('db.php');
$query = "SELECT * FROM Register LEFT JOIN provinces ON Register.id_Register = provinces.PROVINCE_ID";
$result = $conn->query($query);
?>

<html>
<head><title>รายชื่อผู้ลงทะเบียน</title></head>
<body>
<center>
<h1>รายชื่อผู้ลงทะเบียน</h1>
<table border=1 width=90%>
<tr>
<th>#</th>
<th>ชื่อ-นามสกุล</th>
<th>อีเมล</th>
<th>เพศ</th>
<th>ความสนใจ</th>
<th>ที่อยู่</th>
<th>จังหวัด</th>
</tr>
<?php 
while($row = $result->fetch_object()){?>
<tr>
<td align="center"><?php echo $row->id_Register; ?></td>
<td><?php echo $row->name_Register; ?></td>
<td><?php echo $row->email_Register; ?></td>
<td><?php echo $row->sex_Register; ?></td>
<?php if($row->study_Register != ""){?>
<td><?php echo $row->study_Register."<br>".$row->game_Register ?></td>
<?php }else{ ?>
<td><?php echo $row->game_Register ?></td>
<?php } ?>
<td><?php echo $row->address_Register; ?></td>
<td><?php echo $row->PROVINCE_NAME; ?></td>
</tr>
<?php }?>
</table>
</body>
</html>