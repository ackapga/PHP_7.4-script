<?php
$title = "@ackapga";
$h1 = "Информация обо мне";
$year = date("Y");

$content = file_get_contents('site.html'); // Обычное подключение: include "site.php";

$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ h1 }}", $h1, $content);
$content = str_replace("{{ year }}", $year, $content);

echo $content;