
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
<div id="content">
	<a href="academic.php"><img src="Images/sch.jpg"  height="100px;"alt="Student Academic" width="100px;"title="Student Academics"></a>
	<a href="finance.php"><img src="Images/pesa.jpg"  height="100px;"alt="Student Finance" width="100px;"title="Student Finance"></a>
	<a href="updates.php"><img src="Images/updates.jpg"  height="100px;"alt="Student updates" width="100px;"title="Student updates"></a>
	<a href="displine.php"><img src="Images/displine.jpg"  height="100px;"alt="Student displine" width="100px;"title="Student displine"></a>
	<a href="studentdetails.php"><img src="Images/student2.jpg"  height="100px;"alt="Student displine" width="100px;"title="studentdetails"></a>
	
		<div style="width: 696px; height: 241px; overflow: hidden;" id="slider">
		
			<ul style="width: 3480px; margin-left: -2094.69px;">
<p>&nbsp; &nbsp; &nbsp; &nbsp; 	</p>		
				<li style="float: left;"><a href=""><img src="Images/student1.jpg"  height="320px;"alt="Css Template Preview" width="696px;"></a></li>
				<li style="float: left;"><a href=""><img src="Images/student2.jpg" height="320px;" alt="Css Template Preview" width="696px ;"></a></li>
				<li style="float: left;"><a href=""><img src="Images/student3.jpg" height="320px;" alt="Css Template Preview" width="696px;"></a></li>
				<li style="float: left;"><a href=""><img src="Images/student4.jpg" height="320px;" alt="Css Template Preview" width="696px;"></a></li>
				<li style="float: left;"><a href=""><img src="Images/student5.JPG" height="320px;" alt="Css Template Preview" width="696px;"></a></li>
			</ul>
		</div>


</div>
<div id="footer">
Copy right &copy <?php echo date('Y');?>
<br/>
Powered by CSK-Dedan kimathi Elimu Group
</div>
</body>
</html>
