<html>
<head>
<title>FORM</title>
</style>

<script>  

function fnm(myform)
{
	var firstname=document.myform.firstname.value;  
	if (firstname==null || firstname=="")
  {  
    myform.style.background = "red";
    document.getElementById('firnm').innerHTML ="Please fill the username field";
    return false;  
  }
  else
  {
  	myform.style.background = "green"; 
  }

}
function lnm(myform)
{
	var lastname=document.myform.lastname.value;  
  if(lastname==null || lastname=="")
  {  
    myform.style.background = "red";  
    return false;   
  }
  else
  {
  	myform.style.background = "green"; 
  }
}
function pwd(myform)
{
	var password = document.myform.pwd.value; 
	 if(pwd.length <8 || pwd==null )
  {  
    myform.style.background = "red";
    return false;  
  }  
} 
 
</script>
</head>

<body  style="background-color:#D0D4D3" >
<center><h1>National Workshop on Web Technology.</h1></center>

<form name="myform" action="#" method="post" autocomplete="on" on oninput="x.value=parseInt(a.value)">

<fieldset>
<legend><b>Enter your details</b></legend>

 <table>
  <tr>
    <td><b>First Name:</b></td>
	<td><input type="text" name="firstname" id="firnm" autocomplete="on" autofocus="on" onblur="fnm(this)" ></br></td>
  </tr>
  <tr>
    <td><b>Last Name:</b></td>
	<td><input type="text" name="lastname" value="" autocomplete="on" onblur="lnm(this)" onChange="lnm(this)"></br>
  </tr>
  <tr>
    <td><b>Email:</b></td>
	<td><input type="email" name="email" onblur ="em()"  /></br></td>
  </tr>
  <tr>
    <td><b>Password:</b></td>
	<td><input type="password" name="password"  size="10" maxlength="10" onblur ="pwd()"><input type="text" name="pwd" value="Pwd must be 8 characters" readonly disabled ></br></td>
  </tr>
  <tr>
    <td><b>Date Of Birth:</b></td>
	<td>
		<input type="date" name="date">
	</td>
  </tr>
  <tr>
    <td><b>Mobile Number:</b></td>
	<td><input type="tel" name="mob" onblur ="mob()"></br>
  </tr>
  <tr>
    <td><label ><b>Country:</label></td>
	<td><select name="country" onfocus ="onfoc()" >
	<option value="India">India </option>
	<option value="Canada">Canada</option>
	<option value="Dubai">Dubai </option>
	<option value="Singapore">Singapore</option>
</select></br></td>
  </tr>
  <tr>
    <td><b>Participants:</b></td>
	<td><input type="radio" name="parti"value="Student" checked >Student
<input type="radio" name="parti"value="Faculty">Faculty
<input type="radio" name="parti" value="professional">professional,<br></td>
  </tr>
</table>

</fieldset></br><hr></br>

<center>
	<input type="submit" name="submit" value="Submit">
	<input type="Reset"></br>
</center>
</form>

</body>
</html>

<?php
$c=mysqli_connect("localhost","root","");
if($c)
	{
		if(isset($_POST["submit"]))
			{
				$fn=$_POST['firstname'];
				$ln=$_POST['lastname'];
				$em=$_POST['email'];
				$psd=$_POST['password'];
				$date=$_POST['date'];
				$mob=$_POST['mob'];
				$con=$_POST['country'];
				$prt=$_POST['parti'];
				

				$ins="insert into Registration values('$fn','$ln','$em','$psd','$date','$mob','$con','$prt')";

				mysqli_select_db($c,"Workshop");

				if(mysqli_query($c,$ins))
					{
						echo"<br><script>alert('All the entries are registered successfully');</script><br>";
					}
				else
					{
						echo mysqli_error($c);
					}
			}
			else
				{
					echo mysqli_error($c);
				}
}



mysqli_close($c);
?>
