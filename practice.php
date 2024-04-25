<!doctype html>
<html lang="ru">
<head>
<script type="text/javascript">
document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
</script>
<title>Практика</title>
<meta charset="utf-8">
<meta name="description" content="RPCS3 is stable enough to boot into games and play many of them with ease. Stability is more of a per-game factor that may change with new builds as new features get implemented.">
<meta name="keywords" content="rpcs3, playstation, playstation 3, ps3, emulator, debugger, windows, linux, macos, freebsd, open source, nekotekina, kd11, faq">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="RPCS3 - FAQs" />
<meta property="og:description" content="RPCS3 is stable enough to boot into games and play many of them with ease. Stability is more of a per-game factor that may change with new builds as new features get implemented." />
<meta property="og:image" content="" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://rpcs3.net" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="RPCS3" />
<meta name="twitter:title" content="RPCS3 - FAQs">
<meta name="twitter:description" content="RPCS3 is stable enough to boot into games and play many of them with ease. Stability is more of a per-game factor that may change with new builds as new features get implemented.">
<meta name="twitter:image" content="">
<meta name="twitter:site" content="@rpcs3">
<meta name="twitter:creator" content="@rpcs3">
<meta name="twitter:card" content="summary_large_image">
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Практика</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
				Задание №12 ЕГЭ по информатике 
				</p>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Задание №1</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						Исполнитель Редактор получает на вход строку цифр и преобразовывает её. Редактор может выполнять две команды, в обеих командах v и w обозначают цепочки цифр.<br/>
А)  заменить (v, w).<br/>
Эта команда заменяет в строке первое слева вхождение цепочки v на цепочку w. Например, выполнение команды
заменить (111, 27)<br/>
преобразует строку 05111150 в строку 0527150.<br/>
Если в строке нет вхождений цепочки v, то выполнение команды заменить (v, w) не меняет эту строку.<br/>
Б)  нашлось (v).<br/>
Эта команда проверяет, встречается ли цепочка v в строке исполнителя Редактор. Если она встречается, то команда возвращает логическое значение «истина», в противном случае возвращает значение «ложь». Строка исполнителя при этом не изменяется.<br/>
Ниже приведена программа для исполнителя Редактор.<br/>
НАЧАЛО<br/>
ПОКА нашлось (133) ИЛИ нашлось (881)<br/>
  ЕСЛИ нашлось (133)<br/>
    ТО заменить (133, 81)<br/>
      ИНАЧЕ заменить (881, 13)<br/>
  КОНЕЦ ЕСЛИ<br/>
КОНЕЦ ПОКА<br/>
КОНЕЦ<br/>
На вход этой программе подается строка, состоящая из 100 цифр; последняя цифра в строке  — цифра 1, а остальные цифры  — восьмёрки. Какая строка получится в результате применения программы к этой строке? В ответе запишите полученную строку.<br/>
						</p>
					</div>
					<details>
	<summary><b>Ответ</b></summary>
	<b>813</b>
</details>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Задание №2</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						Исполнитель Редактор получает на вход строку цифр и преобразовывает её. Редактор может выполнять две команды, в обеих командах v и w обозначают цепочки цифр.<br/>
А)  заменить (v, w).<br/>
Эта команда заменяет в строке первое слева вхождение цепочки v на цепочку w. Например, выполнение команды
заменить (555, 63)
преобразует строку 12555550 в строку 1263550.<br/>
Если в строке нет вхождений цепочки v, то выполнение команды заменить (v, w) не меняет эту строку.<br/>
Б)  нашлось (v).<br/>
Эта команда проверяет, встречается ли цепочка v в строке исполнителя Редактор. Если она встречается, то команда возвращает логическое значение «истина», в противном случае возвращает значение «ложь». Строка исполнителя при этом не изменяется.<br/>
Какая строка получится в результате применения приведённой ниже программы к строке, состоящей из 1000 идущих подряд цифр 8? В ответе запишите полученную строку.<br/>
НАЧАЛО<br/>
ПОКА нашлось (999) ИЛИ нашлось (888)<br/>
  ЕСЛИ нашлось (888)<br/>
    ТО заменить (888, 9)<br/>
    ИНАЧЕ заменить (999, 8)<br/>
  КОНЕЦ ЕСЛИ<br/>
КОНЕЦ ПОКА<br/>
КОНЕЦ<br/>

						</p>
						<details>
	<summary><b>Ответ</b></summary>
	<b>8998</b>
