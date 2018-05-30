<!doctype html>
<html lang="ru-RU">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no, maximum-scale=1" >

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Main/css/style.css">

   <link rel="stylesheet" href="allnews/css/single-post.css">
	<link rel="stylesheet" href="allnews/css/styles.css">
	<link rel="stylesheet" href="allnews/css/responsive.css">
	<link rel="stylesheet" href="allnews/css/auth.css"> 


</head>
<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top" id="nav1">
    <a class="navbar-brand " >
      <img src="Main/images/logo.png" width="40" height="40" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
7    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-auto" >
        <li class="nav-item active">
          <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="signIn/index.php">Войти</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signUp/index.php">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="allnews.php">Bce новости</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ссылка3</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="#">О нас</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" method="post" action="find/find.php">
        <input class="form-control mr-sm-2 col-8" type="search" placeholder="Поиск" aria-label="Search" name="title">
 
       <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="search">Найти</button> -->
        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="find" value="find"/>
      </form>
    </div>
  </nav>

  <header class="v-header container">
    <div class="fullscreen-video-wrap" >
      <video src="Main/video/kg.mp4" autoplay="" loop="">  </video>
    </div>
  </header>



<?php require_once 'last5news/header.php' ?>
<?php
include_once("last5news/db.php");
$result = mysql_query(" SELECT id,title,text,date,time,author_id FROM news ORDER BY id DESC");?>

	<div class="main">
		<div class="main-holder">
			<div class="posts">
							<?php
					for($i = 0; $i < 5; $i++) {
						$row = mysql_fetch_array($result);
						$title = $row['title'];
						$text = $row['text'];
						$date = $row['date'];
						echo
							"<div class='post'>
							<!--	<a href='last5news/post.php'> 
										<img class='post-img' src='last5news/img/$i.jpg' alt=''> -->
                <img class='post-img' src='last5news/img/$i.jpg' alt=''>    
								</a>
								<div class='post-text'>
							<!--		<a href='last5news/post.php'> -->
										<h2 class='post-title'>
											$title
										</h2>
									</a>
									
									<div class='post-intro'>
									  $text  
										
									</div>
									 <div class='post-date'>
									    $date
									</div> 
								</div>
							</div>";
					}
				?>	
			</div>
		</div>
	</div>


<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"  aria-label="Toggle navigation">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"  aria-label="Toggle navigation">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only" >Next</span>
</a>
</div>


<div class="container-fluid">
  <div class="container">
    <div class="row text-center justify-content-center">

      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="Main/images/1.jpg" > 
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all) </p></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="Main/images/1.jpg" >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all).</p> </div> 
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="Main/images/1.jpg" >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all).</p></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="Main/images/1.jpg"  >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all).</p></div> 
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="Main/images/1.jpg"  >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all) </p></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="Main/images/1.jpg"  >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all) </p></div> 
    </div>
  </div>
</div>
<!--
<div class="card-columns">
<a href="#">
  <div class="card">
    <img class="card-img-top" src="Main/images/1.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card1 title that wraps to a new line</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</a>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>

  <div class="card">
    <a href="#">
    <div class="card">
    <img class="card-img-top" src="Main/images/2.jpeg" alt="Card image cap">
      <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    </div>
</a>

  </div>

  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text">
        <small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  
  <div class="card">
 <a href="#">
  <div class="card">
    <img class="card-img-top" src="Main/images/3.jpeg" alt="Card">
    <div class="card-body">
      <h5 class="card-title">Card1 title that wraps to a new line</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</a>
  <blockquote class="blockquote mb-0">
          <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>

    <div class="card p-3 text-right">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">подробно</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>  
  </div> 
-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="Main/js/jquery v3.3.3.1.js">
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript" src="script.js"></script>


<script>
jQuery(document).ready(function() {
  jQuery("a.scrollto").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, -1000);
    return false;
  });
});
</script>
</body>
</html>