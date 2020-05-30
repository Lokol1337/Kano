<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
	$query = "SELECT * FROM research";
	$result = mysqli_query($mysqli,$query);
	$rows = mysqli_num_rows($result);
	for($j = 0;$j<$rows;$j++)
	{
		if(isset($_POST['list'][$j])==true)
		{
			$press = $_POST['list'][$j];
			break;
		}
			
	}
	for($i = 0;$i<$rows;$i++)
	{
		$row = mysqli_fetch_row($result);
		if($row[1]==$press)
		{
			$mysqli->query("INSERT INTO `resreserch`(`id`) VALUES('$row[0]')");
			break;
		}
	}
	$mysqli->close();
	header("Location: http://kano.ru/ChosePage.php");
?>