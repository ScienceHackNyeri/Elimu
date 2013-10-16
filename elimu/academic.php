

<?php
include"config.php"; 
if(isset($_POST['submit'])){
	$admno=$_POST['admno'];
	$subject="English";
	$opening=$_POST['engop'];
	$midterm=$_POST['engmid'];
	$final=$_POST['engfi'];
	$total=$_POST['engtotal'];
	$grade=$_POST['enggrade'];



	
		
		$q4="INSERT INTO academics(Admission_No,Subject,Opening,Midterm,Final,Total,Grade) 
		VALUES('".$admno."','".$subject."','".$opening."','".$midterm."','".$final."','".$total."','".$grade."')";
		$r4= mysql_query($q4, $bd);
		if($r4){
header("location:academic.php");
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

<body style="background-color:grey;">



<div class="head">
  <img src="Images/logo.png" style="height:100px; margin-left:45%; margin-top:10px; -moz-border-radius:10px; border-bottom:2px #FF0000 outset; border-left: #FF0000 2px outset; border-right:2px #003300 outset; border-top:#003300 2px solid; box-shadow: 4px 3px 5px 5px  green;" />
 
</div>


        <div id="content"  style="background-color:lightgrey;">
		<a href="academic.php"><img src="Images/sch.jpg"  height="100px;"alt="Student Academic" width="100px;"title="Student Academics"></a>
	<a href="finance.php"><img src="Images/pesa.jpg"  height="100px;"alt="Student Finance" width="100px;"title="Student Finance"></a>
	<a href="updates.php"><img src="Images/updates.jpg"  height="100px;"alt="Student updates" width="100px;"title="Student updates"></a>
	<a href="displine.php"><img src="Images/displine.jpg"  height="100px;"alt="Student displine" width="100px;"title="Student displine"></a>
	<a href="studentdetails.php"><img src="Images/student2.jpg"  height="100px;"alt="Student displine" width="100px;"title="studentdetails"></a>
		<br/>
		<form method="post" action="" style="background-color:lightgrey;font-size:16px;">
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
<div id="contentarea">
</p><br>
</select>
<div style="background-color:lightyellow;margin-right:190px;margin-left:190px;">
                    <table style="border:1px">
                        <tr>
                            <th>Subject</th><th>Opener</th><th>Mid Term</th><th>Final Exam</th><th>Total</th><th>Grade</th>
                        </tr>
                        <tr>
                            <td>English</td><td><input type="text" name="engop"/></td><td><input type="text" name="engmid"/></td><td><input type="text" name="engfi"/></td><td><input type="text" name="engtotal"/></td><td><input type="text" name="enggrade"/></td>
                        </tr>
                        <tr>
                            <td>Kiswahili</td><td><input type="text" name="kisop"/></td><td><input type="text" name="kismid"/></td>
                            <td><input type="text" name="kisfi"/></td><td><input type="text" name="kistotal"/></td><td><input type="text" name="kisgrade"/></td>
                        </tr>
                        <tr>
                            <td>Mathematics</td><td><input type="text" name="mathop"/></td>
                            <td><input type="text" name="mathmid"/></td><td><input type="text" name="mathfi"/></td><td><input type="text" name="mathtotal"/></td><td><input type="text" name="mathgrade"/></td>
                        </tr>
                        <tr>
                            <td>Chemistry</td><td><input type="text" name="chemop"/></td><td><input type="text" name="chemmid"/></td><td><input type="text" name="chemfi"/></td><td><input type="text" name="chemtotal"/></td><td><input type="text" name="chemgrade"/></td>
                        </tr>
                        <tr>
                            <td>Physics</td><td><input type="text" name="phyop"/></td><td><input type="text" name="phymid"/></td><td><input type="text" name="phyfi"/></td><td><input type="text" name="phytotal"/></td><td><input type="text" name="phygrade"/></td>
                        </tr>
                    </table><br><br>
					</div>
					<br>
                   <p style="margin-left:500px;"> <input type="submit" name="submit" value="Input Markss"/></p>
                </form> 
            
        
	</div>
	</div>
		<div id="footer">
Copy right &copy; <?php echo date('Y');?>
<br/>d
Powered by CSK-Dedan kimathi Elimu Group
</div>
    </body>
</html>
<?}?>