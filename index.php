<!DOCTYPE html>
<html lang="en">
<head>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
 	<link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet"> 
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
			margin-top: 7%;
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
			var user = document.getElementById("login_id").value;
			var pass = document.getElementById("login_pass").value;
			var captcha = document.getElementById("login_captchas").value;
			if(user=='')
				{
					document.getElementById("login_ids").innerHTML="* Please fill this";
					return false;
				}
			else
				{
					document.getElementById("login_ids").innerHTML="";
				}
			if(pass=='')
				{
					document.getElementById("login_passs").innerHTML="* Please fill this";
					return false;
				}
			/*if(pass.length<=8 || user.length>=20)
				{
					document.getElementById("login_passs").innerHTML="* Use a passwrod of atleast 8 chracters";
					return false;
				}
			else*/ if(pass.search(/[0-9]/)==-1)
				{
					document.getElementById("login_passs").innerHTML="* Atleast One Number";
					return false;
				}
			else if(pass.search(/[A-Z]/)==-1)
				{
					document.getElementById("login_passs").innerHTML="* Atleast One UPEER CASE";
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
			if(captcha=='')
				{
					document.getElementById("login_captcha").innerHTML="*Please fill the captcha form";
				}
			else
			{
				document.getElementById("login_captchas").innerHTML="";
			}
		}
	</script>
</head>
<body id="grad1">

	<div class="container login">
	  <h2>LOGIN FORM</h2>
	  <ul class="nav nav-tabs">
		<li><a data-toggle="tab" href="#home">FOR ADMIN</a></li>
		<li><a data-toggle="tab" href="#menu1">FOR FACULTY</a></li>
		  <li class="active"><a data-toggle="tab" href="#menu2">FOR STUDENT</a></li>
	  </ul>

	  <div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		 <form action="#" method="post" onSubmit="return validate();">
	  	 <table align="center">
		  	<tr>
		  		<td>Enter Login ID : </td>
		  		<td> <input type="text" name="login_id" id="login_id" autocomplete="off" placeholder="LOGIN ID"><i class="fa fa-user"></i>
		  			<span id="login_ids" class="text-danger" font-weight="bold"></span>
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>Enter Password : </td>
		  		<td> <input type="password" name="pass" id="login_pass" autocomplete="off" placeholder="Password"><i class="fa fa-lock"></i>
		  		<span id="login_passs" class="text-danger" font-weight="bold"></span> </td>
		  	</tr>
		  	<tr>
		  		<td colspan="2" style="padding:0px;padding-left:172px;padding-top:15px"><img src="captcha.php"> </td>
		  	</tr>
		  	<tr>
		  		<td colspan="2" align="center"> <input type="text" name="captcha" id="login_captchas" placeholder="ENTER CAPTCHA">
		  		 <i style="padding-left: 90px;" class="fa fa-random"></i><span id="login_captcha" class="text-danger" font-weight="bold"></span> </td>
		  	</tr>
		  	
		  	<tr>
				<td><b>NEW USER??</b><br>
				<a href="register.php" style="">REGISTER HERE</a></td>
		  		<td align="center"><input onClick="javascript:validate();" type="submit" value="LOGIN"></td>
		  	</tr>
		  </table> 
		 </form>
		</div>
		<div id="menu1" class="tab-pane fade">
			<table align="center">
		  	<tr>
		  		<td>Enter Login ID : </td>
		  		<td> <input type="text" name="login_id" id="login_id" placeholder="LOGIN ID"><i class="fa fa-user"></i>
		  			<span id="login_ids" class="text-danger" font-weight="bold"></span>
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>Enter Password : </td>
		  		<td> <input type="password" name="pass" id="login_pass" placeholder="Password"><i class="fa fa-lock"></i>
		  		<span id="login_passs" class="text-danger" font-weight="bold"></span> </td>
		  	</tr>
		  	<tr>
		  		<td colspan="2" style="padding:0px;padding-left:172px;padding-top:15px"><img src="captcha.php"> </td>
		  	</tr>
		  	<tr>
		  		<td colspan="2" align="center"> <input type="text" name="captcha"  placeholder="ENTER CAPTCHA">
		  		 <i style="padding-left: 90px;" class="fa fa-random"></i></td>
		  	</tr>
		  	
		  	<tr>
				<td><b>NEW USER??</b><br>
				<a href="register.php" style="">REGISTER HERE</a></td>
		  		<td align="center"><input onClick="javascript:validate();" type="submit" value="LOGIN"></td>
		  	</tr>
		  </table> 
		</div>
		<div id="menu2" class="tab-pane fade">
			<form action="#" method="post">
				<table align="center">
				<tr>
					<td>Enter Login ID : </td>
					<td> <input type="text" name="login_id" id="login_id" placeholder="LOGIN ID"><i class="fa fa-user"></i>
						<span id="login_ids" class="text-danger" font-weight="bold"></span>
					</td>
				</tr>
				<tr>
					<td>Enter Password : </td>
					<td> <input type="password" name="pass" id="login_pass" placeholder="Password"><i class="fa fa-lock"></i>
					<span id="login_passs" class="text-danger" font-weight="bold"></span> </td>
				</tr>
				<tr>
					<td colspan="2" style="padding:0px;padding-left:172px;padding-top:15px"><img src="captcha.php"> </td>
				</tr>
				<tr>
					<td colspan="2" align="center"> <input type="text" name="captcha"  placeholder="ENTER CAPTCHA">
					 <i style="padding-left: 90px;" class="fa fa-random"></i></td>
				</tr>
				<tr>
					<td><b>NEW USER??</b><br>
					<a href="register.php" style="">REGISTER HERE</a></td>
					<td align="center"><input onClick="javascript:validate();" type="submit" name="login" value="LOGIN"></td>
				</tr>
				
			  </table> 
			</form>
		</div>
		
		
	  </div>
	</div>

</body>
</html>
