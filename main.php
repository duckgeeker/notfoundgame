<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="icon" type="image/ico" href="/ico/logo_white.ico">
<head>
	<title>duckgeek</title>
</head>
<body>
	<div id="desktop_version">
		<header>
			<div class="conteiner">
				<div id="logo">DUCKGEEK</div>
				<div id="lang">EN</div>
			</div>
		</header>
		<div class="conteiner">
			<div id="block_1m">
				
			</div>
			<div id="block_1">
				<h2>Тримаю напрямок на крейзі рішення.</h2>
				<div class="arrow" id="scroll">
				
					<div onclick = 'window.scrollBy(0, window.innerHeight)'>
						<img src="/image/arrow.png" width="48px">
					</div>
				</div>
			</div>
		</div>
		<div class="conteiner_hor">
		
		
				<div id="block_2" class="slider">
					<p class="title">Трохи про мене</p>
					<div class="text_area">
						<div class="line"></div>
						<p>18-річний студент 3-го курсу Київського коледжу зв'язку, спеціальність "software developer". Бажаю вижати максимум з навчання, тому зараз в пошуках робочого місця в ІТ-компанії. Адже, саме практика надає знання.</p>
					</div>
					
					<button class="button_next" onclick="plusDivs(1)">
						<p class="next">Навички</p>
						<div class="arrow">
							<img src="/image/arrow_w.png" width="24px">
						</div>
					</button>
					
				</div>
			
				<div id="block_3" class="slider">
					<p class="title">Навички та скіли</p>
					<div class="text_area">
						<div class="line"></div>
						<p>Графічний дизайн: photoshop, illustrator, xd, zeplin;<br>Монтаж відео-матеріалів: movavi, sony vegas;<br>Основи програмування: c++, c#, js, php, css, html;</p>
					</div>
					<button class="button_next" onclick="plusDivs(1)">
						<p class="next">Портфоліо</p>
						<div class="arrow">
							<img src="/image/arrow_w.png" width="24px">
						</div>
					</button>
				</div>
				
				<div id="block_4" class="slider">
					<p class="title">Досвід в проектах</p>
					<div class="group_box">
						<a href="https://freelancehunt.com/freelancer/Dack.html">
						<div class="box_view">
							<div class="line" style="height:80%;"></div>
							<img src="/image/freelancehunt.png" width="50%">
							<p>freelancehunt.com</p>
						</div>
						</a>
						<a href="https://zismo.biz/topic/980472-kachestvennaia-grafika-ot-liubitelia-s-opytom/">
						<div class="box_view">
							<div class="line" style="height:40%;"></div>
							<img src="/image/zismo.png" width="50%">
							<p>zismo.biz</p>
						</div>
						</a>
					</div>
	
					<button class="button_next" onclick="plusDivs(1)">
						<p class="next">Про мене</p>
						<div class="arrow">
							<img src="/image/arrow_w.png" width="24px">
						</div>
					</button>
					
				</div>
			
		</div> <!--conteiner_hor end-->
		
		<div class="conteiner">
			<div id="block_5">
				<p class="title">Зв'язок та соц. мережі</p>
				<div class="box_media">
					<div class="line_link">
					
						<div class="link">
							<p class="media">Instagram.com</p>
							<div class="dropup-content">
								<div class="btw_cnt">
									<p>іноді викладую свої творіння</p>
									<a href="https://www.instagram.com/notfoundgame/">деталі...</a>
								</div>
							</div>
						</div>
						<div class="link">
							<p class="media">Telegram.org</p>
							<div class="dropup-content">
								<div class="btw_cnt">
									<p>тут ти можеш зі мною спілкуватись 24/7</p>
									<a href="https://t.me/duckgeek">деталі...</a>
								</div>
							</div>
						</div>
						<div class="link">
							<p class="media">Twitter.com</p>
							<div class="dropup-content">
								<div class="btw_cnt">
									<p>давно не заходив, але там багато цікавої інфи</p>
									<a href="https://twitter.com/DenysShendryk">деталі...</a>
								</div>
							</div>
						</div>
						<div class="link">
							<a href=""><p class="media">Gmail.com</p></a>
							<div class="dropup-content">
								<div class="btw_cnt">
									<p>рідко відповідаю</p>
									<p style="position:absolute; right:0px; top:30px; font-size:0.8em;">guwig13@gmail.com</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<img src="/ico/logo_b.ico" width="150px">
			</div>
		</div>
		
		
			<script>
				var slideIndex = 1;
				showDivs(slideIndex);
				
				function plusDivs(n) {
				    if	(n >= 3){
						n=0;
					}
				    showDivs(slideIndex += n);
				}
				
				function showDivs(n) {
				  var i;
				  var x = document.getElementsByClassName("slider");
				  if (n > x.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = x.length}
				  for (i = 0; i < x.length; i++) {
				    x[i].style.display = "none";  
				  }
				  x[slideIndex-1].style.display = "block";  
				}
			</script>	
	</div><!--desktop_version-->
	<div id="mobile_version">
		<div class="block_up">
			<h1>DUCKGEEK</h1>
			<h2>coding & design</h2>
		</div>
		<div class="block_down">
			<div onclick = 'window.scrollBy(0, window.innerHeight)'>
				<img src="/image/arrow.png" width="160px">
			</div>
		</div>
		
		<div class="about">
			<div class="me">
				<h2>Про мене</h2>
				<p>18-річний студент 3-го курсу Київського коледжу зв'язку, спеціальність "software developer". Бажаю вижати максимум з навчання, тому зараз в пошуках робочого місця в ІТ-компанії. Адже, саме практика надає знання. </p>
			</div>
			<div class="skills">
				<h2>Навички та скіли</h2>
				<p>Графічний дизайн: photoshop, illustrator, xd, zeplin;</p>
				<p>Монтаж відео-матеріалів: movavi, sony vegas;</p>
				<p>Основи програмування: c++, c#, js, php, css, html;</p>
			</div>
		</div>
		
		<div class="slider_m">
			<!--внутнішні елементи слайдера-->
			<div class="coub" id="firstCoub" style="left:420px;" value="0">
					<div class="coub_view">
						<div class="c2">
							<a href="https://freelancehunt.com/freelancer/Dack.html#portfolio">		
								<img src="/image/freelancehunt.png" width="80%">
								<p>freelancehunt.com</p>
							</a>
						</div>
					</div>	
			</div>
			
			<div class="coub" id="secondCoub" style="left:1160px;"  value="1">
					<div class="coub_view">
						<div class="c2">
							<a href="https://zismo.biz/topic/980472-kachestvennaia-grafika-ot-liubitelia-s-opytom/">
								<img src="/image/zismo.png" width="80%">
								<p>zismo.biz</p>
							</a>
						</div>
					</div>
			</div>
		</div>
		
		<script>
			
			document.getElementById("firstCoub").onclick = function() {moveSlider()};
			document.getElementById("secondCoub").onclick = function() {moveSlider1()};
			
			function moveSlider(){
				var f = document.getElementById("firstCoub").getAttribute('value');
				var s = document.getElementById("secondCoub").getAttribute('value');
				
				if( f == 0 && s == 1 ){
					document.getElementById("firstCoub").style.left = "420px";
					document.getElementById("secondCoub").style.left = "1160px";
				}
				if( f == 1 && s == 0 ){
					document.getElementById("firstCoub").style.left = "420px";
					document.getElementById("secondCoub").style.left = "1160px";
					f = 0; 
				}
			}
			function moveSlider1(){
				var f = document.getElementById("firstCoub").getAttribute('value');
				var s = document.getElementById("secondCoub").getAttribute('value');
				
				if( f == 0 && s == 1 ){
					document.getElementById("firstCoub").style.left = "1160px";
					document.getElementById("secondCoub").style.left = "420px";
					s = 0;
				}
				if( f == 1 && s == 0 ){
					document.getElementById("firstCoub").style.left = "1160px";
					document.getElementById("secondCoub").style.left = "420px";
				}
			}
		
		
		</script>
		
		<div class="contact">
			<img src="/ico/logo_white.ico" width="450px">	
			<div class="info_me">
			
				<h3>Instagram.com</h3>
				<a>@notfoundgame</a>
				<a>@duckgeek_</a>
				
				<h3>Telegram.org</h3>
				<a>@duckgeek</a>
				
				<h3>Twitter.com</h3>
				<a>@DenysShendryk</a>
				
			</div>
		</div>
	
	
	</div>
</body>
</html>