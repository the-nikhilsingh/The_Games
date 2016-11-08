<html>
	<head>
		<title>User Account</title>
		<style>
			body{
				background-image:url(11.jpg);
				color:white;
				overflow:hidden;
				font-family:"Trebuchet MS", Helvetica, sans-serif;
			}
			
			#head{
				font-size:30px;
			}
			
			#subhead{
				font-size:15px;
			}
			
			.head{
				font-family:"Trebuchet MS", Helvetica, sans-serif;
				font-size:350%;
				position:relative;
				float: right;
			}

			.subhead{
				font-family:"Trebuchet MS", Helvetica, sans-serif;
				font-size:100%;
				position:relative;
				right:-85%;
				top:10%;
			}
				
			.icon{
				height:135px;
				position:relative;
				top:-20px;
				left:0%;
			}
			
			#logout{
				position:relative;
				float: right;
				font-size:15px;
			}
			#logout:hover{
				color:gold;
				transition:0.5s;
				font-size:16px;
			}
		</style>
		<div class="head">The Games</div>
		<div class="subhead">The Ultimate Game Portal</div>
		<a href="Homepage.html"><img class="icon" src="01.jpg"></a><hr>
	</head>
	
	<body>
		<div id="head">
		<div id="logout" onclick="location.href='WelPage.html'"> LOGOUT </div>
			<?php
			$con=mysql_connect("localhost","root","");
			if(!$con){
			  die("Couldn't Connect".mysql_error());
			}
			$select=mysql_select_db("dataset",$con);
			if(!$select){
			  die("Couldn't Select The Database".mysql_error());
			}
			extract($_POST);
			$us=$_POST['username'];
			$pw=$_POST['password'];
			$query = mysql_query("select * from info where password='$password' AND username='$username'", $con);
			$rows = mysql_num_rows($query);
			if ($rows == 1) {
				while($row=mysql_fetch_array($query)){
				  echo "Welcome {$row['Name']} <br />".
						"<hr>";
						?>
		</div>
		<div id="subhead">
		<div style="float:right; "> <?php echo "Email id: {$row['email']} <br />"?> </div>
			<?php
					echo	"</br></br>Your played Games are: </br> {$row['Game_List']} <br />";
				}
			} 
			else {
				header('location:LoginFailed.html');
			}
			mysql_close($con);
			?>
		</div>
	</body>
</html>