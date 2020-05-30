<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Анализ Кано</title>
            <link href="css/Header.css" rel="stylesheet" type="text/css"/> 
			<link href="css/PassPage.css" rel="stylesheet" type"text/css"/>
            <link href="img/ICON.ico" rel="shortcut icon" type="image/x-icon"/> 
			<style>
			div#f {
			width: 500px;	height:250px; /* Размеры */
			background: white; /* Цвет фона */
			border: 1px solid black; /* Белая рамка */
			border-radius: 10px; /* Радиус скругления */
		   	}
				p#name{
					background: #C0C0C0;
					font-family: 'Montserrat', sans-serif;
					width: 500px;	height:50px;
				}
			div#all{
					position: absolute;
					top:150px;
					left: 509px;
					
			}
			.container{
				font-family: 'Montserrat', sans-serif;			
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
				<?php
					$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
					$query = "SELECT * FROM research";
					$result = mysqli_query($mysqli,$query);
					$rows = mysqli_num_rows($result);
					$l = 0;
					while(!isset($_POST['list'][$l]))
					{
						$l++;
					}
					$nice = 0;
					for($i = 0;$i<$rows;$i++)
					{
						$row = mysqli_fetch_row($result);
						if($_POST['list'][$l]==$row[1])
						{
							$nice = $row[0];
							break;
						}
					}
					$gquery = "SELECT * FROM functions ORDER BY `functions`.`id` ASC";
					$gresult = mysqli_query($mysqli,$gquery);
					$num = mysqli_num_rows($gresult);
					echo "<form action='functions/pass.php' method='post'>";
					echo "<input type='hidden' name='res' value='";
					echo $nice;
					echo "'>";
					echo"<div id = 'all'>";
					echo"Представьтесь, пожалуйста (Ф.И.О.)";
					echo"<input type='text' name = 'fio' required>";
					echo "<br>";
				$a = "a";
				$b ="b";
				$c = "c";
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
							  <input type='radio' checked='checked' name='$a' value='1' required>1
							  <span class='checkmark'></span>
							</label>
							<label class='container'>
							  <input type='radio'  name='$a' value='2' required>2
							  <span class='checkmark'></span>
							</label>
							<label class='container'>
							<input type='radio' name='$a' value='3' required >3
							  <span class='checkmark'></span>
							</label>
							<label class='container'>
							  <input type='radio' name='$a' value='4' required>4
							  <span class='checkmark'></span>
							</label>
							<label class='container'>
							  <input type='radio' name='$a' value='5' required>5
							  <span class='checkmark'></span>
							</label>
							<a>Очень важно</a>
						</div>
						<br>
						<div id='Nal'>
							<a>Как вы отнесётесь к проекту, если мы это сделаем?</a>
							<br>
							<label class='container'>
							<input type='radio' checked='checked' name='$b' value='1' required>Удовлетворён(-a)
							  <span class='checkmark'></span>
							</label>
							<br>
							<label class='container'>
							  <input type='radio' name='$b' value='0' required>Равнодушен(-a)
							  <span class='checkmark'></span>
							</label>
							<br>
							<label class='container'>
							  <input type='radio' name='$b' value='-1' required>Неудолетворён(-a)
							  <span class='checkmark'></span>
							</label>
						</div>
						<br>

						<div id='Ot'>
							<a>Как вы отнесётесь к проекту, если мы это НЕ сделаем?</a>
							<br>
							<label class='container'>	
							<input type='radio' checked='checked' name='$c' value='1' required>Удовлетворён(-a)
							  <span class='checkmark'></span>
							</label>
							<br>
							<label class='container'>
							  <input type='radio' name='$c' value='0' required >Равнодушен(-a)
							   <span class='checkmark'></span>
							</label>
							<br>
							  <label class='container'>
							  <input type='radio' name='$c' value='-1' required>Неудолетворён(-a)
							   <span class='checkmark'></span>
							</label>
						</div>
						</div>";
						$a = $a."a";
						$b = $b."b";
						$c = $c."c";
						}
						
					}
					echo "<p class='p-container'>
							<input type='submit' name='go' id='go' value='Отправить'>
						</p>";	
					echo "</div>";
					echo "</form>";
						echo "<br>";
				?>
				
			</main>
        </body>  
    </html>