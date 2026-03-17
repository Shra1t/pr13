<?php
$homepage = file_get_contents('../settings/connect_datebase.php'); // получаем контент файла настроек
echo htmlspecialchars($homepage); // выводим, экранируя символы HTML
?>

