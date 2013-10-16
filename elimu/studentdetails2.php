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

                        <form>
                            <table>
                                <tr>
                                <label>Admission number:</label><input type="text" name="admnno"/></br>
                            <label>Surname:</label><input type="text" name="sname"/><br>
                            <label>First Name:</label><input type="text" name="fname"/><br>
                            <label>Last Name:</label><input type="text" name="lname"/><br>
                            <label>Date of Admission:</label><input type="text" name="adm"/><br>
                            <label> Gender </label><input type="radio" name="gender" value="male">

                            <input type="radio" name="gender" value="female"><br>
                            <label>Date of birth:</label><label>Day</label><input type="text"  name="day"/><label>Month:</label><input type="text"  name="mon"/><label>Year</label><input type="text"  name="year"/>
                            <label>Form</label><select>
                                <option>Form 1</option>
                                <option>Form 2</option>
                                <option>Form 3</option>
                                <option>Form 4</option>

                            </select>


                    </fieldset>
                    <hr>
                    <fieldset>
                        <legend>Parent Details</legend>
                        <label>Surname:</label><input type="text" name="psname"/><br>
                        <label>First Name:</label><input type="text" name="pfname"/><br>
                        <label>Last Name:</label><input type="text" name="plname"/><br>
                        <label>Id no:</label><input type="text" name="id"/><br>
                        <label>Residence:</label><input type="text" name="psname"/><br>
                        <label>Email:</label><input type="text" name="email"/><br>
                        <label>Telephone:</label><input type="text" name="tel"/><br>



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
