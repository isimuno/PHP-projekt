<?php 
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 2; }
		print '
		<h1>Editors</h1>
		<div>
			<ul>
				<li><a href="#"></a></li>
				<li><a href="index.php?menu=8&amp;action=2">News</a></li>
				<li><a href="index.php?menu=8;action=3">Contact</a></li>
				<li><a href="index.php?menu=8;action=4">About</a></li>
				<li><a href="index.php?menu=8;action=5">Galery</a></li>
				<li><a href="index.php?menu=8;action=6">Editor</a></li>
				<li><a href="signout.php">Sign Out</a></li>
			</ul>';
			# Admin Users
			if ($action == 2) { include("editor/news.php"); }
			else if ($action == 3) { include("contact.php"); }
			else if ($action == 4) { include("about-us.php"); }
			else if ($action == 5) { include("galery.php"); }
			else if ($action == 6) { include("editor.php"); }
		print '
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Please register or login using your credentials!</p>';
		header("Location: index.php?menu=6");
	}
?>