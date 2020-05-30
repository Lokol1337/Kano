<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Анализ Кано</title>
            <link href="css/Header.css" rel="stylesheet" type="text/css"/> 
            <link href="img/ICON.ico" rel="shortcut icon" type="image/x-icon"/> 
			<link href="css/ListPage.css" rel="stylesheet" type="text/css"/>
			<style>
			
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
					<form action="AllResult.php" method="post">
						<input type="hidden" name="chose[]" value="1">
						<?php 
							$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
							$query = "SELECT * FROM research";
							$result = mysqli_query($mysqli,$query);
							$rows = mysqli_num_rows($result);
							for($i = 0;$i < $rows;$i++)
							{
								$row = mysqli_fetch_row($result);

								echo "<br>";
								echo "<input type='submit' id='submitB' name='list1[]' value='";
								echo $row[1];
								echo "'>";
								echo "</br>";
							}
							$mysqli	->close();
						?>
					</form>
				</div>
			</main>
        </body>  
		<footer>
		</footer>
    </html>