</details>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Задание №3</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						Исполнитель Редактор получает на вход строку цифр и преобразовывает её. Редактор может выполнять две команды, в обеих командах v и w обозначают цепочки цифр.<br/>
А)  заменить (v, w).<br/>
Эта команда заменяет в строке первое слева вхождение цепочки v на цепочку w. Например, выполнение команды
заменить (555, 63)
преобразует строку 12555550 в строку 1263550.<br/>
Если в строке нет вхождений цепочки v, то выполнение команды заменить (v, w) не меняет эту строку.<br/>
Б)  нашлось (v).<br/>
Эта команда проверяет, встречается ли цепочка v в строке исполнителя Редактор. Если она встречается, то команда возвращает логическое значение «истина», в противном случае возвращает значение «ложь». Строка исполнителя при этом не изменяется.<br/>
Какая строка получится в результате применения приведённой ниже программы к строке, состоящей из 1000 идущих подряд цифр 9? В ответе запишите полученную строку.<br/>
НАЧАЛО<br/>
ПОКА нашлось (999) ИЛИ нашлось (888)<br/>
  ЕСЛИ нашлось (888)<br/>
    ТО заменить (888, 9)<br/>
    ИНАЧЕ заменить (999, 8)<br/>
  КОНЕЦ ЕСЛИ<br/>
КОНЕЦ ПОКА<br/>
КОНЕЦ<br/>
						</p>
						<details>
	<summary><b>Ответ</b></summary>
	<b>8899</b>
</details>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Задание №4</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						Исполнитель Редактор получает на вход строку цифр и преобразовывает её. Редактор может выполнять две команды, в обеих командах v и w обозначают цепочки цифр.<br/>
А)  заменить (v, w).<br/>
Эта команда заменяет в строке первое слева вхождение цепочки v на цепочку w. Например, выполнение команды
заменить (111, 27)
преобразует строку 05111150 в строку 0527150.<br/>
Если в строке нет вхождений цепочки v, то выполнение команды заменить (v, w) не меняет эту строку.<br/>
Б)  нашлось (v).<br/>
Эта команда проверяет, встречается ли цепочка v в строке исполнителя Редактор. Если она встречается, то команда возвращает логическое значение «истина», в противном случае возвращает значение «ложь». Строка исполнителя при этом не изменяется.<br/>
Ниже приведена программа для исполнителя Редактор.<br/>
НАЧАЛО<br/>
  ПОКА нашлось (19) ИЛИ нашлось (299) ИЛИ нашлось (3999)<br/>
    заменить (19, 2)<br/>
    заменить (299, 3)<br/>
    заменить (3999, 1)<br/>
  КОНЕЦ ПОКА<br/>
КОНЕЦ<br/>
На вход этой программе подаётся строка длины 99, состоящая из цифры 1, за которой следуют 98 идущих подряд цифр 9. Какая строка получится в результате применения программы к этой строке? В ответе запишите полученную строку.
						</p>
						<details>
	<summary><b>Ответ</b></summary>
	<b>29</b>
</details>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Задание №5</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						Исполнитель Редактор получает на вход строку цифр и преобразовывает её. Редактор может выполнять две команды, в обеих командах v и w обозначают цепочки цифр.<br/>
А)  заменить (v, w).<br/>
Эта команда заменяет в строке первое слева вхождение цепочки v на цепочку w. Например, выполнение команды
заменить (111, 27)
преобразует строку 05111150 в строку 0527150.<br/>
Если в строке нет вхождений цепочки v, то выполнение команды заменить (v, w) не меняет эту строку.<br/>
Б)  нашлось (v).<br/>
Эта команда проверяет, встречается ли цепочка v в строке исполнителя Редактор. Если она встречается, то команда возвращает логическое значение «истина», в противном случае возвращает значение «ложь». Строка исполнителя при этом не изменяется.
Ниже приведена программа для исполнителя Редактор.<br/>
НАЧАЛО<br/>
  ПОКА нашлось (19) ИЛИ нашлось (299) ИЛИ нашлось (3999)<br/>
    заменить (19, 2)<br/>
    заменить (299, 3)<br/>
    заменить (3999, 1)<br/>
  КОНЕЦ ПОКА<br/>
КОНЕЦ<br/>
На вход этой программе подаётся строка длины 101, состоящая из цифры 1, за которой следуют 100 идущих подряд цифр 9. Какая строка получится в результате применения программы к этой строке?<br/>				
						<details>
	<summary><b>Ответ</b></summary>
	<b>39</b>
</details>
<br/>		
</p>
</body>
					</div>
				</div>
			</div>	
	</div>
</div>
</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</html>