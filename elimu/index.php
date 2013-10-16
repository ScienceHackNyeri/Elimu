<?php
session_start();
$db=mysql_connect("localhost","root");
mysql_select_db('elimu',$db);	
	
if (isset($_POST['submit'])) {
    // Initialize a session:
    $error = array();//this aaray will store all error messagesz  

    if (empty($_POST['userName'])) 
	{//if the email supplied is empty 
        $error[] = 'You forgot to enter  your username ';
    } else 
	      {           
            $userName = $_POST['userName'];
          }
    if (empty($_POST['Password'])) {
        $error[] = 'Please Enter Your Password ';
    } else 
	{
        $Password = $_POST['Password'];
    }

       if (empty($error))//if the array is empty , it means no error found
    { 
        $query_check_credentials = "SELECT username,password FROM users WHERE username='$userName' AND password='$Password' ";
        $result_check_credentials = @mysql_query($query_check_credentials);
       
		$numrows=@mysql_num_rows($result_check_credentials);
		echo $numrows;
		if($numrows>0) //if Query is successfull 
		{ 
	   $_SESSION['login']='1';
		header('location:adminpanel.php');         

        }
		else
        {             
            $msg_error= 'Either Your username and or Password is Incorrect';
        }

    }  else {       
       echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '	<li>'.$values.'</li>';       
        }
        echo '</ol></div>';
    }
    
    if(isset($msg_error)){
        
        echo '<div class="warning">'.$msg_error.' </div>';
    }
    /// var_dump($error);
    @mysqli_close($dbc);

} // End of the main Submit conditional.
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="Images/logo.png"/>
<title>Elimu App</title>

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
	
		<div style="width: 696px; height: 241px; overflow: hidden;" id="slider">
			<ul style="width: 3480px; margin-left: -2094.69px;">				
				<li style="float: left;"><a href=""><img src="Images/student1.jpg"  height="320px;"alt="Css Template Preview" width="696px;"></a></li>
				<li style="float: left;"><a href=""><img src="Images/student2.jpg" height="320px;" alt="Css Template Preview" width="696px ;"></a></li>
				<li style="float: left;"><a href=""><img src="Images/student3.jpg" height="320px;" alt="Css Template Preview" width="696px;"></a></li>
				<li style="float: left;"><a href=""><img src="Images/student4.jpg" height="320px;" alt="Css Template Preview" width="696px;"></a></li>
				<li style="float: left;"><a href=""><img src="Images/student5.JPG" height="320px;" alt="Css Template Preview" width="696px;"></a></li>
			</ul>
		</div>

<div class="login-form">

	<h1>Sign In</h1>

	<form action="" method="post">

		<input type="text" name="userName" placeholder="Enter UserName" style="margin-left:100px;"><br /><br />
		
		<input type="password" name="Password" placeholder="Enter Password" style="margin-left:100px;"><br />
		
		<input type="submit" value="log in" style="margin-right:13px;" name="submit">
		
	</form>
	
	
	
</div>
</div></div>
<div id="footer">
Copy right &copy <?php echo date('Y');?>
<br/>
Powered by CSK-Dedan kimathi Elimu Group
</div>
</body>
</html>
