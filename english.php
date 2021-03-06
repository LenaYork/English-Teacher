<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">	
    <title>Document</title>
</head>
<body>
    <article>
		<nav>
			<button type="button" class="btn btn-success toggleButton" id = 'why'>Зачем нужен английский язык</button>
			<button type="button" class="btn btn-success toggleButton" id = 'levels'>Уровни английского языка</button>
			<button type="button" class="btn btn-success toggleButton" id = 'how'>Как проходят занятия</button>
			<button type="button" class="btn btn-success toggleButton" id = 'about'>О преподавателе</button>
			<button type="button" class="btn btn-success toggleButton" id = 'feedback'>Записаться на урок / задать вопрос</button>
		</nav>
		<div id = 'hideBlock'>
		
			<div id = 'levelsCase' class = "addInfo" >
			
				<div class="alert alert-primary" role="alert">
					Существует 7 уровней владения английским языком:
				</div>
				
				<div class="alert alert-success" role="alert">
					<b>Starter/Beginner.</b> Это минимальные знания языка.
				</div>
				
				<div class="alert alert-success" role="alert">
					<b>A1: Elementary.</b> Уровень "выживания", базовые знания на бытовом уровне.
				</div>
				
				<div class="alert alert-success" role="alert">
					<b>A2: Pre-Intermediate.</b> Этот уровень позволяет в общих чертах понимать собеседника, строить простые предложения и поддерживать диалог.
				</div>
				
				<div class="alert alert-success" role="alert">
					<b>B1: Intermediate.</b> "Средний" уровень владения языком предполагает способность построить более сложные предложения с использованием различных грамматических конструкций.
				</div>
				
				<div class="alert alert-success" role="alert">
					<b>B2: Upper-Intermediate.</b> Именно этот уровень чаще всего указывают в вакансиях в списке требований к кандидатам. Уровень "выше среднего" - это серьезная заявка на владение языком, умение грамотно и красиво излагать свои мысли, понимать собеседника и оперировать многочисленными временами английского языка. Этот уровень позволяет пробовать свои силы в международных экзаменах TOEFL и IELTS. 
				</div>
				
				<div class="alert alert-success" role="alert">
					<b>C1: Advanced.</b> Продвинутый уровень позволяет непринужденно общаться с собеседником на любую тему, даже абсолютно вам не знакомую, ведь здесь важна беглость речи. Это живая, спонтанная англоязычная речь. 
				</div>
				
				<div class="alert alert-success" role="alert">
					<b>C2: Proficiency.</b> Знание английского на уровне носителя языка. Наивысший уровень владения языком позволяет стопроцентно понимать любые виды текстовой или аудиоинформации, учавствовать в научных дискуссиях, писать любые виды писем, эссе, документов, читать и полностью понимать сложные художественные и научные тексты
				</div>
				
			</div>
		
			<div id = 'howCase' class = "addInfo">
			
				<div class="alert alert-primary" role="alert">
					Ответы на самые частые вопросы:
				</div>
						
					<h3>Где проходят занятия?</h3>
						<div> <p>Занятия проходят по Skype.</p></div> 
					<h3>Что нужно для занятий?</h3>	 
						<div> <p> Все, что нужно для занятия, это компьютер, интернет, наушники и свободное время.</p></div> 
					<h3>Какие нужны учебники?</h3>	
						<div> <p>  Все материалы предоставляются преподавателем в электронном варианте. Они включают в себя британские и американские учебники в формате PDF, аудио и видеоматериалы.</p></div> 
					<h3>Сколько времени нужно, чтобы повысить свой уровень?</h3>		 
						<div>  <p> Все зависит от вашего уровня знаний, периодичности занятий, количества времени, которое вы можете уделять на домашнее задание. В среднем на освоение одного уровня уходит от полугода до нескольких месяцев. Как правило, каждый последующий уровень дается легче и осваивается быстрее предыдущего.</p></div> 
					<h3>Как узнать свой уровень?</h3>	
						<div> <p> Вы можете пройти онлайн тесты и определить свой уровень знаний <a href = 'http://www.cambridgeenglish.org.ru/test-your-english/'>здесь</a>.</p></div> 
					
			</div>	
		
			<div id = 'aboutCase' class = "addInfo">
					
				Меня зовут Елена, я преподаватель английского языка второй категории. Преподаю английский 8 лет. За плечами преподавание в гимназии, колледже, в языковой школе и индивидуальное репетиторство.
				В своей работе я ориентируюсь на потребности ученика и его багаж знаний. Я не использую готовые шаблоны уроков для всех учеников, предпочитаю индивидуальный подход.
				Помогаю ученикам повысить уровень владения английским языком, подготовиться к англоязычному собеседованию, разобраться с тонкостями грамматики.
				Мои дипломы и сертификаты:
				
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					  </ol>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="d-block w-100" src="media/sertif3.jpg"    alt="First slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="media/sertif2.jpg"    alt="Second slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="media/sertif1.jpg"    alt="Third slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="media/sertif4.jpg"   alt="Fourth slide">
						</div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				
			</div>
			
			<div id = 'feedbackCase' class = 'container addInfo' >
			
		<?php
						
					if (count($_POST) > 0 ) {
						$msg  = 'Ваше сообщение отправлено.';
						$showForm = false;
						
						$dt = date('Y-m-d H:i:s');
						$name = trim($_POST['userName']);
						$email = trim($_POST ['userEmail']);
						$message = trim($_POST ['userMessage']);
						
						
						file_put_contents('app.txt', "$dt $name $email $message\n"  , FILE_APPEND); 
						//создает файл в localhost, в который выводит значения переменных при каждом вводе

					
						mail ('lenayork@tut.by', 'Новая заявка', "$dt $name $email $message" );
					
					} else {$msg = 'Заполните все поля';
					$showForm = true;}
		?>
				
				<?php if ($showForm) { ?>
				<form method = 'post'>
							
					<fieldset class = "form-group row">
						<label for = 'name' class="col-sm-2" > Введите ваше имя </label>
						<div class="col-sm-10">
							<input type = 'text' id = 'userName' class = 'form-control' placeholder="Имя" name = 'userName' required="required"></input>
						</div>
					</fieldset>	
					
					<fieldset class = "form-group row">
						<label for  = 'email' class="col-sm-2"  \> Введите ваш email</label>
						<div class="col-sm-10">
							<input type = 'email' id = 'userEmail' class = 'form-control' placeholder= "name@example.com" name = 'userEmail' required="required"></input>
						</div>
					</fieldset>
					
					<fieldset class = "form-group row">
						<label for  = 'message' class="col-sm-2" > Ваше сообщение</label>
						<div class="col-sm-10">
							<textarea type = 'text' id = 'message' class = 'form-control' placeholder="Ваше сообщение" name = 'userMessage' required="required"></textarea>
						</div>
					</fieldset>
					
					<input type = 'submit' value = 'Отправить сообщение' id = 'getData' class="btn btn-success"></input>
									
				</form>
				<?php } ?>
				<?php 
					echo $msg;
			
				?>
			</div>
			
			<div id = 'whyCase' class = "addInfo card-group">
				<div class="alert alert-primary" role="alert">
					Для чего в современном мире нужен английский? Именно этот язык является международным, поэтому, освоив его, вы откроете для себе много возможностей в самых разных сферах жизни:<br>
				</div>
				
				<div class="card text-white bg-success mb-3">
					<div class="card-header"> ПУТЕШЕСТВИЯ</div>
					<div class="card-body">
					<h5 class="card-title">Владея английским, вы спокойно путешествуете по другим странам, ведь с большой долей вероятности местное население или другие туристы будут понимать международный язык.</h5>
				</div>
				</div> 
			
				<div class="card text-white bg-success mb-3">
					<div class="card-header"> РАБОТА</div>
					<div class="card-body">
					<h5 class="card-title">Вы можете читать журналы, книги, научные статьи, узнавать о нововведениях в вашей профессиональной области одним из первых.</h5>
				</div>
				</div>
				
				<div class="card text-white bg-success mb-3">
					<div class="card-header"> ОТДЫХ</div>
					<div class="card-body">
					<h5 class="card-title">Вы можете смотреть любимые сериалы и новинки кинематографа на языке оригинала, без необходимости ждать перевода. А слушать песни любимого исполнителя и понимать, о чем они - еще один приятный бонус.</h5>
				</div>
				</div>
								
				<div class="card text-white bg-success mb-3">
					<div class="card-header"> РАЗВИТИЕ</div>
					<div class="card-body">
					<h5 class="card-title">Как показывают исследования, изучение иностранного языка благоприятно сказываются на нашей психике и улучшают память. Почему бы не совместить приятное с полезным?</h5>
				</div>
				</div>
				
				<div class="card text-white bg-success mb-3">
					<div class="card-header"> ОБЩЕНИЕ</div>
					<div class="card-body">
					<h5 class="card-title">Интернет подарил нам прекрасную возможность общения с людьми из разных уголков мира, а благодаря знанию английского вы можете заводить новых друзей и знакомых и общаться с ними.</h5>
				</div>
				</div>
				
				<div class="card text-white bg-success mb-3">
					<div class="card-header"> ГЛОБАЛЬНЫЕ ПЕРЕМЕНЫ</div>
					<div class="card-body">
					<h5 class="card-title">При переезде в англоязычную страну вы сможете пройти собеседование, найти жилье и познакомиться с соседями намного быстрее, чем соотечественники, решившие учить язык "на месте" с нуля.</h5>
				</div>
				</div>
		 </div>
		
		</div>
			
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		
    </article>
    
    <script>
			
		$(".toggleButton").click(function(){
			$(".addInfo").hide();
				var divid = $(this).attr("id") + "Case";
					if ($("#"+divid).css('display') == 'none')
					{
					$("#"+divid).fadeIn(1000);
						}
						else
						{
						$("#"+divid).fadeOut(1000);
					}  
			});
	</script>
	
</body>
</html>