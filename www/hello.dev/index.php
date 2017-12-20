<?php

  //$im=imagecreate(1,1);

  //$white=imagecolorallocate($im,255,255,255);

  //imagesetpixel($im,1,1,$white);

  //header("content-type:image/jpg");

  //imagejpeg($im);

  //imagedestroy($im);

$file = 'log.txt';

$data = file_get_contents($file);

$data .= $_GET['a']."\r\n".$_SERVER['REMOTE_ADDR']."\r\n".$_SERVER['HTTP_REFERE$

file_put_contents($file, $data);


?>


