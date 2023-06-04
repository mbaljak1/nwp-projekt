<?php 
	print '
	<h1>Kontaktirajte nas</h1>
        <ul>
            <li>Vukovarska(Duga ulica) 72, Petrinja</li>
            <li>044/815-999 / 099/999-9999</li>
            <li>d53.rent@gmail.com</a></li>
        </ul>
		<div id="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9460867039516!2d16.30032015959708!3d45.441642923839794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4766ececfa5364a1%3A0x9dd18df1af6247b6!2sDuga%20ul.%2C%2044250%2C%20Petrinja!5e0!3m2!1shr!2shr!4v1641325149430!5m2!1shr!2shr" width="100%" height="450" style="border:2px;" allowfullscreen="" loading="lazy"></iframe>
			<form action="" id="contact_form" name="contact_form" method="POST">
				<label for="fname">Ime *</label>
				<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>

				<label for="lname">Prezime *</label>
				<input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
				
				<label for="lname">Email *</label>
				<input type="email" id="email" name="email" placeholder="Vaš email.." required>

				<label for="country">Država</label>
				<select id="country" name="country">
				  <option value="">Molim odaberite</option>
				  <option value="BE">Belgium</option>
				  <option value="HR" selected>Croatia</option>
				  <option value="LU">Luxembourg</option>
				  <option value="HU">Hungary</option>
				</select>

				<label for="subject">Upit</label>
				<textarea id="subject" name="subject" placeholder="Upišite tekst.." style="height:200px"></textarea>

				<input type="submit" value="Pošalji">
			</form>
	</div>';
?>