
<?php
include"config.php"; 
if(isset($_POST['submit'])){
	$admno=$_POST['admno'];
	$category=$_POST['form'];
	$date=$_POST['date'];
	$details=$_POST['details'];

	
		$q5="INSERT INTO displinary(Admission_No,Date,Category,Details) 
		VALUES('".$admno."','".$date."','".$category."','".$details."')";
		$r5= mysql_query($q5, $bd);
		if($r5){
header("location:displine.php");
		}else{
			echo"Database Error.";
		}
	}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="Images/logo.png"/>
<title>Fahimisha Mzazi App</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />

<link rel="stylesheet" type="text/css" href="css/jquery.ui.all.css">
	<script src="js/jquery-1.8.0.js"></script>
	<script type="text/javascript" src="js/dice.js"></script>
	
</head>

<body style="background:#999999;">

<div class="head">


<img src="Images/logo.png" style="height:100px; margin-left:45%; margin-top:10px; -moz-border-radius:10px; border-bottom:2px #FF0000 outset; border-left: #FF0000 2px outset; border-right:2px #003300 outset; border-top:#003300 2px solid; box-shadow: 4px 3px 5px 5px  green;" />

</div>
	<div id="content" style="background-color:lightyellow;"><br/>
	<a href="academic.php"><img src="Images/sch.jpg"  height="100px;"alt="Student Academic" width="100px;"title="Student Academics"></a>
	<a href="finance.php"><img src="Images/pesa.jpg"  height="100px;"alt="Student Finance" width="100px;"title="Student Finance"></a>
	<a href="updates.php"><img src="Images/updates.jpg"  height="100px;"alt="Student updates" width="100px;"title="Student updates"></a>
	<a href="displine.php"><img src="Images/displine.jpg"  height="100px;"alt="Student displine" width="100px;"title="Student displine"></a>
	<a href="studentdetails.php"><img src="Images/student2.jpg"  height="100px;"alt="Student displine" width="100px;"title="studentdetails"></a>
<h2 style="margin:20px;">Student Conduct</h2>
<br/>
<div style="background-color:lightgrey;margin-left:300px;margin-right:300px;">
<form method="post" action="">
<p>Admission Number: <select id="admno" name="admno" style="width:200px;">
<option value="" selected > Select a Admission... </option>
<?php
include"config.php";
$q="SELECT * FROM student";

$r= mysql_query($q, $bd);
while($row=mysql_fetch_array($r)){
echo"<option value='$row[0]'>$row[0]</option>";
}

?>
</select></p><br>

<table style="margin:20px;">
<tr>
<td>
<b>Date :</b>  </td>  <td>
  <input type="text" name="date" />
</td>
</tr>
<tr>
<td>
<b>Category:</b></td><td><input type="text" name="category"  />
</td></tr>
<tr>
<td>
<b>Details : </b></td><td>  <textarea name="details"></textarea> 
  </td>
  </tr>
  </table>

<br />
<input type="submit" name="submit"value="SUBMIT" />
<input type="reset"   value="NEW" />
</form>
</div>
</div>
<div id="footer">
Copy right &copy <?php echo date('Y');?>
<br/>
Powered by CSK-Dedan kimathi Elimu Group
</div>
</body>
</html>
<?}?>
