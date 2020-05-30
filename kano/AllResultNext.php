<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Анализ Кано</title>
            <link href="css/Header.css" rel="stylesheet" type="text/css"/> 
			<!--<link href="css/MainPage.css" rel="stylesheet" type="text/css"/> -->
            <link href="img/ICON.ico" rel="shortcut icon" type="image/x-icon"/> 
			<style>
				a#choose{
					background: linear-gradient(to bottom, #FFFFFF, #E6E6E6);
					vertical-align: middle;
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
				table
                {
                width: auto;
                display: inline-block;
                position: relative;
                top: 2%;
                //left: 2%;
                background: #f7f5f5;
                }
                .svg-container 
                {
                display: inline-block;
                position: relative;
                width: 40%;
                padding-bottom: 1%;
                padding-top:1%;
                vertical-align: middle;
                overflow: hidden;
                }

                .svg-content 
                {
                display: inline-block;
                position: relative;
                top: 2%;
                left: 2%;
                }

                .table-cntr
                {
                display: inline-block;
                position: relative;
                width: 58%;
                padding-left: 1%;
                padding-bottom: 1%;
                vertical-align: middle;
                overflow: hidden;
                }
				#but1{
					font-size:2.5em;
					text-align: center;
					float:left;
					position: relative;
					//left:35%;
				}
				#but1{
					background:linear-gradient(to bottom, #FFFFFF, #E6E6E6) #F5F5F5 repeat-x;
					border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #B3B3B3;
					border-radius: 4px;
					border-style: solid;
					border-width: 1px;
					box-shadow: 0 2px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
					color: #333333;
					text-decoration:none;
					display:inline-block;
					font-size: 25px;
					width:150px;
					height: 50px;	    
					line-height: 20px;
					margin:0px auto;
					padding: 20px 12px;
					text-align: center;
					text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
					vertical-align: middle;
					position: relative;
					-webkit-transition-duration: 0.3s;
					transition-duration: 0.3s;
					-webkit-transition-property: -webkit-transform;
					transition-property: transform;
					-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
					-webkit-transform: translateZ(0);
					-ms-transform: translateZ(0);
					transform: translateZ(0);
					box-shadow: 0 0 1px rgba(0, 0, 0, 0);
				}
				

				#but1:before {
					pointer-events: none;
					position: absolute;
					z-index: -1;
					content: '';
					top: 100%;
					left: 5%;
					height: 50px;
					width: 90%;
					opacity: 0;
					background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
					background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
					-webkit-transition-duration: 0.3s;
					transition-duration: 0.3s;
					-webkit-transition-property: -webkit-transform, opacity;
					transition-property: transform, opacity;
				}
				#but1:hover {
					-webkit-transform: translateY(-5px);
					-ms-transform: translateY(-5px);
					transform: translateY(-5px);
				}
				#but1:hover:before {
					opacity: 1;
					-webkit-transform: translateY(5px);
					-ms-transform: translateY(5px);
					transform: translateY(5px);
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
				if($_POST['chose']==2)
				{
					echo "<div class='svg-container'>";
					echo "<svg version='1.1' viewBox='0 0 815 815' preserveAspectRatio='xMinYMin meet' class='svg-content'>
					 <g>
						<rect fill='#fff' id='canvas_background' height='800' width='800' y='-1' x='-1'/>
					 </g>
					 <g>
						<line stroke='#b5b5b0' id='svg1' y2='400' x2='0' y1='400' x1='800' stroke-width='4'/>
						<line stroke='#b5b5b0' id='svg2' y2='0' x2='400' y1='800' x1='400' stroke-width='4'/>

						<line stroke='#d1d422' id='svg3' y2='0' x2='800' y1='800' x1='0' stroke-width='4'/>

						<path d='M0 400 C 430 320, 360 400, 600 0' stroke='#25d422' fill='transparent' stroke-width='4'/>
						<path d='M800 400 C 360 460, 450 420, 200 800' stroke='#d42222' fill='transparent' stroke-width='4'/>

						<rect x='300' y='300' width='200' height='200' stroke='#b5b5b0' fill='transparent' stroke-width='4'/>

						<circle cx='400'cy='400' r='6'/>";
						 
						$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
						$query = "SELECT * FROM response ORDER BY 'id' ASC";
						$result = mysqli_query($mysqli,$query);
						$num = mysqli_num_rows($result);
						$aquery = "SELECT * FROM research";
						$aresult = mysqli_query($mysqli,$aquery);
						$anum = mysqli_num_rows($aresult);
						$bquery = "SELECT * FROM functions";
						$bresult = mysqli_query($mysqli,$bquery);
						$bnum = mysqli_num_rows($bresult);
						for($i = 0;$i < $anum;$i++)
						{
							$arr = mysqli_fetch_row($aresult);
							if($_POST['list1']==$arr[1])
							{
								$resid = $arr[0];
							}
						}
						$k = 0;
						for($i = 0;$i < $bnum;$i++)
						{
							$brr = mysqli_fetch_row($bresult);
							if($brr[1]==$resid)
							{
								$bufArr[] = $brr[2];
								$bufBrr[] = $brr[0];
								$k++;
							}
						}	
						$p = 0;
						while(isset($_POST['uslist'][$p])!=1)
						{
							$p++;
						}
					$res = mysqli_query($mysqli,"SELECT * FROM user");
					$skoka = mysqli_num_rows($res);
					for($t = 0;$t < $skoka;$t++)
					{
						$mass = mysqli_fetch_row($res);
						if($mass[1]==$_POST['uslist'][$p])
						{
							$userid = $mass[0];
						}
					}
					$a = 0;
					$b = 0;
					$c = 0;
					$d = 0;
					$e = 0;
					$aa = 0;
					$bb = 0;
					$cc = 0;
					$dd = 0;
					$ee = 0;
					$ff = 0;
					$resNo = 0;
					$rowsGraph = 0;
					$gunter = 0;
					for($j = 0;$j < $k;$j++)
					{

						for($i = 0;$i < $num;$i++)
						{
							$rr = mysqli_fetch_row($result);
								if($rr[2]==$bufBrr[$j] && $rr[6] == $userid)
								{
								if($rr[3]==1)
									$a++;
								if($rr[3]==2)
									$b++;
								if($rr[3]==3)
									$c++;
								if($rr[3]==4)
									$d++;
								if($rr[3]==5)
									$e++;
								if($rr[4]==1 && $rr[5]==0) 
								$aa++; 
								if($rr[4]==1 && $rr[5]==-1) 
								$bb++; 
								if($rr[4]==0 && $rr[5]==-1) 
								$cc++; 
								if($rr[4]==0 && $rr[5]==0) 
								$dd++; 
								if(($rr[4]==1 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==-1)) 
								$ee++; 
								if(($rr[4]==0 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==0)) 
								$ff++;
								$resNo = $resNo + $rr[3]*$rr[4]*$rr[5];
								$gunter++;
								}
							
						}
						$index = $a + $b + $c + $d + $e;
						
						$result->data_seek(0);
						
						$numArr[0]=$aa;
						$numArr[1]=$bb;
						$numArr[2]=$cc;
						$numArr[3]=$dd;
						$numArr[4]=$ee;
						$numArr[5]=$ff;
						$max = $numArr[0];
						for($r = 0;$r < 6;$r++)
						{
							if($max < $numArr[$r])
							{
								$max = $numArr[$r];
							}	
						}
						
						if($max == $aa)
						{
							$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
							$No = round((($resNo)/($index*5))*100);
							$x = 400 + ($No*2);
							$y = 400 - ($Un*3);
							echo "<circle cx='$x' cy='$y' r='6' fill='#25d422'/>";
							
						}
							
						else if($max == $bb)
						{
							$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
							$No = round((($resNo)/($index*5))*100);
							$x = 400 - ($No*3);
							$y = 400 - ($Un*2);
							echo "<circle cx='$x' cy='$y' r='6' fill='#d1d422'/>";
							
							
						}
							
						else if($max == $cc)
						{
							$Un = round((($resNo)/($index*5))*100) ;
							$No = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
							$x = 400 + ($No*2);
							$y = 400 - ($Un);
							echo "<circle cx='$x' cy='$y' r='6' fill='#d42222'/>";
							
						}
							
						else if($max == $dd)		
						{
							$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
							$No = round((($resNo)/($index*5))*100);
							$x = 400 + ($No*1.5);
							$y = 400 - ($Un);
							echo "<circle cx='$x' cy='$y' r='6' />";
							
						}
							
						else if($max == $ee)
						{
							$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
							$No = round((($resNo)/($index*5))*100);
							$x = 400 + ($No*2);
							$y = 400 + ($Un*2);
							echo "<circle cx='$x' cy='$y' r='6' fill='#ee05fa'/>";
						}
							
						else if($max == $ff)
						{
							$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
							$No = round((($resNo)/($index*5))*100);
							$x = 400 + ($No*2);
							$y = 400 + ($Un*2);
							echo $x;
							echo "<circle cx='$x' cy='$y' r='6' fill='#0000FF'/>";
						}
						
						$arrGraph[$rowsGraph][0] = $x;
						$arrGraph[$rowsGraph][1] = $y;
						//$push = array($x,$y);
						//$arrGraph = array_push($push);
						$rowsGraph++;
					$a = 0;
					$b = 0;
					$c = 0;
					$d = 0;
					$e = 0;
					$aa = 0;
					$bb = 0;
					$cc = 0;
					$dd = 0;
					$ee = 0;
					$ff = 0;
					$resNo=0;
					$counter = $j+1;
					$sovpad = 0;
					//echo  $arrGraph[$rowsGraph-1][0];
						//echo "      AAAAAAAAAA";
					for($m = 0;$m < $rowsGraph;$m++)
					{
						if($arrGraph[$rowsGraph-1][0]==$arrGraph[$m][0] && $arrGraph[$rowsGraph-1][1]==$arrGraph[$m][1])
						{
							$sovpad++;
						}
					}
					$pixel = ($sovpad-1)*25; 
					$ypix = $y - 15;
					$xpix = $x + $pixel;
					echo"<text font-weight='bold'  font-style='normal' text-anchor='end' font-family='Helvetica, Arial, sans-serif' font-size='15' id='svg6' y='$ypix' x='$xpix' fill='#000000'>
					<title>
					$bufArr[$j]
					</title>
					
					$counter";
					echo ".</text>";	
					}
					echo "</g>";
					echo "</svg>";
					echo "</div>";
					echo "<div class='table-cntr'>";
					mysqli_close($mysqli);
					
					//Начало вывода таблицы.
					//
					//
					
					echo "<table bordercolor='#524f4f' rules='all'>
						<tr>
						<td height='20' width='20'> </td>
						<td width='500'></td>
						<td width='20' align='center'>1</td>
						<td width='20' align='center'>2</td>
						<td width='20' align='center'>3</td>
						<td width='20' align='center'>4</td>
						<td width='20' align='center'>5</td>
						<td width='20' align='center'>В</td>
						<td width='20' align='center'>Ж</td>
						<td width='20' align='center'>О</td>
						<td width='20' align='center'>Н</td>
						<td width='20' align='center'>С</td>
						<td width='20' align='center'>А</td>
						<td  width='35' align='center'>Решение</td>
						<td width='30' align='center'>УН</td>
						<td width='30' align='center'>НО</td>
						
						</tr>";
						 
						$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
						$query = "SELECT * FROM response ORDER BY 'id' ASC";
						$result = mysqli_query($mysqli,$query);
						$num = mysqli_num_rows($result);
						$aquery = "SELECT * FROM research";
						$aresult = mysqli_query($mysqli,$aquery);
						$anum = mysqli_num_rows($aresult);
						$bquery = "SELECT * FROM functions";
						$bresult = mysqli_query($mysqli,$bquery);
						$bnum = mysqli_num_rows($bresult);
						for($i = 0;$i < $anum;$i++)
						{
							$arr = mysqli_fetch_row($aresult);
							if($_POST['list1']==$arr[1])
							{
								$resid = $arr[0];
							}
						}
						$k = 0;
						for($i = 0;$i < $bnum;$i++)
						{
							$brr = mysqli_fetch_row($bresult);
							if($brr[1]==$resid)
							{
								$bufArr[$k] = $brr[2];
								$bufBrr[$k] = $brr[0];
								$k++;
							}
						}	
						$p = 0;
						while(isset($_POST['uslist'][$p])!=1)
						{
							$p++;
						}
					$res = mysqli_query($mysqli,"SELECT * FROM user");
					$skoka = mysqli_num_rows($res);
					for($t = 0;$t < $skoka;$t++)
					{
						$mass = mysqli_fetch_row($res);
						if($mass[1]==$_POST['uslist'][$p])
						{
							$userid = $mass[0];
						}
					}
					$a = 0;
					$b = 0;
					$c = 0;
					$d = 0;
					$e = 0;
					$aa = 0;
					$bb = 0;
					$cc = 0;
					$dd = 0;
					$ee = 0;
					$ff = 0;
					$resNo = 0;
					for($j = 0;$j < $k;$j++)
					{
						echo "<tr>";
						echo "<td>";
						echo $j+1;
						echo "</td>";
						for($i = 0;$i < $num;$i++)
						{
							$rr = mysqli_fetch_row($result);
								if($rr[2]==$bufBrr[$j] && $rr[6] == $userid)
								{
								if($rr[3]==1)
									$a++;
								if($rr[3]==2)
									$b++;
								if($rr[3]==3)
									$c++;
								if($rr[3]==4)
									$d++;
								if($rr[3]==5)
									$e++;
								if($rr[4]==1 && $rr[5]==0) 
								$aa++; 
								if($rr[4]==1 && $rr[5]==-1) 
								$bb++; 
								if($rr[4]==0 && $rr[5]==-1) 
								$cc++; 
								if($rr[4]==0 && $rr[5]==0) 
								$dd++; 
								if(($rr[4]==1 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==-1)) 
								$ee++; 
								if(($rr[4]==0 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==0)) 
								$ff++;
								$resNo = $resNo + $rr[3]*$rr[4]*$rr[5];
								}
							
						}
						$index = $a + $b + $c + $d + $e;
						$result->data_seek(0);
						echo "<td>";
						echo $bufArr[$j];
						echo "</td>";
						echo "<td>";
						echo $a;
						echo "</td>";
						echo "<td>";
						echo $b;
						echo "</td>";
						echo "<td>";
						echo $c;
						echo "</td>";
						echo "<td>";
						echo $d;
						echo "</td>";
						echo "<td>";
						echo $e;
						echo "</td>";
						
						echo "<td>";
						echo $aa;
						echo "</td>";
						echo "<td>";
						echo $bb;
						echo "</td>";
						echo "<td>";
						echo $cc;
						echo "</td>";
						echo "<td>";
						echo $dd;
						echo "</td>";
						echo "<td>";
						echo $ee;
						echo "</td>";
						echo "<td>";
						echo $ff;
						echo "</td>";
						$numArr[0]=$aa;
						$numArr[1]=$bb;
						$numArr[2]=$cc;
						$numArr[3]=$dd;
						$numArr[4]=$ee;
						$numArr[5]=$ff;
						$max = $numArr[0];
						for($r = 0;$r < 6;$r++)
						{
							if($max < $numArr[$r])
							{
								$max = $numArr[$r];
							}	
						}	
						if($max == $aa)
							{
								echo "<td>";
								echo "В";
								echo "</td>";
							}

							else if($max == $bb)
							{
								echo "<td>";
								echo "Ж";
								echo "</td>";
							}

							else if($max == $cc)
							{
								echo "<td>";
								echo "О";
								echo "</td>";
							}

							else if($max == $dd)		
							{
								echo "<td>";
								echo "Н";
								echo "</td>";
							}

							else if($max == $ee)
							{
								echo "<td>";
								echo "С";
								echo "</td>";
							}

							else if($max == $ff)
							{
								echo "<td>";
								echo "А";
								echo "</td>";
							}

							$Un = (($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100;
							echo "<td>";
							echo round($Un);
							echo "</td>";

							//$resNo = abs($resNo);
							$No = round((($resNo)/($index*5))*100);
							echo "<td>";
							echo $No;
							echo "</td>";
					$a = 0;
					$b = 0;
					$c = 0;
					$d = 0;
					$e = 0;
					$aa = 0;
					$bb = 0;
					$cc = 0;
					$dd = 0;
					$ee = 0;
					$ff = 0;
					$resNo=0;
					}
					echo "</table>";
						echo "</div>";
					echo "<form action = 'AllResult.php' method='post' id='1'>";
					echo "<input type='hidden' name='list1[]' id='resid' value='";
						echo $_POST['list1'];
						echo "'>";
					echo "<input type='hidden' name='chose[]' value='1'>
					<input type='submit' value='Показать:' id='but1'>
						</form>";
					echo "<a id='choose'>Все функции по всем пользователям </a><br><br><br><br><br>";
					
					
					
					echo "<form action = 'AllResult.php' method='post' id='3'>";
					echo "<input type='hidden' name='list1[]' id='resid' value='";
						echo $_POST['list1'];
						echo "'>";
					echo "<input type='hidden' name='chose[]' value='3'>
					<input type='submit' value='Показать:' id='but1'>
						</form>";
					echo "<a id='choose'>Все функции по всем пользователям (без усреднения)</a><br><br><br><br><br>";
					
					
					echo "<form action = 'AllResult.php' method='post' id='3'>";
					echo "<input type='hidden' name='list1' id='resid' value='";
						echo $_POST['list1'];
						echo "'>";

					echo "<input type='hidden' name='chose[]' value='4'>
					<input type='submit' value='Показать:' id='but1'>
						</form>";
					echo "<a id='choose'>Одна функция по всем пользователям </a>";
				}
				if($_POST['chose']==4)
				{
					echo "<div class='svg-container'>";
					echo "<svg version='1.1' viewBox='0 0 815 815' preserveAspectRatio='xMinYMin meet' class='svg-content'>
					 <g>
						<rect fill='#fff' id='canvas_background' height='800' width='800' y='-1' x='-1'/>
					 </g>
					 <g>
						<line stroke='#b5b5b0' id='svg1' y2='400' x2='0' y1='400' x1='800' stroke-width='4'/>
						<line stroke='#b5b5b0' id='svg2' y2='0' x2='400' y1='800' x1='400' stroke-width='4'/>

						<line stroke='#d1d422' id='svg3' y2='0' x2='800' y1='800' x1='0' stroke-width='4'/>

						<path d='M0 400 C 430 320, 360 400, 600 0' stroke='#25d422' fill='transparent' stroke-width='4'/>
						<path d='M800 400 C 360 460, 450 420, 200 800' stroke='#d42222' fill='transparent' stroke-width='4'/>

						<rect x='300' y='300' width='200' height='200' stroke='#b5b5b0' fill='transparent' stroke-width='4'/>

						<circle cx='400'cy='400' r='6'/>";	
						 
						$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
						$query = "SELECT * FROM response ORDER BY 'id' ASC";
						$result = mysqli_query($mysqli,$query);
						$num = mysqli_num_rows($result);
						$aquery = "SELECT * FROM research";
						$aresult = mysqli_query($mysqli,$aquery);
						$anum = mysqli_num_rows($aresult);
						/*$bquery = "SELECT * FROM functions";
						$bresult = mysqli_query($mysqli,$bquery);
						$bnum = mysqli_num_rows($bresult);*/
						for($i = 0;$i < $anum;$i++)
						{
							$arr = mysqli_fetch_row($aresult);
							if($_POST['list1']==$arr[1])
							{
								$resid = $arr[0];
							}
						}
						$k = 0;
						/*for($i = 0;$i < $bnum;$i++)
						{
							$brr = mysqli_fetch_row($bresult);
							if($brr[1]==$resid)
							{
								$bufArr[] = $brr[2];
								$bufBrr[] = $brr[0];
								$k++;
							}
						}	*/
						$p = 0;
						while(isset($_POST['funlist'][$p])!=1)
						{
							$p++;
						}
					$res = mysqli_query($mysqli,"SELECT * FROM functions ORDER BY 'id' ASC");
					$skoka = mysqli_num_rows($res);
					for($t = 0;$t < $skoka;$t++)
					{
						$mass = mysqli_fetch_row($res);
						if($mass[2]==$_POST['funlist'][$p])
						{
							$funid = $mass[0];
						}
					}
					$us = mysqli_query($mysqli,"SELECT * FROM user ORDER BY 'id' ASC");
					$numUs = mysqli_num_rows($us);
					$a = 0;
					$b = 0;
					$c = 0;
					$d = 0;
					$e = 0;
					$aa = 0;
					$bb = 0;
					$cc = 0;
					$dd = 0;
					$ee = 0;
					$ff = 0;
					$resNo = 0;
					$whoid = 0;
					$rowsGraph = 0;
					for($l = 0;$l < $numUs;$l++)
					{
						$masUs = mysqli_fetch_row($us);
						for($i = 0;$i < $num;$i++)
						{
							$rr = mysqli_fetch_row($result);
								if($rr[2] == $funid && $masUs[0]==$rr[6])
								{
								if($rr[3]==1)
								{
									$a++;
								}
								if($rr[3]==2)
								{
									$b++;
								}
									
								if($rr[3]==3)
								{

									$c++;
								}
									
								if($rr[3]==4)
								{
									$d++;
								}
									
								if($rr[3]==5)
								{
									$e++;
								}
									
									
								if($rr[4]==1 && $rr[5]==0) 
								$aa++; 
								if($rr[4]==1 && $rr[5]==-1) 
								$bb++; 
								if($rr[4]==0 && $rr[5]==-1) 
								$cc++; 
								if($rr[4]==0 && $rr[5]==0) 
								$dd++; 
								if(($rr[4]==1 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==-1)) 
								$ee++; 
								if(($rr[4]==0 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==0)) 
								$ff++;
								$resNo = $resNo + $rr[3]*$rr[4]*$rr[5];
								$who = $masUs[1];
								$whoid++;
								}
						}
						$index = $a + $b + $c + $d + $e;
						$result->data_seek(0);
						if($index!=0)
						{
							$numArr[0]=$aa;
							$numArr[1]=$bb;
							$numArr[2]=$cc;
							$numArr[3]=$dd;
							$numArr[4]=$ee;
							$numArr[5]=$ff;
							$max = $numArr[0];
							for($r = 0;$r < 6;$r++)
							{
								if($max < $numArr[$r])
								{
									$max = $numArr[$r];
								}	
							}
							if($max == $aa)
							{
								$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
								$No = round((($resNo)/($index*5))*100);
								$x = 400 + ($No*2);
								$y = 400 - ($Un*3);
								echo "<circle cx='$x' cy='$y' r='6' fill='#25d422'/>";
							}

							else if($max == $bb)
							{
								$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
								$No = round((($resNo)/($index*5))*100);
								$x = 400 - ($No*3);
								$y = 400 - ($Un*2);
								echo "<circle cx='$x' cy='$y' r='6' fill='#d1d422'/>";
							}

							else if($max == $cc)
							{
								$Un = round((($resNo)/($index*5))*100) ;
								$No = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
								$x = 400 + ($No*2);
								$y = 400 - ($Un);
								echo "<circle cx='$x' cy='$y' r='6' fill='#d42222'/>";
							}

							else if($max == $dd)		
							{
								$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
								$No = round((($resNo)/($index*5))*100);
								$x = 400 + ($No*1.5);
								$y = 400 - ($Un);
								echo "<circle cx='$x' cy='$y' r='6' />";
							}

							else if($max == $ee)
							{
								$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
								$No = round((($resNo)/($index*5))*100);
								$x = 400 + ($No*2);
								$y = 400 + ($Un*2);
								echo "<circle cx='$x' cy='$y' r='6' fill='#ee05fa'/>";
							}

							else if($max == $ff)
							{
								$Un = round((($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100);
								$No = round((($resNo)/($index*5))*100);
								$x = 400 + ($No*2);
								$y = 400 + ($Un*2);
								echo $x;
								echo "<circle cx='$x' cy='$y' r='6' fill='#0000FF'/>";
							}
							$arrGraph[$rowsGraph][0] = $x;
							$arrGraph[$rowsGraph][1] = $y;
							$rowsGraph++;
						$a = 0;
						$b = 0;
						$c = 0;
						$d = 0;
						$e = 0;
						$aa = 0;
						$bb = 0;
						$cc = 0;
						$dd = 0;
						$ee = 0;
						$ff = 0;
						$resNo=0;
						$sovpad = 0;
						for($m = 0;$m < $rowsGraph;$m++)
						{
							if($arrGraph[$rowsGraph-1][0]==$arrGraph[$m][0] && $arrGraph[$rowsGraph-1][1]==$arrGraph[$m][1])
							{
								$sovpad++;
							}
						}
						$pixel = ($sovpad-1)*25; 
						$ypix = $y - 15;
						$xpix = $x + $pixel;
						echo"<text font-weight='bold' font-style='normal' text-anchor='middle' font-family='Helvetica, Arial, sans-serif' font-size='15' id='svg6' y='$ypix' x='$xpix' fill='#000000'>
						<title>";
						echo $who;
						echo "</title>";
							echo $whoid;
						echo ".</text>";
						}
					}		
					echo "</g>";
					echo "</svg>";
					echo "</div>";
					echo "<div class='table-cntr'>";
					mysqli_close($mysqli);
					
					echo "<table bordercolor='#524f4f' rules='all'
						<tr>
						<td height='20' width='20'> </td>
						<td width='500'></td>
						<td width='20' align='center'>1</td>
						<td width='20' align='center'>2</td>
						<td width='20' align='center'>3</td>
						<td width='20' align='center'>4</td>
						<td width='20' align='center'>5</td>
						<td width='20' align='center'>В</td>
						<td width='20' align='center'>Ж</td>
						<td width='20' align='center'>О</td>
						<td width='20' align='center'>Н</td>
						<td width='20' align='center'>С</td>
						<td width='20' align='center'>А</td>
						<td  width='35' align='center'>Решение</td>
						<td width='30' align='center'>УН</td>
						<td width='30' align='center'>НО</td>
						
						</tr>";
						 
						$mysqli = mysqli_connect('localhost', 'root', '', 'kano');
						$query = "SELECT * FROM response ORDER BY 'id' ASC";
						$result = mysqli_query($mysqli,$query);
						$num = mysqli_num_rows($result);
						$aquery = "SELECT * FROM research";
						$aresult = mysqli_query($mysqli,$aquery);
						$anum = mysqli_num_rows($aresult);
						/*$bquery = "SELECT * FROM functions";
						$bresult = mysqli_query($mysqli,$bquery);
						$bnum = mysqli_num_rows($bresult);*/
						for($i = 0;$i < $anum;$i++)
						{
							$arr = mysqli_fetch_row($aresult);
							if($_POST['list1']==$arr[1])
							{
								$resid = $arr[0];
							}
						}
						$k = 0;
						/*for($i = 0;$i < $bnum;$i++)
						{
							$brr = mysqli_fetch_row($bresult);
							if($brr[1]==$resid)
							{
								$bufArr[] = $brr[2];
								$bufBrr[] = $brr[0];
								$k++;
							}
						}	*/
						$p = 0;
						while(isset($_POST['funlist'][$p])!=1)
						{
							$p++;
						}
					$res = mysqli_query($mysqli,"SELECT * FROM functions");
					$skoka = mysqli_num_rows($res);
					for($t = 0;$t < $skoka;$t++)
					{
						$mass = mysqli_fetch_row($res);
						if($mass[2]==$_POST['funlist'][$p])
						{
							$funid = $mass[0];
						}
					}
					$us = mysqli_query($mysqli,"SELECT * FROM user ORDER BY 'id' ASC");
					$numUs = mysqli_num_rows($us);
					
					$a = 0;
					$b = 0;
					$c = 0;
					$d = 0;
					$e = 0;
					$aa = 0;
					$bb = 0;
					$cc = 0;
					$dd = 0;
					$ee = 0;
					$ff = 0;
					$resNo = 0;
					$whoid = 0;
					$who = 0;
					for($l = 0;$l < $numUs;$l++)
					{
						$masUs = mysqli_fetch_row($us);
						for($i = 0;$i < $num;$i++)
						{
							$rr = mysqli_fetch_row($result);
								if($rr[2] == $funid && $rr[6]==$masUs[0])
								{
								if($rr[3]==1)
									$a++;
								if($rr[3]==2)
									$b++;
								if($rr[3]==3)
									$c++;
								if($rr[3]==4)
									$d++;
								if($rr[3]==5)
									$e++;
								if($rr[4]==1 && $rr[5]==0) 
								$aa++; 
								if($rr[4]==1 && $rr[5]==-1) 
								$bb++; 
								if($rr[4]==0 && $rr[5]==-1) 
								$cc++; 
								if($rr[4]==0 && $rr[5]==0) 
								$dd++; 
								if(($rr[4]==1 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==-1)) 
								$ee++; 
								if(($rr[4]==0 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==1) || ($rr[4]==-1 && $rr[5]==0)) 
								$ff++;
								$resNo = $resNo + $rr[3]*$rr[4]*$rr[5];
								$whoid++;
								$who = $masUs[1];
								}	
						}
						$index = $a + $b + $c + $d + $e;
						
						$result->data_seek(0);
						if($index!=0)
						{
							echo "<tr>";
						echo "<td>";
						echo $whoid;
						echo "</td>";
						
						echo "<td>";
						echo $who;
						echo "</td>";
						echo "<td>";
						echo $a;
						echo "</td>";
						echo "<td>";
						echo $b;
						echo "</td>";
						echo "<td>";
						echo $c;
						echo "</td>";
						echo "<td>";
						echo $d;
						echo "</td>";
						echo "<td>";
						echo $e;
						echo "</td>";
						
						echo "<td>";
						echo $aa;
						echo "</td>";
						echo "<td>";
						echo $bb;
						echo "</td>";
						echo "<td>";
						echo $cc;
						echo "</td>";
						echo "<td>";
						echo $dd;
						echo "</td>";
						echo "<td>";
						echo $ee;
						echo "</td>";
						echo "<td>";
						echo $ff;
						echo "</td>";
					
						$numArr[0]=$aa;
						$numArr[1]=$bb;
						$numArr[2]=$cc;
						$numArr[3]=$dd;
						$numArr[4]=$ee;
						$numArr[5]=$ff;
						$max = $numArr[0];
						for($r = 0;$r < 6;$r++)
						{
							if($max < $numArr[$r])
							{
								$max = $numArr[$r];
							}	
						}
						
						if($max == $aa)
						{
							echo "<td>";
							echo "В";
							echo "</td>";
						}
							
						else if($max == $bb)
						{
							echo "<td>";
							echo "Ж";
							echo "</td>";
						}
							
						else if($max == $cc)
						{
							echo "<td>";
							echo "О";
							echo "</td>";
						}
							
						else if($max == $dd)		
						{
							echo "<td>";
							echo "Н";
							echo "</td>";
						}
							
						else if($max == $ee)
						{
							echo "<td>";
							echo "С";
							echo "</td>";
						}
							
						else if($max == $ff)
						{
							echo "<td>";
							echo "А";
							echo "</td>";
						}
						
						$Un = (($a*1+$b*2+$c*3+$d*4+$e*5)/($index*5))*100;
						echo "<td>";
						echo round($Un);
						echo "</td>";
						
						//$resNo = abs($resNo);
						$No = round((($resNo)/($index*5))*100);
						echo "<td>";
						echo $No;
						echo "</td>";
						
						$a = 0;
						$b = 0;
						$c = 0;
						$d = 0;
						$e = 0;
						$aa = 0;
						$bb = 0;
						$cc = 0;
						$dd = 0;
						$ee = 0;
						$ff = 0;
						$resNo=0;
						}
					}
					echo "</table>";	
					echo "</div>";

					
					echo "<form action = 'AllResult.php' method='post' id='1'>";
					echo "<input type='hidden' name='list1[]' id='resid' value='";
						echo $_POST['list1'];
						echo "'>";
					echo "<input type='hidden' name='chose[]' value='1'>
					<input type='submit' value='Показать:' id='but1'>
						</form>";
					
					
					echo "<a id='choose'>Все функции усреднено по всем пользователям</a><br><br><br><br><br>";
					echo "<form action = 'AllResult.php' method='post' id='2'>";
					echo "<input type='hidden' name='list1[]' id='resid' value='";
						echo $_POST['list1'];
						echo "'>";
					echo "<input type='hidden' name='chose[]' value='3'>
					<input type='submit' value='Показать:' id='but1'>
						</form>";
					echo "<a id='choose'>Все функции по всем пользователям (без усреднения)</a><br><br><br><br><br>";
					
					echo "<form action = 'AllResult.php' method='post' id='3'>";
					echo "<input type='hidden' name='list1' id='resid' value='";
						echo $_POST['list1'];
						echo "'>";

					echo "<input type='hidden' name='chose[]' value='2'>
					<input type='submit' value='Показать:' id='but1'>
						</form>";
					echo "<a id='choose'>Все функции по одному пользователю </a>";
					
					}
						
				?>
			</main>
        </body> 
    </html>