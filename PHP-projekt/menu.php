<?php 
	print '
	<ul>
		<li><a href="index.php?menu=1">Home</a></li>
		<li><a href="index.php?menu=2">News</a></li>
		<li><a href="index.php?menu=3">Contact</a></li>
		<li><a href="index.php?menu=4">About</a></li>
		<li><a href="index.php?menu=9">Galery</a></li>;';
		
		$query  = "SELECT * FROM users";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a class = "pr_reg" href="index.php?menu=5">Register</a></li>
			<li><a class = "pr_reg" href="index.php?menu=6">Sign In</a></li>';
		}
		else if (($_SESSION['user']['valid'] == 'true') && ($row['archive'] = 'N')){
			print '
			<li><a href="index.php?menu=7">Admin</a></li>
			<li><a href="signout.php">Sign Out</a></li>';
		}
		else if (($_SESSION['user']['valid'] == 'true') && ($row['archive'] = 'Y')){
			print '
			<li><a href="index.php?menu=8">Editor</a></li>
			<li><a href="signout.php">Sign Out</a></li>';
		}
		print '</ul>';
?>