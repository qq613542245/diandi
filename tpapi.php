<?php
 //这将得到一个文件夹中的所有gif，jpg和png图片的数组 
$img_array = glob("https://cdn.jsdelivr.net/gh/qq613542245/diandi@main/manifest/*.{gif,jpg,png}",GLOB_BRACE);
 //从数组中选择一个随机图片 
$img = array_rand($img_array);
//在页面显示图片 
header("location:.$img_array[$img]"); 
 ?>
