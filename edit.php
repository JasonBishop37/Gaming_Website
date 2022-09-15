<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$Game=$_POST['Game'];
	$type=$_POST['type'];
	$rating=$_POST['rating'];
		
	$result = mysqli_query($mysqli, "UPDATE users SET Game='$Game',type='$type',rating='$rating' WHERE id=$id");
	
	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$Game = $user_data['Game'];
	$type = $user_data['type'];
	$rating = $user_data['rating'];
}
?>
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
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php" id=index>Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php" id=stone>
		<table border="0">
			<tr> 
				<td>Game</td>
				<td><input type="text" name="Game" value=<?php echo $Game;?>></td>
			</tr>
			<tr> 
				<td>Type</td>
				<td><input type="text" name="type" value=<?php echo $type;?>></td>
			</tr>
			<tr> 
				<td>Rating</td>
				<td><input type="text" name="rating" value=<?php echo $rating;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

