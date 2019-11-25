<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wonderkoding Pertemuan 8</title>
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
            <h2>Kawan Ku</h2>
            <a href="add.php">Tambahkan data baru</a><br/><br/>
            <table width='80%' border=1 align="center">
            <tr bgcolor='#CCCCCC'>
                <td>Name</td>
                <td>Age</td>
                <td>Email</td>
                <td>Update</td>
            </tr>
            <?php 
            while($res = mysqli_fetch_array($result)) { 		
                echo "<tr>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['age']."</td>";
                echo "<td>".$res['email']."</td>";	
                echo "<td>
                <a href=\"edit.php?id=$res[id]\">Edit</a> | 
                <a href=\"delete.php?id=$res[id]\"
                onClick=\"return confirm('Apakah kamu yakin ingin menghapus?')\">Delete</a>
                </td>";		
            }
            ?>
            </table>
        </div>

        <div class="footer">
            <p>copyright wonderkoding 2019</p>
        </div>
        
    </div>
</body>
</html>
