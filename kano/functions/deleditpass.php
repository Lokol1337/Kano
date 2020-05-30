<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
	$query = "SELECT * FROM research";	
	$result = mysqli_query($mysqli,$query);
	$rows = mysqli_num_rows($result);
	for($j = 0;$j < $rows;$j++)
	{
		$row = mysqli_fetch_row($result);
		if($_POST['list']==$row[1])
		{
			$resid = $row[0];
			break;
		}
	}

	$k = 0;
	$array;
	$con = "SELECT * FROM functions";
	$res = mysqli_query($mysqli,$con);
	$num = mysqli_num_rows($res);
	for($i = 0;$i < $num;$i++)
	{		
		$arr = mysqli_fetch_row($res);
		if($arr[1] == $resid)
		{
			$array [] = $arr[0];
			$k++;
		}
	} 
	$h = $_POST['fio'];
	$hquery = "SELECT * FROM user";
	$hresult = mysqli_query($mysqli, $hquery);
	$num = mysqli_num_rows($hresult);
	$l = 0;

	for($m = 0;$m < $num;$m++)
	{
		$us = mysqli_fetch_row($hresult);
		if($h!=$us[1])
		{
			$l++;
		}
	}
	if($l == $num)
	{
		$mysqli->query("INSERT INTO `user`(`name`) VALUES('$h')");
	}
	$connect = "SELECT * FROM user";
	$all = mysqli_query($mysqli,$connect);
	$counter = mysqli_num_rows($all);
	for($p = 0;$p < $counter;$p++)
	{
		$buf = mysqli_fetch_row($all);
		if($buf[1] == $_POST['fio'])
			$bufNum = $buf[0];
	}
	$sql = "DELETE FROM response WHERE researchid='$resid' AND userid='$bufNum'";
	$mysqli->query($sql);
	$a = 'a';
	$b = 'b';
	$c = 'c';
	for($g = 0;$g < $k;$g++)
	{
			$z = $row[0];
			$x = $array[$g];
			$s = $_POST[$a];
			$d = $_POST[$b];
			$f = $_POST[$c];
			$mysqli->query("INSERT INTO `response`(`researchid`,`functionid`,`imp`,`un`,`no`,`userid`) VALUES('$z','$x','$s','$d','$f','$bufNum')");
			$a = $a."a";
			$b = $b."b";
			$c = $c."c";
	}

	//$delete ="DELETE FROM resreserch WHERE id = '$row[0]'";
	//$r = mysqli_query($mysqli,$delete);
	$mysqli->close();
	header("Location: http://kano.ru/EditList.php");
?>


