<?php 
	print '
	<ul class="prvi">
		<li class="prvi"><a href="index.php?menu=1">Naslovnica</a></li>
		<li class="prvi"><a href="index.php?menu=2">Vijesti</a></li>
		<li class="prvi"><a href="index.php?menu=3">Kontakt</a></li>
		<li class="prvi"><a href="index.php?menu=4">O nama</a></li>
        <li class="prvi"><a href="index.php?menu=5">Galerija</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li class="prvi"><a href="index.php?menu=6">Registracija</a></li>
			<li class="prvi"><a href="index.php?menu=7">Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			if($_SESSION['user']['role'] == 1){
			print '
			
			<li class="prvi"><a href="index.php?menu=8">Admin</a></li>
			<li class="prvi"><a href="index.php?menu=10">IMAGIN.studio API</a></li>
			<li class="prvi"><a href="index.php?menu=11">Zabava</a></li>
			<li class="prvi"><a href="signout.php">Odjava</a></li>'
			;
			}
			else if($_SESSION['user']['role'] == 2){
				print '
				<li class="prvi"><a href="index.php?menu=10">IMAGIN.studio API</a></li>
				<li class="prvi"><a href="index.php?menu=11">Zabava</a></li>

				<li class="prvi"><a href="signout.php">Odjava</a></li>';
			}
		}
		
		print '
	</ul>';
?>