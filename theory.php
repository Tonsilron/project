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
<title>Теория</title>
<meta charset="utf-8">
<meta name="description" content="Our goal is to preserve the legacy of the PlayStation 3 by completely and accurately emulating its vast library in its entirety with the power of open-source community and reverse engineering.">
<meta name="keywords" content="rpcs3, playstation, playstation 3, ps3, emulator, debugger, windows, linux, macos, freebsd, open source, nekotekina, kd11, about">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="RPCS3 - About"/>
<meta property="og:description" content="Our goal is to preserve the legacy of the PlayStation 3 by completely and accurately emulating its vast library in its entirety with the power of open-source community and reverse engineering."/>
<meta property="og:image" content="https://rpcs3.net/img/meta/mobile/1200.png"/>
<meta property="og:image:width" content="1200"/>
<meta property="og:image:height" content="630"/>
<meta property="og:url" content="https://rpcs3.net"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="RPCS3"/>
<meta name="twitter:title" content="RPCS3 - About">
<meta name="twitter:description" content="Our goal is to preserve the legacy of the PlayStation 3 by completely and accurately emulating its vast library in its entirety with the power of open-source community and reverse engineering.">
<meta name="twitter:image" content="https://rpcs3.net/img/meta/mobile/1200.png">
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
				<h1>Теория</h1>
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
			<div class='splitter-con-container'>
				<div class='splitter-txt-wrapper'>
					<div class='container-con-block darkmode-block'>
						<div class='container-con-wrapper'>
							<div class='container-tx1-block darkmode-txt'>
								<div class='container-emp-block'>
								</div>
								<h2>Алгоритм</h2>
							</div>
							<div class='container-tx2-block darkmode-txt'>
								<p>
								<b>⠀⠀Алгоритм</b> — конечная совокупность точно заданных правил решения некоторого класса задач или набор инструкций (команд), описывающих порядок действий исполнителя. <br>
							
								⠀⠀Известны три типа алгоритмов – <b>линейные, разветвляющиеся, циклические</b>.

								⠀⠀Алгоритмы, в которых команды выполняются друг за другом, независимо от каких-либо условий, называются алгоритмами <b>линейного</b> типа.<br/>

								⠀⠀Алгоритмы, в которых требуется организовать выбор последовательности действий в зависимости от каких-либо условий, называют алгоритмами <b>разветвляющегося</b> типа.<br/>  ⠀⠀При разработке алгоритма <b>циклической</b> структуры выделяют следующие понятия: <b>параметр цикла</b> – величина, с изменением которой связано многократное выполнение цикла; <b>шаг цикла</b> – это значение, на которое изменяется параметр цикла при каждом повторении.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class='splitter-img-container splitter-con-right'>
					<div class='splitter-img-wrapper' style="background: url('/img/graphics/about/project.jpg') no-repeat center; background-size: cover;">
					</div>
				</div>
			</div>
			<div class='splitter-con-container'>
				<div class='splitter-img-container splitter-con-left'>
					<div class='splitter-img-wrapper' style="background: url('/img/graphics/about/history.jpg') no-repeat center; background-size: cover;">
					</div>
				</div>
				<div class='splitter-txt-wrapper'>
					<div class='container-con-block darkmode-block'>
						<div class='container-con-wrapper'>
							<div class='container-tx1-block darkmode-txt'>
								<div class='container-emp-block'>
								</div>
								<h2>Способы описания алгоритмов.</h2>
							</div>
							<div class='container-tx2-block darkmode-txt'>
								<p>
								<b>1) Символьный</b>, когда алгоритм описывается с помощью специального набора символов (специального языка).<br/>
								<b>2) Словесная форма</b> записи алгоритмов обычно используется для алгоритмов, ориентированных на исполнителя-человека. Команды такого алгоритма выполняются в естественной последовательности, если не оговорено противного.<br/>
								<b>3) Графическая запись</b> с помощью блок-схем: осуществляется рисованием последовательности геометрических фигур, каждая из которых подразумевает выполнение определенного действия алгоритма.<br/>
								⠀⠀⠀Современные языки программирования могут обрабатывать различные типы данных: <b>числовые, логические и строковые</b>.<br>
								<b>• к числовым данным</b> применяются алгебраические операции (сложение, вычитание, умножение, деление) и функции;<br/>
								<b>• к логическим данным</b> применяются логические операции (инверсия, дизъюнкция, конъюнкция, импликация, эквивалентность);<br/>
								<b>• строки</b> – это упорядоченные последовательности символов, используемые для хранения и представления текстовой информации, поэтому с помощью строк можно работать со всем, что может быть представлено в текстовой форме.Операции, которые выполняются над строковыми данными: конкатенация (сложение, склеивание) строк, дублирование строки, определение длины строки, поиск подстроки в строке,замена подстроки в строке.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='splitter-con-container'>
				<div class='splitter-txt-wrapper'>
					<div class='container-con-block darkmode-block'>
						<div class='container-con-wrapper'>
							<div class='container-tx1-block darkmode-txt'>
								<div class='container-emp-block'>
								</div>
								<h2>Исполнитель Редактор</h2>
							</div>
							<div class='container-tx2-block darkmode-txt'>
								<p>
								<b>⠀⠀Исполнитель</b> – это человек, группа людей, животное, машина или другой объект, который может понимать и выполнять некоторые команды. <br>
								⠀⠀Исполнитель Редактор получает на вход строку из цифр и преобразует её. Редактор может выполнять две команды, в обеих командах v и w обозначают цепочки цифр.
								<b>1) заменить (v, w).</b>
