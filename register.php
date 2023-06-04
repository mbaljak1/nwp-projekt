<?php 
	print '
	<h1>Registracija</h1>
	<div id="register">';
	error_reporting(E_ERROR | E_PARSE);
	
	if (($_POST['_action_']) == FALSE) {
		print '
		<form action="" id="registration_form" name="registration_form" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			
			<label for="fname">Ime *</label>
			<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>
			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
				
			<label for="email">E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Vaša mail adresa.." required>
			
			<label for="username">Korisničko ime:* <small>(Korisničko ime mora imati između min. 5  i max.10 znakova)</small></label>
			<input type="text" id="username" name="username" pattern=".{5,10}" placeholder="Korisničko ime.." required><br>
			
									
			<label for="password">Lozinka:* <small>(Lozinka mora imati min. 4 znaka)</small></label>
			<input type="password" id="password" name="password" placeholder="Lozinka.." pattern=".{4,}"" required>
			
            <label for="country">Država:</label>
			<select name="country" id="country">
				<option value="">Molimo odaberite</option>';
				#Select all countries from database webprog, table countries
				$query  = "SELECT * FROM countries";
				//$result = @mysqli_query($MySQL, $query);
				$result = @mysqli_query(mysqli_connect("localhost","root","","webprog"), $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>
			<input type="submit" value="Registriraj se">
		</form>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR username='" .  $_POST['username'] . "'";
		//$result = @mysqli_query($MySQL, $query);
		$result = @mysqli_query(mysqli_connect("localhost","root","","webprog"), $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if ($row['email'] == '' || $row['username'] == '') {
			# password_hash https://secure.php.net/manual/en/function.password-hash.php
			# password_hash() creates a new password hash using a strong one-way hashing algorithm
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO users (firstname, lastname, email, username, password, country,role)";
			$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "', 2)";
			$result = @mysqli_query(mysqli_connect("localhost","root","","webprog"), $query);
			//$result = @mysqli_query($MySQL, $query);
			
			# ucfirst() — Make a string's first character uppercase
			# strtolower() - Make a string lowercase
			echo '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ', hvala na registraciji </p>
			<hr>';
		}
		else {
			echo '<p>Korisnik s ovom mail adresom već postoji!</p>';
		}
	}
	print '
	</div>';
?>