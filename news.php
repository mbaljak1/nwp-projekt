<?php
	
	//include  'functions.php';
	//if (isset($action) && $action != '') {
	//	if (!isset($_GET['action']) && $_GET['action'] == 1)
		if (isset($_GET['action']) AND $_GET['action'] !=''){
		$query  = "SELECT * FROM news";
		$query .= " WHERE id=" . $_GET['action'];
	//	$result = @mysqli_query($MySQL, $query);
	$result = @mysqli_query(mysqli_connect("localhost","root","","webprog"), $query);
		$row = @mysqli_fetch_array($result);
		
		
			print '
			<div class="news">
				<img src="img/' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '">
				<h2>' . $row['title'] . '</h2>
				<p>'  . $row['description'] . '</p>
				<time datetime="' . $row['date'] . '">' . pickerDateToMysql($row['date']) . '</time>
				<p><a href="index.php?menu=2">Povratak na vijesti</a></p>
				<hr>
			</div>';
	}
	else {
		print '<h1>VIJESTI</h1>';
		$query  = "SELECT * FROM news";
		$query .= " WHERE archive='N'";
		$query .= " ORDER BY date DESC";
		$result = @mysqli_query(mysqli_connect("localhost","root","","webprog"), $query);
		
		while($row = @mysqli_fetch_array($result)) {
			print '
			<div class="news">
				<img src="img/' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '">
				<h2>' . $row['title'] . '</h2>';
				if(strlen($row['description']) > 300) {
					echo substr(strip_tags($row['description']), 0, 300).'... <a href="index.php?menu=' . $_GET['menu'] . '&amp;action=' . $row['id'] . '">Više</a>';
				} else {
					echo strip_tags($row['description']);
				}
				print '<br>
				<time datetime="' . $row['date'] . '">' . pickerDateToMysql($row['date']) . '</time>
				
				<hr>
			</div>';
		}
	}
?>