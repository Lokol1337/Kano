<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'kano');	
	$g=0;
	while(isset($_POST['problem'][$g])==true){
		$g++;
	}
	$c=$_POST['research'];
	$mysqli->query("INSERT INTO `research`(`name`) VALUES('$c')");
	$query = "SELECT id FROM research";
	$result = mysqli_query($mysqli,$query);
	$rows = mysqli_num_rows($result);
	for($i = 0;$i < $rows;$i++){
		$row = mysqli_fetch_row($result);
	}
	for($i = 0;$i<$g;$i++)
	{
		$p=$_POST['problem'][$i];
		$mysqli->query("INSERT INTO `functions`(`title`,`researchid`) VALUES('$p','$row[0]')");
	}
	$mysqli->close();
	header("Location: http://localhost/kano/CreatePage.php");
?>