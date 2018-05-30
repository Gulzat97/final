<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> adding news</title>
</head>
<body>
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
  echo
		"<div class='post'>
		<!-- <a href='post.php'> -->
		<img class='post-img' src='img/$i.jpg' alt=''>
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
				</div>"; $i++;
				echo $id ; ?>
	<input type="submit" class = "login100-form-btn" name = "delete" value = "DELETE">			
    <a href="edit.php?id=<?php echo $id;?>"> editing news</a>
   
	<?php  //mysql_close();
   }					
	?>

<form method="post" action="add.php"  enctype="multipart/form-data" ></br> Title of news </br>
    <input type="text " name="title"> </br>Text of news </br>
    <textarea cols="40"  rows="10" name="text1" ></textarea>  </br>

    Send this file: <input name="filename" type="file" />

    <?php echo "df = $user_id" ;  ?>
    <input type="hidden" name="id_user" value="<?php echo $user_id; ?>" />
    <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />
    <input type="hidden" name="time" value="<?php echo date("H:i:s"); ?>" />
    <input type="submit" name="add" value="add" />

</form>
<?php
if(isset($_POST['delete']))
{  mysql_query("DELETE * FROM `site`.`news` WHERE `news`.`id` = 26");  }

if(isset($_POST['add']))
{
    include "send.php";
    $id = strip_tags(trim($_POST['id']));
    $title = strip_tags(trim($_POST['title']));
    $text1 =  strip_tags(trim($_POST['text1']));
    //echo "text=  $text1";
    $errorMessage = ""; ?> </br>

    <?php 
    $date = $_POST['date'];
    $time = $_POST['time'];
    $user_id = $_POST['id_user'];
   // echo "user_id = $user_id";
    //echo "text=  $text1";


    mysql_query(" INSERT INTO news (title,text,date,time, users_id)
						VALUES('$title','$text1','$date','$time','$user_id')	
	");
   //  include ("send.php");
    mysql_close();
    echo "The news was succesfully added.";
}
?></br>
</body>
</html>


           
  


