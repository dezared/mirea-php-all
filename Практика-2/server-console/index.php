<html lang="en">
<body>
<?php
	require_once ('commands.php');
	$commands = new Commands();

	echo "<div>";
	echo "ls: ";
	echo $commands->ls();
	echo "</br>ps: ";
	echo $commands->ps();
	echo "</br>whoami: ";
	echo $commands->whoami();
	echo "</br>id: ";
	echo $commands->id();
	echo "</div>";
?>
</body>
</html>