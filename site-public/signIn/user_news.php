<!doctype html>
<html lang="ru-RU">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no, maximum-scale=1" >

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../Main/css/style.css">

   <link rel="stylesheet" href="../allnews/css/single-post.css">
  <link rel="stylesheet" href="../allnews/css/styles.css">
  <link rel="stylesheet" href="../allnews/css/responsive.css">
  <link rel="stylesheet" href="../allnews/css/auth.css"> 


</head>
<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top" id="nav1">
    <a class="navbar-brand " >
      <img src="../Main/images/logo.png" width="40" height="40" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-auto" >
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Главная <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../signUp/index.php">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../allnews.php">Bce новости</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ссылка3</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="#">О нас</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" method="post" action="../find/find.php">
        <input class="form-control mr-sm-2 col-8" type="search" placeholder="Поиск" aria-label="Search" name="title">
 
       <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="search">Найти</button> -->
        <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="find" value="find"/>
      </form>
    </div>
  </nav>



<form method="post" action="user_news.php"  enctype="multipart/form-data" >
    

<?php include_once("db.php"); ?>

<?php 
  $user = mysql_query("SELECT * FROM news WHERE users_id= '$user_id'");
  $i = 0;
while( $user_news = mysql_fetch_array($user))
{  $title = $user_news['title'];
   $text = $user_news['text'];
   $date = $user_news['date'];
   $time = $user_news['time'];
   $id = $user_news['id'];
   $img_id = $user_news['image_id'];

  $us_img = mysql_query("SELECT img FROM image WHERE image_id= '$img_id'");
   while( $use_img = mysql_fetch_array($us_img))
{  $imgnane = $use_img['img'];
   }
  echo "imgname = $imgnane";
  echo
    "<div class='post'>
    <!-- <a href='post.php'> -->
    <!-- <img class='post-img' src='img/$i.jpg' alt=''> -->
     <img class='post-img' src='../user_image/1199images.png' alt=''>  
    
    </a>
    <div class='post-text'>
    <!-- <a href='post.php'> -->
    <h2 class='post-title'>
        $title
    </h2>
      </a>
        <div class='post-intro'>
          $text           
        </div>
    <div class='post-date'>
        $date $time
    </div>
      </div>
        </div>";  $i++;
        echo $id ; ?>
  <input type="submit" class = "login100-form-btn" name = "delete" value = "DELETE">      
    <a href="edit.php?id=<?php echo $id;?>"> editing news</a>
   
  <?php  //mysql_close();
   }          
  ?>

    </br> Title of news </br>
    <input type="text " name="title"> </br>Text of news </br>
    <textarea cols="40"  rows="10" name="text1" ></textarea>  </br>

    Send this file: <input name="filename" type="file" />

    <?php echo $user_id;  ?>
    <input type="hidden" name="id_user" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />
    <input type="hidden" name="time" value="<?php echo date("H:i:s"); ?>" />
    <input type="submit" name="add" value="add" />


    <table border="5" cellpadding="5" align="left">
  <tr>
    <td>Первая ячейка</td><td>Вторая ячейка</td><td>Третья ячейка</td>
  </tr>
  <tr>
    <td>Четвертая ячейка</td><td>Пятая ячейка</td><td>Шестая ячейка</td>
  </tr>
</table>
</form>

<?php
if(isset($_POST['delete']))
{  mysql_query("DELETE FROM `site`.`news` WHERE `news`.`id` = 26");  }

if(isset($_POST['add']))
{
    //include "send.php";

   $ran = rand(0000, 9999);
$put = '../user_image/';
$uploadfile = $put.basename($_FILES['filename']['name']);

if(isset($_FILES['filename']['name']) && ($_FILES ['filename'] != '' ))
{  $name = $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"], $put.$name);
    $namefile = $name;

    include_once ("db.php");
   // mysql_query(" INSERT INTO image (img) VALUES('$uploadfile')
    mysql_query(" INSERT INTO image (img) VALUES('$uploadfile') 
  ");

    echo "name = $uploadfile";
  ?>
 </br>
    <?php

print "</pre>";



    $id = strip_tags(trim($_POST['id']));
    $title = strip_tags(trim($_POST['title']));
    $text1 =  strip_tags(trim($_POST['text1']));
    //echo "text=  $text1";
    $errorMessage = ""; ?> </br>

    <?php 
    $date = $_POST['date'];
    $time = $_POST['time'];
    $user_id = $_POST['id_user'];
   

   $img = mysql_query("  SELECT  image_id FROM image WHERE img = '$uploadfile'    ");


while( $user_img = mysql_fetch_array($img))
{  $img_id = $user_img['image_id'];
   }
   echo "image = $namefile.</br>"; 
   echo "img = $img_id";

  mysql_query(" INSERT INTO news (title,text,date,time, users_id, image_id)
            VALUES('$title','$text1','$date','$time','$user_id', $img_id)  
  "); 


 }
 else { echo "False";  }
  
   //  include ("send.php");
    mysql_close();
    echo "The news was succesfully added.";
}
?></br>



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
        <img class="w-100" src="../Main/images/1.jpg" > 
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all) </p></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="../Main/images/1.jpg" >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all).</p> </div> 
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="../Main/images/1.jpg" >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all).</p></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="../Main/images/1.jpg"  >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all).</p></div> 
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="../Main/images/1.jpg"  >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all) </p></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <img class="w-100" src="../Main/images/1.jpg"  >
        <h4>Welcome</h4>
        <p>Благодаря этому лайфхаку забываем про поиск и замену (find what, raplace with, replace next/all) </p></div> 
    </div>
  </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../Main/js/jquery v3.3.3.1.js">
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