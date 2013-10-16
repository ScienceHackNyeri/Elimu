<?php
include"dbconnect.php"; 
if(isset($_POST['reg'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$tel=$_POST['tel'];
	$paddress=$_POST['address'];
	
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

<!DOCTYPE html>
<html>
    <head>
        <title>X high school</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div id="header">
            <!--div class="nav">
                <nav>
                    <a href="index.html">Home</a>
                    <a href="" >Finance</a>
                    <a href="">Academics</a>
                    <a href="">News</a>
                </nav>
                
            </div-->

        </div>
        <div>
            <h2>Student details</h2>
            <div>
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

        </div>
        <div>


        </div>
    </body>
</html>
<?}?>
