
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<style>
	.profile
	{
		color: #333333;
		height: auto;
		display: flex;
		font-size: 24px;
		box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
		font-family: RobotoMedium;
		font-weight: 500;
		flex-direction: column;
		background-color: #f9f9f9;
	}
	.profilehead
	{
	    color: #333333;
		font-size: 36px;
		font-family: RobotoMedium;
		font-weight: 500;
		padding-left:100px;
	}
	.formimageprofile
	{
		align:center;
		background-color:#6c4ccb;
		padding:20px;
		display:flex;
		margin-top:3%;
		justify-content:center;
		box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.1);
		border-radius: 3px;
	}
	.formheader
	{
		box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.1);
		border-radius: 3px;
	}
	.formdetails
	{
		box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.1);
		border-radius: 3px;
	}
	.formdetails h1,td
	{
		color: #333333;
		font-family: RobotoMedium;
		font-weight: 500;
	}
	.formdetails tr
	{
		cell-padding : 5px;
	}
	table
	{
		margin-left:15%;
	}
	table td
	{
		padding:20px;

	}
	input[type=text]
	{
		padding-left:10px;
	}
	input:focus + i{color:dodgerblue;}
	input:focus
	{
		box-shadow: 0 4px 16px 0 rgba(4,140,227,0.40), 0 6px 30px 0 rgba(4,140,227, 0.19);
	}
	input:hover
	{
		box-shadow: 0 4px 16px 0 rgba(255,0,0,0.40), 0 6px 30px 0 rgba(255,0,0, 0.19);
	}
	input
	{
		border:none;
		box-shadow:  inset 0 0 3px #000000;
		font-size:15px;
	}
</style>
</head>
<body>

	<div id="navbar" style="border-bottom:2px solid red;">
	  <a href="home.php" id="logo"><img src="image/images.jpg" alt="Profile PIc" width="70px" style="border-radius:50%;"></img></a>
	  <div id="navbar-right">
		<div style="float:left; padding:10px;">
			<h4 class="active name" href="#home"><?php echo $row['FName'] ?></h4>
			<h5 class="name"> <?php echo $row['Grade'] ?></h5>
			<h6 style="margin:0px;"><a href="logout.php" style="font-size:12px;">LOGOUT</a></h6>
		</div>
		<div style="float:right;padding:10px;">
			<a href="profile.php"><img src="image/<?php echo $row['Image'] ?>" alt="Profile PIc" width="40px" style="border-radius:50%;"></img></a>
		</div>
	  </div>
	  
	</div>


	<script>
	// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		document.getElementById("navbar").style.padding = "0px 9px";
		document.getElementById("logo").style.fontSize = "25px";
	  } else {
		document.getElementById("navbar").style.padding = "0px 9px";
		document.getElementById("logo").style.fontSize = "35px";
	  }
	}
	</script>

	<div style="clear:both;"></div>
	<div>
		<div class="profile">
			<h1 class="profilehead">Profile</h1>
		</div>
		<div style="margin:0% 8%;">
			<div class="formimageprofile" >
				<img src="image/<?php echo $row['Image'] ?>" alt="Profile PIc" width="70px" style="border-radius:50%;padding:10px 0px;">
			</div>
			<div class="formheader">
				<h1 style="margin-top:0%;text-align:center;padding:15px;color: #333333;font-family: RobotoMedium;font-weight: 500;">Grade : <?php echo $row['Grade'] ?> </h1>
			</div>
			<div class="formdetails">
				<h1>Personal Details</h1>
				<hr>
				<table>
					<tr>
						<td>First Name : </td>
						<td><input type="text" value="<?php echo $row['FName'] ?>" placeholder="NAME" disabled/></td>
					</tr>
					<tr>
						<td>Last Name : </td>
						<td><input type="text" value="<?php echo $row['LName'] ?>" placeholder="LAST NAME" disabled/></td>
					</tr>
					<tr>
						<td>Email : </td>
						<td><input type="text" value="<?php echo $row['Email'] ?>" placeholder="EMAIL" disabled/></td>
					</tr>
					<tr>
						<td>Location : </td>
						<td><input type="text" value="<?php echo $row['Location'] ?>" placeholder="LOCATION" disabled/></td>
					</tr>
					
					<tr>
						<td>Gender : </td>
						<td><input type="text" value="<?php echo $row['Gender'] ?>" placeholder="GENDER" disabled/></td>
					</tr>
					
					<tr>
						<td>Password : </td>
						<td><input type="password" value="<?php echo $row['Password'] ?>" placeholder="PASSWORD" disabled/></td>
					</tr>
					
				</table>
			</div>
		</div>
	</div>

<div style="clear: both;"></div>


</body>
</html>
