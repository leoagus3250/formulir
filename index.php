<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
		<div class="container">
			<h1>LOGIN</h1>
			
			<form>
				<table>
					<tr>
						<td>
					 		<img src="logo.png" width="250" height="250" class="logo">
					 	</td>
					 </tr>


					<tr>
						<td>
							<input  type="text" name="username" placeholder="Username">
						</td>
					</tr>

					<tr>
						
						<td>
							<input type="password" name="password" placeholder="Password">
								
						</td>
					</tr>

					<tr>
						<td>
							<button type="submit" name="kirim">Login</button>
							<button class="btn">Signup</button>
						</td>
					</tr>

				</table>
			</form>

			</div>

	</div>


</body>
</html>

<?php 
    include "koneksi.php";

    if(isset($_POST['kirim'])){
        mysqli_query($koneksi, "insert into akun set
        username = '$_POST[username]',
        password = '$_POST[password]'

        ");

        echo "Formulir Berhasil Disimpan";
        
    }
?>

