<?php 
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		print '
		
		<h1>Administracija</h1>
		<div id="admin">
			<ul class="prvi">
				<li class="prvi"><a href="index.php?menu=8&amp;action=1">Vijesti</a></li>
				<li class="prvi"><a href="index.php?menu=8&amp;action=2">Korisnici</a></li>
			</ul>';
			# Admin Users
			if ($action == 2) { include("admin/users.php"); }
			
			# Admin News
			else if ($action == 1) { include("admin/news.php"); }
		print '
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Please register or login using your credentials!</p>';
		header("Location: index.php?menu=8");
	}
?>