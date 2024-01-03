<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="395" border="1">
    <tr>
      <td width="39"><div align="center">Full Name</div></td>
      <td width="48"><div align="center">Email</div></td>
      <td width="27"><div align="center">Mobileno</div></td>
	<td></td>
    </tr>
	<?php
include("connection.php");
$qry=mysql_query("select * from user");
	if(mysql_num_rows($qry)>0)
	{
		while ($row=mysql_fetch_array($qry))
		{

?>
			<tr>
			  <td><div align="center"><?php echo $row['fname'];?></div></td>
			  <td><div align="center"><?php echo $row['email'];?></div></td>
			  <td><div align="center"><?php echo $row['mobno'];?></div></td>
			   <td width="60" ><div align="center"><a href="#">Delete</a></div></td>
			</tr>
<?php
		}
	}
?>
  </table>
</form>

</body>
</html>
