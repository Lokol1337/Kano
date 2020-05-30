<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Анализ Кано</title>
            <link href="css/Header.css" rel="stylesheet" type="text/css"/> 
			<link href="css/PassPage.css" rel="stylesheet" type="text/css"/>
            <link href="img/ICON.ico" rel="shortcut icon" type="image/x-icon"/> 
			<style>
				input#fio{
				left:auto;
					right: auto;
				}
			div#f {
			width: 500px;	height:250px;
			background: white;
			border: 1px solid black; 
			border-radius: 10px;
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
			div#all{
					position:absolute;
					top:150px;
					left: 509px;
					
			}
			.container{
				font-family: 'Montserrat', sans-serif;			
			}
			#next{
					display: none;
			}
			p#name{
				background: #C0C0C0;
				font-family: 'Montserrat', sans-serif;
				width: 500px;	height:50px;
			}
			p#who{
				margin-left: auto;
				margin-right: auto;
				background: white;
				font-family: 'Montserrat', sans-serif;
				width:300px;
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
				<?php
					$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
					$query = "SELECT * FROM research";
					$result = mysqli_query($mysqli,$query);
					$rows = mysqli_num_rows($result);
					for($i = 0;$i<$rows;$i++)
					{
						$row = mysqli_fetch_row($result);
						if($_POST['list']==$row[1])
						{
							$nice = $row[0];
							break;
						}
					}
					$l = 0;
					while(!isset($_POST['uslist'][$l]))
					{
						$l++;
					}
					$gquery = "SELECT * FROM functions ORDER BY `functions`.`id` ASC";
					$gresult = mysqli_query($mysqli,$gquery);
					$num = mysqli_num_rows($gresult);
					$uquery = "SELECT * FROM user";
					$uresult = mysqli_query($mysqli,$uquery);
					$counter = mysqli_num_rows($uresult);
					for($i = 0;$i < $counter;$i++)
					{
						$arr = mysqli_fetch_row($uresult);
						if($_POST['uslist'][$l]==$arr[1])
						{
							$userid = $arr[0];
							break;
						}
					}
					/*$vquery = "SELECT * FROM user";
					$vresult = mysqli_query($mysqli,$vquery);
					$counter = mysqli_num_rows($vresult);
					for($i = 0;$i < $counter;$i++)
					{
						$ar = mysqli_fetch_row($vresult);
						if($us == $ar[0])
						{
							$user = $ar[1];
						}
					}*/
					$wquery = "SELECT * FROM response ORDER BY `response`.`id` ASC";
					//$mysqli->query("SELECT * FROM response ORDER BY functionid ASC");
					$wresult = mysqli_query($mysqli,$wquery);
					$wcounter = mysqli_num_rows($wresult);
					$wrow = mysqli_fetch_row($wresult);
					/*for($i = 0;$i < $wcounter;$i++)
					{
						$ary = mysqli_fetch_row($wresult);
						if($ary[5] == $arr[0])
						{
							$hech = $ary[1];
						}
					}*/
					echo"<form action='functions/deleditpass.php' method='post'>";
					echo"<div id = 'all'>";
					echo "<p id='who'>";
					echo"Представьтесь, пожалуйста (Ф.И.О.):";
					echo "</p>";
					echo"<input id = 'fio' type='text' name = 'fio' value = '";
					echo $_POST['uslist'][$l];
					echo "' required>";
					echo "<br>";
					$a = "a";
					$b = "b";
					$c = "c";
					for($v = 0;$v < $wcounter;$v++)
					{
						if($wrow[1]==$nice && $wrow[6]==$userid)
						{
							break;
						}
						$wrow = mysqli_fetch_row($wresult);
					}
					for($i = 0;$i<$num;$i++)
					{
						$array = mysqli_fetch_row($gresult);
						if($nice==$array[1])
						{
						
							echo "<br>";
							echo "<p id='name'>$array[2]</p>";
					echo "	<div id = 'f'>
							<div id='imp'>
							<a>Оцените,пожайста, насколько это важно?</a>
							<br>
							<a>Совсем не важно</a>
							<label class='container'>
							  <input type='radio'  name='$a' value='1' required";
							if($wrow[3]==1)
							{
								echo " checked ";
							}
							echo ">1
							  <span class='checkmark'></span>
							</label>
							<label class='container'>
							  <input type='radio'  name='$a' value='2' required";
							if($wrow[3]==2)
							{
								echo " checked ";
							}
							echo ">2
							  <span class='checkmark'></span>
							</label>
							<label class='container'>
							<input type='radio' name='$a' value='3' required";
							if($wrow[3]==3)
							{
								echo " checked ";
							}
							echo">3
							  <span class='checkmark'></span>
							</label>
							<label class='container'>
							  <input type='radio' name='$a' value='4' required";
							if($wrow[3]==4)
							{
								echo " checked ";
							}
							echo">4
							  <span class='checkmark'></span>
							</label>
							<label class='container'>
							  <input type='radio' name='$a' value='5' required";
							if($wrow[3]==5)
							{
								echo " checked ";
							}
							echo ">5
							  <span class='checkmark'></span>
							</label>
							<a>Очень важно</a>
						</div>
						<br>
						<div id='Nal'>
							<a>Как вы отнесётесь к проекту, если мы это сделаем?</a>
							<br>
							<label class='container'>
							<input type='radio' checked='checked' name='$b' value='1' required";
							if($wrow[4]==1)
							{
								echo " checked ";
							}
							echo ">Удовлетворён(-a)
							  <span class='checkmark'></span>
							</label>
							<br>
							<label class='container'>
							  <input type='radio' name='$b' value='0' required";
							if($wrow[4]==0)
							{
								echo " checked ";
							}
							echo ">Равнодушен(-a)
							  <span class='checkmark'></span>
							</label>
							<br>
							<label class='container'>
							  <input type='radio' name='$b' value='-1' required";
							if($wrow[4]==-1)
							{
								echo " checked ";
							}
							echo ">Неудолетворён(-a)
							  <span class='checkmark'></span>
							</label>
						</div>
						<br>

						<div id='Ot'>
							<a>Как вы отнесётесь к проекту, если мы это НЕ сделаем?</a>
							<br>
							<label class='container'>	
							<input type='radio' checked='checked' name='$c' value='1' required";
							if($wrow[5]==1)
							{
								echo " checked ";
							}
							echo ">Удовлетворён(-a)
							  <span class='checkmark'></span>
							</label>
							<br>
							<label class='container'>
							  <input type='radio' name='$c' value='0' required";
							if($wrow[5]==0)
							{
								echo " checked ";
							}
							echo  ">Равнодушен(-a)
							   <span class='checkmark'></span>
							</label>
							<br>
							  <label class='container'>
							  <input type='radio' name='$c' value='-1' required";
							if($wrow[5]==-1)
							{
								echo " checked ";
							}
							echo ">Неудолетворён(-a)
							   <span class='checkmark'></span>
							</label>
						</div>
						</div>";
						$a = $a."a";
						$b = $b."b";
						$c = $c."c";
						$wrow = mysqli_fetch_row($wresult);
						}
						
					}
					echo "<p class='p-container'>
							<input type='submit' name='go' id='go' value='Отправить'>
						</p>";
					echo "</div>";
					echo "<input type='text' name='list' id='next' value='";
					echo $_POST['list'];
					echo  "'>";
					echo "<input type='text' name='uslist' id='next' value='";
					echo $_POST['uslist'][$l];
					echo  "'>";
					echo "</form>";
						echo "<br>";
				$mysqli->close();
				?>
			</main>
        </body>  
    </html>