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
			
			<form method="post"> 
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

	// echo 'isi $_GET: ';
	// print_r($_GET);

	// echo "\r\nisi POST: ";
	// print_r($_POST);

	if(isset($_POST['username'])){
		$sql = "select * from akun where username = '$_POST[username]' AND password = '$_POST[password]'";

		$query = $koneksi->query($sql);

		$data = $query->fetch_assoc();

		if (empty($data)){
			$sql2 = "select * from akun where username = '$_POST[username]'";
			$query2 = $koneksi->query($sql2);
			$data2 = $query2->fetch_assoc();

			if (!empty($data2)){
				$error = "Wrong password";
			}else{
				$error = "Username not found";
			}
		}else{
			print_r($data);
		}
	}

	if (isset($error)){
		print($error);
	}
        
?>

