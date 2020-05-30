<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Анализ Кано</title>
            <link href="css/Header.css" rel="stylesheet" type="text/css"/>
            <link href="img/ICON.ico" rel="shortcut icon" type="image/x-icon"/> 
			<link href="css/ListPage.css" rel="stylesheet" type="text/css"/> 
			<style>
			#post
				{ 
					border:none; 
					text-align: center; 
					font-size:15px; 
					color:white; 
					background-color:transparent; 
					cursor:pointer;	
					text-shadow:0 1px 0 black;
					border-bottom:1px solid rgba(0,0,0,1);
					display: none;
				}
				body {
                  background-image: url('img/chel.jpg');
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
				}	
		    </style>
        </head> 
        <body>
            <header> 
				<div id="logo">
                    <a title="На главную" href="MainPage.html">
                        <img width="110" height="130" title="Анализ Кано" alt="Анализ Кано" src="img/graph.png" />
                        <span>Анализ Кано</span> 
                    </a> 
                </div> 
                <div id="about"> 
                    <a class="button" title="Написать нам письмо" href="">Обратная связь</a> 
                    <a class="button" href="" title="Информация">О сайте</a>
                </div> 
                <div id="reg_auth"> 
                    <a href="" class="button" title="Войти в кабинет пользователя">Войти</a> 
                </div>
            </header>  
			<main>
				<div id="list">
				<form action="EditPass.php" method="post">
				<?php
					$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
					$query = "SELECT * FROM response";
					$result = mysqli_query($mysqli,$query);
					$rows = mysqli_num_rows($result);
					//$row = mysqli_fetch_row($result);
					$l = 0;
					while(!isset($_POST['list'][$l]))
					{
						$l++;
					}
					$bquery = "SELECT * FROM research";
					$bresult = mysqli_query($mysqli,$bquery);
					$brows = mysqli_num_rows($bresult);
					for($m = 0;$m < $brows;$m++)
					{
						$brow = mysqli_fetch_row($bresult);
						if($_POST['list'][$l]==$brow[1])
						{
							$nice = $brow[0];
							break;
						}
					}
					//$res = $_POST['list'][$l];
					echo "<input type='submit1' id='post' name='list' value='";
					echo $_POST['list'][$l];
					echo "'>";
					$j = 0;
					$n = 0;	
					//$arr[0]=-1;
					for($i = 0;$i < $rows;$i++)
						{
							$row = mysqli_fetch_row($result);
							for($t = 0;$t < $n;$t++)
							{
								if($arr[$t]!=$row[6])
								{
									$j++;
								}
							}
							if($j==$n && $row[1]==$nice)
							{
								$arr[$n] = $row[6];
								$n++;
							}
								
							$j = 0;
						}
					$h = 0;
					$gquery = "SELECT * FROM user";
					$gresult = mysqli_query($mysqli,$gquery);
					$grows = mysqli_num_rows($gresult);
					while($h<$n)
					{						
						for($k = 0;$k < $grows;$k++)
						{	
							$grow = mysqli_fetch_row($gresult);
							if($arr[$h]==$grow[0])
							{
								$arr[$h] = $grow[1];
							}					
						}
						$gresult->data_seek(0);
						$h++;						
					}
					
					for($k = 0;$k < $n;$k++)
					{
						echo "<br>";
						echo "<input type='submit' id='submitB' name='uslist[]' value='";
						echo $arr[$k];
						echo "'>";
						echo "</br>";
					}					
				$mysqli->close();
				?>
				</form>
				</div>
			</main>
        </body> 
    </html>