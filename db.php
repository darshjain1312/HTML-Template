<?php	
	function login($login,$pass)
	{
		$con=mysql_connect("localhost","root","root");
		$db=mysql_select_db("defodil",$con);
		$query=mysql_query("select * from student where Email='$login' && Password='$pass'");
		$mn=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		$grade = $row['Grade'];
		$image = $row['Image'];
		$name = $row['FName'];
		if($mn==1)
		{
			session_start();
			$_SESSION["loginid"]=$login;
			
			$_SESSION["Name"]=$name;
			$_SESSION["grade"]=$grade;
			$_SESSION["pic"]=$image;
			echo("<script>location.href='home.php'</script>");
		}
		else
		{
			echo("<script>alert('WRONG USER NAME AND PASSWORD".$mn."');</script>");
		}
	}
	
?>