<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
	/*$query = "SELECT * FROM reserch";	
	$result = mysqli_query($mysqli,$query);
	$rows = mysqli_num_rows($result);
	for($j = 0;$j < $rows;$j++)
	{
		$row = mysqli_fetch_row($result);
	}
	$delete ="DELETE FROM resreserch WHERE id = '$row[0]'";*/
	//$r = mysqli_query($mysqli,$delete);
	$k = 0;
	$array;
	$con = "SELECT * FROM functions";
	$res = mysqli_query($mysqli,$con);
	$num = mysqli_num_rows($res);
	for($i = 0;$i < $num;$i++)
	{		
		$arr = mysqli_fetch_row($res);
		if($arr[1] == $_POST['res'])
		{
			$array [] = $arr[0];
			$k++;
		}
	} 
	$h = $_POST['fio'];
	$mysqli->query("INSERT INTO `user`(`name`) VALUES('$h')");
	$connect = "SELECT * FROM user";
	$all = mysqli_query($mysqli,$connect);
	$counter = mysqli_num_rows($all);
	for($p = 0;$p < $counter;$p++)
	{
		$buf = mysqli_fetch_row($all);
		if($buf[1] == $_POST['fio'])
			$bufNum = $buf[0];
	}
	$a = 'a';
	$b = 'b';
	$c = 'c';
	for($g = 0;$g < $k;$g++)
	{
			$z = $_POST['res'];
			$x = $array[$g];
			$s = $_POST[$a];
			$d = $_POST[$b];
			$f = $_POST[$c];
			$mysqli->query("INSERT INTO `response`(`researchid`,`functionid`,`imp`,`un`,`no`,`userid`) VALUES('$z','$x','$s','$d','$f','$bufNum')");
			$a = $a."a";
			$b = $b."b";
			$c = $c."c";
	}
	$mysqli->close();
	header("Location: http://localhost/kano/ListPage.php");
?>


