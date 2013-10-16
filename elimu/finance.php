

<?php
include"config.php"; 
if(isset($_POST['submit'])){
	$admno=$_POST['admno'];
	$total=$_POST['total'];
	$paid=$_POST['paid'];
	$date=$_POST['date'];



	
		
		$q4="INSERT INTO finance(Total_fee,Fee_paid,Date_paid,Admission_Number) 
		VALUES('".$total."','".$paid."','".$date."','".$admno."')";
		$r4= mysql_query($q4, $bd);
		if($r4){
header("location:finance.php");
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
<title>Fahamisha Mzazi App</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />

<link rel="stylesheet" type="text/css" href="css/jquery.ui.all.css">
	<script src="js/jquery-1.8.0.js"></script>
	<script type="text/javascript" src="js/dice.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true 
			});
		});	
	</script>
</head>

<body style="background:#999999;">



<div class="head">
  <img src="Images/logo.png" style="height:100px; margin-left:45%; margin-top:10px; -moz-border-radius:10px; border-bottom:2px #FF0000 outset; border-left: #FF0000 2px outset; border-right:2px #003300 outset; border-top:#003300 2px solid; box-shadow: 4px 3px 5px 5px  green;" />
 
</div>

        <div id="content" style="background-color:lightgrey;">
		<a href="academic.php"><img src="Images/sch.jpg"  height="100px;"alt="Student Academic" width="100px;"title="Student Academics"></a>
	<a href="finance.php"><img src="Images/pesa.jpg"  height="100px;"alt="Student Finance" width="100px;"title="Student Finance"></a>
	<a href="updates.php"><img src="Images/updates.jpg"  height="100px;"alt="Student updates" width="100px;"title="Student updates"></a>
	<a href="displine.php"><img src="Images/displine.jpg"  height="100px;"alt="Student displine" width="100px;"title="Student displine"></a>
	<a href="studentdetails.php"><img src="Images/student2.jpg"  height="100px;"alt="Student displine" width="100px;"title="studentdetails"></a>
		<br/>
		<h1>Finance details </h1>
		<form method="post" action="">
            <fieldset style="margin-left:200px;margin-right:200px;background-color:lightyellow;">
			<table>
			<tr>
                <td>
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
</select></p><br></td>
				</tr>
                <tr><td>Total fee: <td><input type="text" name="total"/></td>
				</tr>
                <tr><td>Fee paid:</td><td><input type="text" name="paid"/></td>
				</tr>
                
				<tr><td>Date paid:</td><td><input type="text" name="date"/></td></tr>
				</table>
                <br>
				<br>
                 </fieldset>
				 <br><br>
				<p style="margin-left:600px;"> <input type="submit" name="submit"value="Submit"></p>
				 </form>
        </div>
		<div id="footer">
Copy right &copy <?php echo date('Y');?>
<br/>
Powered by CSK-Dedan kimathi Elimu Group
</div>
    </body>
</html>
<?}?>