Эта команда заменяет в строке первое слева вхождение цепочки v на цепочку w. Например, выполнение команды
заменить (1111, 23)
преобразует строку 06111130 в строку 062330.
Если в строке нет вхождений цепочки v, то выполнение команды заменить (v, w) не меняет эту строку.<br/>
<b>2) нашлось (v).</b>
Эта команда проверяет, встречается ли цепочка v в строке исполнителя Редактор. Если она встречается, то команда возвращает логическое значение «истина», в противном случае возвращает значение «ложь». Строка исполнителя при этом не изменяется.<br/>
<b>Типы задач для исполнителя Редактор:</b><br/>
1. нахождение итоговой строки после применения команд Исполнителя;<br/>
2. нахождение начальной строки по итоговой строке после применения команд Исполнителя;<br/>
3. анализ итоговой строки после применения команд Исполнителя (сумма цифр, количество, делимость, поиск простых чисел).<br/>
<b>Способы решения таких задач:<br/></b>
- аналитический;<br/>
- алгебраический;<br/>
- с использованием языка программирования;<br/>
- с помощью электронных таблиц.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class='splitter-img-container splitter-con-right'>
					<div class='splitter-img-wrapper' style="background: url('/img/graphics/about/team.jpg') no-repeat center; background-size: cover;">
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Примеры</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
						<b>Пример №1.</b> <br/>Дана программа для Редактора:<br/>
НАЧАЛО<br/>
ПОКА нашлось(01) ИЛИ нашлось(02) ИЛИ нашлось(03)<br/>
заменить(01, 2302)<br/>
заменить(02, 10)<br/>
заменить(03, 201)<br/>
КОНЕЦ ПОКА<br/>
КОНЕЦ<br/>
Известно, что исходная строка начиналась с нуля, а далее содержала только единицы, двойки и тройки. После выполнения данной программы получилась строка, содержащая 58 единиц, 23 двойки и 15 троек. Сколько двоек было в исходной строке?<br/>

<b>Решение:</b><br/>
Алгебраический метод решения:<br/>
1) Для начала необходимо разобраться, сколько цифр 1, 2 и 3 дают строки 01, 02, 03.<br/>
01 – 2302 – 2310 после первой замены в составе последовательности есть 02, к которой можно применить еще замену.<br/>
02 – 10<br/>
03 – 201 – 22310 аналогично , замену можно применить два раза.<br/>
Таким образом, получается, что 01 дает одну 1, одну 2 и одну 3; 02 дает одну 1; 03 дает одну 1, две 2 и одну 3<br/>
Записав полученный результат в виде системы уравнений, получим<br/>
<img src="https://l.wordpress.com/latex.php?latex=%5Cleft%5C%7B%5Cbegin%7Bmatrix%7DX%2BY%2BZ%3D58%20%5C%5CX%2B2Y%3D23%20%5C%5CX%2BZ%3D15%5Cend%7Bmatrix%7D%5Cright.&amp;bg=FFFFFF&amp;fg=000000&amp;s=1" title="\left\{\begin{matrix}X+Y+Z=58 \\X+2Y=23 \\X+Z=15\end{matrix}\right." class="tex" alt="\left\{\begin{matrix}X+Y+Z=58 \\X+2Y=23 \\X+Z=15\end{matrix}\right."><br/>
Первое уравнение выражает количество 1 в итоговой строке, второе – количество 2 и, соответственно, третье – количество 3. <br/>После решения системы получим X=7, Y=43, Z=8<br/>
<b>Ответ: 43</b><br/>
<br/>
<b>Пример №2.</b> <br/>Дана программа для исполнителя Редактор:<br/>
НАЧАЛО<br/>
ПОКА нашлось (4444) ИЛИ нашлось (7777)<br/>
ЕСЛИ нашлось (4444)<br/>
ТО заменить (4444, 77)<br/>
ИНАЧЕ заменить (7777, 44)<br/>
КОНЕЦ ЕСЛИ<br/>
КОНЕЦ ПОКА<br/>
КОНЕЦ<br/>
Какая строка получится в результате применения приведённой выше программы к строке, состоящей из 86 идущих подряд цифр 4? В ответе запишите полученную строку.<br/>

<b>Решение:</b><br/>
Программный способ решения (Python):<br/>
1) Записываем исходную строку в строковую переменную s= 86*'4'<br/>
2) Далее формируем цикл с предусловием. Два условия объединяем связкой «or» (логическое ИЛИ).<br/>
3)В тело цикла помещаем условный оператор: при выполнении условия будет произведена одна замена, в противном случае – другая.<br/>
Программа:<br/>

s = 86*'4'<br/>
while "4444" in s or "7777" in s:<br/>
if "4444" in s:<br/>
s = s.replace( "4444", "77", 1 )<br/>
else:<br/>
s = s.replace( "7777", "44", 1 )<br/>
print(s)<br/>
<b>Ответ: 44</b><br/>
<br/>
						</p>
						</body>
					</div>
				</div>		
	</div>
</div>
</div>
</div>
<?php include 'lib/module/inc-footer.php';?>
</html>