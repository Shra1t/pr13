<?php
$dir = '../settings'; // директория для сканирования папки settings
$items = scandir($dir); // сканируем директорию

print_r($items); // выводим на печать
?>

