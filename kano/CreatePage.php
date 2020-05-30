<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Анализ Кано</title>
            <link href="css/Header.css" rel="stylesheet" type="text/css"/> 
            <link href="img/ICON.ico" rel="shortcut icon" type="image/x-icon"/> 
			<link href="css/CreatePage.css" rel="stylesheet" type="text/css"/> 
			<link href="img/Krest.png" rel="shortcut icon" type="image/x-icon"/>
			<style>
				footer{
					position: fixed;
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
			<footer>
			</footer>
			<main>
				<form action='functions/create.php' method='post'>
						<p>
							<a href='MainPage.html'>
								<img width='20' height='20' src='img/Krest.png' />
							</a>
						</p>	
						<h1>СОЗДАНИЕ ИССЛЕДОВАНИЯ</h1>	
							<div id='add_field_area' class='inset'>
								<p>
									<lable for='research'>НАЗВАНИЕ ИССЛЕДОВАНИЯ</lable>
									<input type="text" name="research" id="research" autocomplete="off" required>
								</p>
								<div id="add" class="add">
									<p id="123">
										<label for='problem'>НАЗВАНИЯ ФУНКЦИЙ</label>
										<input type="text" name="problem[]" id="problem" value="" autocomplete="off" required>
									</p>
								</div>
								<script src="http://code.jquery.com/jquery-1.11.0.js"></script>
								<script type="text/javascript">
									function addForm()
									{
										//var telnum = parseInt($("#add_field_area").find("div.add:last").attr("id").slice(3)) 1;
  										$("div#add").append('<div id="add2" class="add"><input type="text" name="problem[]" id="problem" value="" autocomplete="off" required> </div>');
										//document.getElementById(id).innerHTML+=('<div id="add" telnum "" class="add"><input type="text" name="problem[]" id="problem" required></div>');
									}
									function delForm(){
  										$("div#add2:last").remove();
									}
								</script>
								<p class='p-container1'>
									<input type='submit' name='go' id='go' value='Создать' >
								</p>
								<p class='p-container2'>
									<input type='button' name='ho' id='ho' value="+" onclick="addForm()">
								</p>
								<p class='p-container3'> 
									<input type='button' name='ho' id='ho' value='-' onclick='delForm()'> 
								</p>
							</div>

				</form>
				<!--<script type="text/javascript">
					function addForm(id)
					{
						document.getElementById(id).innerHTML+=('<input type="text" name="problem[]" id="problem" required>');
					}
				</script>-->
			</main>
        </body>  
    </html>