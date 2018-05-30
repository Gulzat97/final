<?php
/**
 * Created by PhpStorm.
 * User: Gulzat
 * Date: 15.04.2018
 * Time: 0:36
 */


$ran = rand(0000, 9999);
$put = '../user_image/';
$uploadfile = $put.basename($_FILES['filename']['name']);

if(isset($_FILES['filename']['name']) && ($_FILES ['filename'] != '' ))
{  $name = $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"], $put.$ran.$name);
    $namefile = $ran.$name;

    include_once ("db.php");
    mysql_query(" INSERT INTO image (img) VALUES('$namefile')	
	");

    echo "name = $namefile";
   // echo "image: ";
    //echo "<img src='../user_image/".$namefile."'/>";?>
 </br>
    <?php
}
else { echo "False";  }

print "</pre>";



?>