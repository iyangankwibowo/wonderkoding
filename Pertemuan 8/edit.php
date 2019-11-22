<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
	
	header("Location: table.php");
}

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wonderkoding Pertemuan 6</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">

        <div class="header">
            <h2>Selamat Datang di Website Pribadiku</h2>
            <div class="logo">
                <img src="profil.jpeg" alt="profil">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="table.php">Kawan Ku</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <h2>Edit Data</h2>
			<form name="form1" method="post" action="edit.php">
			<table width="50%" border=0 align="center">
				<tr> 
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $name;?>" required></td>
				</tr>
				<tr> 
					<td>Age</td>
					<td><input type="text" name="age" value="<?php echo $age;?>" required></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $email;?>" required></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?> required></td>
					<td><input type="submit" name="update" value="Update" required></td>
				</tr>
			</table>
		</form>
        </div>

        <div class="footer">
            <p>copyright wonderkoding 2019</p>
        </div>
        
    </div>
</body>
</html>

