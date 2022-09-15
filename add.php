<html>
<head>

<style>
body {
  background-image: url("bg4.jpg");
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: rgba(7,33,78,255);
    overflow-x: hidden;
    background-attachment: fixed;
}

#stone{
	position: relative;
	left: 40%;
	width: 20%;
    border: 11px solid;
    border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
    border-image-slice: 1;
    padding: 5px;
    background-image: url("Stone.webp");
    color: white;
}

#index{
	position: relative;
	left: 47%;
	color:white;
}


</style>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php" id=index>Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1" id=stone>
		<table width="25%" border="0">
			<tr> 
				<td>Game</td>
				<td><input type="text" name="Game"></td>
			</tr>
			<tr> 
				<td>Type</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr> 
				<td>Rating</td>
				<td><input type="text" name="rating"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	if(isset($_POST['Submit'])) {
		$Game = $_POST['Game'];
		$type = $_POST['type'];
		$rating = $_POST['rating'];
		
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO users(Game,type,rating) VALUES('$Game','$type','$rating')");
	
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
