<?php 
	print '
	<h1>Prijava</h1>
	<div id="signin">';
	error_reporting(E_ERROR | E_PARSE);
	if ($_POST['_action_'] == FALSE) {
		print '
		<form action="" name="myForm" id="myForm" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			<label for="username">Korisničko ime:*</label>
			<input type="text" id="username" name="username" value="" pattern=".{5,10}" required>
									
			<label for="password">Lozinka:*</label>
			<input type="password" id="password" name="password" value="" pattern=".{4,}" required>
									
			<input type="submit" value="Prijavi se">
		</form>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE username='" .  $_POST['username'] . "'";
		$query .= " AND archive='N'";
		//$result = @mysqli_query($MySQL, $query);
        $result = @mysqli_query(mysqli_connect("localhost","root","","webprog"), $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if (password_verify($_POST['password'], $row['password'])) {
			#password_verify https://secure.php.net/manual/en/function.password-verify.php
			$_SESSION['user']['valid'] = 'true';
			$_SESSION['user']['id'] = $row['id'];
			$_SESSION['user']['role'] = $row['role'];
			$_SESSION['user']['firstname'] = $row['firstname'];
			$_SESSION['user']['lastname'] = $row['lastname'];
			$_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
			# Redirect to admin website
			if($_SESSION['user']['role'] == 1){
			header("Location: index.php?menu=8");
			}
			else{
				header("Location: index.php?menu=1");
			}
		}
		
		# Bad username or password
		else {
			unset($_SESSION['user']);
			$_SESSION['message'] = '<p>Unijeli ste pogrešno korisničko ime ili lozinku!</p>';
			header("Location: index.php?menu=7");
		}
	}
	print '
	</div>';
?>