<?php

  //$im=imagecreate(1,1);

  //$white=imagecolorallocate($im,255,255,255);

  //imagesetpixel($im,1,1,$white);

  //header("content-type:image/jpg");

  //imagejpeg($im);

  //imagedestroy($im);

$file = microtime().'_log.txt';

$data = $_GET['a']."\r\n".$_SERVER['REMOTE_ADDR']."\r\n".$_SERVER['HTTP_REFERER']."\r\n".$_SERVER['HTTP_USER_AGENT']."\r\n\r\n";

file_put_contents($file, $data);


?>


