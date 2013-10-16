<?php
include"config.php"; 
if(isset($_POST['reg'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$tel=$_POST['tel'];
	$paddress=$_POST['paddress'];
	
	if ($_POST['fname']=='' or $_POST['lname']==''or $_POST['gender']=='' or $_POST['tel']=='' or $_POST['paddress']=='') { 
     echo "One or more required fields were left blank. Please fill them in and try again.";
	}
	elseif(!preg_match("/[a-zA-Z0-9]/",$fname)) { //check if First Name is valid
		echo"First Name is not Valid.";
	}
	elseif(!preg_match("/[a-zA-Z0-9]/",$lname)) { //check if Last Name is valid
		echo"Last Name is not Valid.";
	}
	elseif(!preg_match("/[0-9]/",$tel)) { //check if Telephone Number is valid
		echo"Telephone Number is not Valid.";
	}
	else{
		$q2="INSERT INTO customers (fname,lname,gender,telephone,postaddress) VALUES('$fname','$lname','$gender','$tel','$paddress')";
		$r2= mysql_query($q2, $link);
		if($r2){
			echo"Customer has been Registered.";
		}else{
			echo"Database Error.";
		}
	}
}else{
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
<div id="content">
<a href="academic.php"><img src="Images/sch.jpg"  height="100px;"alt="Student Academic" width="100px;"title="Student Academics"></a>
	<a href="finance.php"><img src="Images/pesa.jpg"  height="100px;"alt="Student Finance" width="100px;"title="Student Finance"></a>
	<a href="updates.php"><img src="Images/updates.jpg"  height="100px;"alt="Student updates" width="100px;"title="Student updates"></a>
	<a href="displine.php"><img src="Images/displine.jpg"  height="100px;"alt="Student displine" width="100px;"title="Student displine"></a>
	<a href="studentdetails.php"><img src="Images/student2.jpg"  height="100px;"alt="Student displine" width="100px;"title="studentdetails"></a>
                <form method="post" action="">
                    <fieldset>
                        <legend>Profile</legend>

                          <form>
                    <fieldset>
                        <legend>Profile</legend>
						<table>

                        <form>
                            
                                <tr>
                                <td><label>Admission number:</label></td><td><input type="text" name="admnno"/></td>
								</tr>
								<tr>
                            <td><label>Surname:</label></td><td><input type="text" name="sname"/></td>
							</tr>
							<tr>
                            <td><label>First Name:</label></td><td><input type="text" name="fname"/></td>
							</tr>
							<tr>
                            <td><label>Last Name:</label></td><td><input type="text" name="lname"/></td>
							</tr>
							<tr>
                            <td><label>Date of Admission:</label></td><td><input type="text" name="adm"/></td>
							</tr>
							</table>
							<table>
                            <tr><td><label>Date of birth:</label><label>Day</label><input type="text"  name="day"/><label>Month:</label><input type="text"  name="mon"/><label>Year</label><input type="text"  name="year"/></td>
							</tr>
                            <label>Form</label><select>
                                <option>Form 1</option>
                                <option>Form 2</option>
                                <option>Form 3</option>
                                <option>Form 4</option>

                            </select>

</table>
<label> Gender </label><input type="radio" name="gender" value="male">
							
                            <input type="radio" name="gender" value="female"><br>
                    </fieldset>
                  <br>
				  
                    <fieldset>
                        <legend>Parent Details</legend>
						<table>
						
						<tr>
                        <td><label>Surname:</label></td><td><input type="text" name="psname"/></td>
						</tr>
						<tr>
						<td><label>First Name:</label></td><td><input type="text" name="pfname"/></td>
						</tr>
						<tr>
                        <td><label>Last Name:</label></td><td><input type="text" name="plname"/></td>
						</tr>
						<tr>
                        <td><label>Id no:</label></td><td><input type="text" name="id"/></td>
						</tr>
						<tr>
						<td>
                        <label>Residence:</label></td><td><input type="text" name="psname"/></td>
						</tr>
						<tr>
						<td>
                        <label>Email:</label></td><td><input type="text" name="email"/></td>
						</tr>
						<tr>
						<td>
                        <label>Telephone:</label></td><td><input type="text" name="tel"/></td>
						</tr>
						</table>



                    </fieldset>
					
<input type="submit" name="submit" value="Submit Details"/>
                        
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
