<?php
	include_once("config.php");

	if(isset($_POST['Submit'])) {	
		$name = mysqli_real_escape_string($mysqli, $_POST['name']);
		$age = mysqli_real_escape_string($mysqli, $_POST['age']);
		$email = mysqli_real_escape_string($mysqli, $_POST['email']);
			
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");

		header("Location:teman.php");
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
                    <li><a href="teman.php">Kawan Ku</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
			<h2>Menambahkan Data Baru</h2>

			<form action="add.php" method="post" name="form1">
				<table width="50%" border=0 align="center">
					<tr> 
						<td>Nama Lengkap</td>
						<td><input type="text" name="name" required></td>
					</tr>
					<tr> 
						<td>Usia</td>
						<td><input type="number" name="age" required></td>
					</tr>
					<tr> 
						<td>Email</td>
						<td><input type="email" name="email" required></td>
					</tr>
					<tr> 
						<td></td>
						<td><input type="submit" name="Submit" value="Tambahkan"></td>
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