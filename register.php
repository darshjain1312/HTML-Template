<!DOCTYPE html>
<html lang="en">
<head>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">\
  	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<style>
		body
		{font-family: 'Laila', serif;}
		td
		{	
			padding: 18px;
		}
		#grad1
		{
		  height: 55px;
		  background-image:url(Starling-Murmur-018371.jpg);
			background-size:cover;
			background-repeat: no-repeat;
		}
		.container
		{
			width: 669px;
			margin-top: 15px;
			margin-bottom: 15px;
		}
		.login
		{
			background-color: white;
			margin-top: 3%;
			margin-bottom:3%;
			box-shadow: 5px 5px 7px 2px rgba(255,0,0,0.50);
		}
		input
		{
			border:none;
			box-shadow:  inset 0 0 3px #000000;
			font-size:15px;
		}
		input[type=text]
		{
			padding-left:40px;
		}
		input[type=password]
		{
			padding-left:40px;
		}
		td
		{
			position:relative;
		}
		td i
		{
			position:absolute;
			left: 25px;
			top:22px;
			padding: 0px 5px;
			color: grey;
		}
		
		input:focus + i{color:dodgerblue;}
		
		input:focus{
		box-shadow: 0 4px 16px 0 rgba(4,140,227,0.40), 0 6px 30px 0 rgba(4,140,227, 0.19);
		}
		
		input:hover{box-shadow: 0 4px 16px 0 rgba(255,0,0,0.40), 0 6px 30px 0 rgba(255,0,0, 0.19);}
		
	</style>
	<script>
		function validate()
		{
			var fname = document.getElementById("first_name").value;
			var mname = document.getElementById("middle_name").value;
			var lname = document.getElementById("last_name").value;
			var enrol_id = document.getElementById("enrol_id").value;
			var login = document.getElementById("login").value;
			var pass = document.getElementById("pass").value;
			var repass = document.getElementById("repass").value;
			var areacode=document.getElementById("area_code").value;
			var areaname=document.getElementById("area_name").value;
			if(fname=='')
				{
					document.getElementById("first_names").innerHTML="*Name Is required";
					return false;
				}
			else
				{
					document.getElementById("first_names").innerHTML="";
				}
			if(lname=='')
				{
					document.getElementById("last_names").innerHTML="*Name Is required";
					return false;
				}
			else
				{
					document.getElementById("last_names").innerHTML="";
				}
			if(enrol_id=='')
				{
					document.getElementById("enroll_ids").innerHTML="*Name Is required";
					return false;
				}
			else
				{
					document.getElementById("enroll_ids").innerHTML="";
				}
			if(user=='')
				{
					document.getElementById("login_id").innerHTML="* Please fill this";
					return false;
				}
			else
				{
					document.getElementById("login_id").innerHTML="";
				}
			if(pass=='')
				{
					document.getElementById("login_passs").innerHTML="* Please fill this";
					return false;
				}
			if(pass.length<=8 || user.length>=20)
				{
					document.getElementById("login_passs").innerHTML="* Use a passwrod of atleast 8 chracters";
					return false;
				}
			else if(pass.search(/[0-9]/)==-1)
				{
					document.getElementById("login_passs").innerHTML="* Atleast One Number";
					return false;
				}
			else if(pass.search(/[A-Z]/)==-1)
				{
					document.getElementById("login_passs").innerHTML="* Atleast One UPEER CASE";
					return false;
				}
			else if(pass.search(/[a-z]/)==-1)
				{
					document.getElementById("login_passs").innerHTML="* Atleast One LOWER CASE";
					return false;
				}
			else if(pass.search(/[!\@\#\$\%\^\&\*\-\=\_\+\;\:]/)==-1)
				{
					document.getElementById("login_passs").innerHTML="* Atleast on symbol must be enter";
					return false;
				}
			else
				{
					document.getElementById("login_passs").innerHTML="";
				}
			if(pass!=repass)
				{
					document.getElementById("repasss").innerHTML="PASSWORD DONT MATCH";
				}
			else
				{
					document.getElementById("repasss").innerHTML="";
				}
			if(areacode=='')
				{
					document.getElementById("area_codes").innerHTML="*Name Is required";
					return false;
				}
			else if(areacode.length<6)
				{
					document.getElementById("area_codes").innerHTML="*Not more than 6 integer";
				}
			else
				{
					document.getElementById("area_codes").innerHTML="";
				}
			if(areaname=='')
				{
					document.getElementById("area_names").innerHTML="*Name Is required";
					return false;
				}
			else
				{
					document.getElementById("area_names").innerHTML="";
				}
		}
	</script>
</head>
<body id="grad1">

	<div class="container login">
	  <h2>REGISTRATION FORM</h2>
	  <h6><a href="index.php">BACK TO LOGIN PAGE</a></h6>
	  <ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">FOR FACULTY</a></li>
		<li><a data-toggle="tab" href="#menu1">FOR STUDENTS</a></li>
		
	  </ul>

	  <div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		 <form action="#" method="post" onSubmit="return validate();"> 
		  <table align="center" style="position: relative;">
		  	<tr>
		  		<td>Enter First Name : </td>
		  		<td> <input type="text" name="admin_first_name" placeholder="First Name"> </td>
		  	</tr>
		  	
		  	<tr>
		  		<td>Enter Last Name : </td>
		  		<td> <input type="text" name="admin_last_name" placeholder="Last Name"> </td>
		  	</tr>
		  	<tr>
		  		<td>Enter Email : </td>
		  		<td> <input type="text" name="ivrs_no" placeholder="Email"> </td>
		  	</tr>
		  	<tr>
		  		<td>Enter Subject : </td>
		  		<td> <input type="text" name="subject" placeholder="Subject"> </td>
		  	</tr>
		  	<tr>
		  		<td>Enter Password : </td>
		  		<td> <input type="password" name="pass" placeholder="Password"> </td>
		  	</tr>
		  	<tr>
		  		<td>Enter Gender:
		  		<span style="color:red;position: absolute;top:13px;right: 2Zpx;">*</span> </td>
		  		<td> <input type="radio" name="gender" value="MALE" aceholder="MALE"><span>&nbsp; MALE&nbsp; </span> 
		  		 <input type="radio" name="gender" value="FEMALE" placeholder="FEMALE"><span>&nbsp;FEMALE</span> 
		  		</td>
		  	</tr>
		  	<tr>
		  		<td colspan="2" align="center"><input onClick="javascript:validate();"  type="submit" value="REGISTER"></td>
		  	</tr>
		  </table> 
			</form>
		</div>
		<div id="menu1" class="tab-pane fade">
		  <form action="#" method="post" enctype="multipart/form-data" onSubmit="return validate();">
			  <table align="center" style="position: relative;">
		  	<tr>
		  		<td>Enter First Name : </td>
		  		<td> <input type="text" name="stu_first_name" placeholder="First Name"> </td>
		  	</tr>
		  	
		  	<tr>
		  		<td>Enter Last Name : </td>
		  		<td> <input type="text" name="stu_last_name" placeholder="Last Name"> </td>
		  	</tr>
		  	<tr>
		  		<td>Enter Email : </td>
		  		<td> <input type="text" name="stu_email" placeholder="Email"> </td>
		  	</tr>
		  	<tr>
		  		<td>Enter Location : </td>
		  		<td> <input type="text" name="stu_location" placeholder="Location"> </td>
		  	</tr>
		  	<tr>
		  		<td>Enter Grade : </td>
		  		<td> <select name="stu_grade" id="grade" class="selectGrade select2"><option value="29">4th Grade</option>
					<option value="5">5th Grade</option>
					<option value="6">6th grade</option>
					<option value="7">7th grade</option>
					<option value="8">8th Grade</option>
					<option value="9">9th Grade</option>
					<option value="10">10th Grade</option>
					<option value="11">11th and 12th</option>
					<option value="11C">11th Grade - Commerce</option>
					<option value="12C">12th Grade - Commerce</option>
					<option value="1">1st Grade</option>
					<option value="2">2nd Grade</option>
					<option value="3">3rd Grade</option>
					<option value="CAT">CAT</option>
					<option value="IAS">IAS</option></select>
				</td>
		  	</tr>
		  	<tr>
		  		<td>Enter Password : </td>
		  		<td> <input type="password" name="stu_pass" placeholder="Password"> </td>
		  	</tr>
		  	<tr>
		  		<td>Enter Gender:
		  		<span style="color:red;position: absolute;top:13px;right: 2Zpx;">*</span> </td>
		  		<td> <input type="radio" name="stu_gender" placeholder="MALE"><span>&nbsp; MALE&nbsp; </span> 
		  		 <input type="radio" name="stu_gender" value="FEMALE" placeholder="FEMALE"><span>&nbsp;FEMALE</span> 
		  		</td>
		  	</tr>
			<tr>
					<td>User Image</td>
					<td><input type="file" name="image" required/></td>
			</tr>
		  	<tr>
		  		<td colspan="2" align="center"><input onClick=" javascript:validate();" type="submit" name="register" value="REGISTER"></td>
		  	</tr>
		  </table> 
			</form>
		</div>
	  </div>
	</div>
	
</body>
</html>
