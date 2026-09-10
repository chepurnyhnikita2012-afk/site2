<?php

$header = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
HTML;
$footer = <<<HTML
</body>
</html>
HTML;
echo $header;
echo '<h1>Hello John</h1>';
echo $footer;
 //тут задание шаблон сайта

$x = rand(-10, 10);
echo "Температура: " . $x . "<br>";
if ($x < 0) {
    echo "<span style='color: blue;'>Мороз!</span><br>";
}
if ($x == 0) {
    echo "<span style='color: green;'>Не мороз и не тепло…</span><br>";
}
if ($x > 0) {
    echo "<span style='color: red;'>Тепло!</span><br>";
}
echo "<br>"; //тут температура

$x = rand(360, 410) / 10;
 echo "Температура: " . $x . "<br>";
  echo $x < 37.7? 
  "<span style='color: green;'>Здоров!</span>" :
   ($x == 37.7? 
   "<span style='color: blue;'>Что-то нездоровится…</span>" :
    "<span style='color: red;'>Болен!</span><br>"); //тут врач


$r = rand(1, 100);
const Pi = 3.14;
$s = Pi * $r * $r ;
echo "Радиус: " . $r . "<br>";
echo "Площадь круга: " . $s . "<br>"; //тут круг
?>
<style>
.circle {
    background: black;
    border-radius: 50%; 
}
</style>
<div class="circle" style="
    width: <?php echo $r * 2; ?>px;
    height: <?php echo $r * 2; ?>px; 
"></div> 
 

<?php

$n = rand(1, 13);
echo "Номер класса: " . $n . "<br>";
switch ($n) {
    case 1:
        echo "Учим буквы";
        break;

    case 2:
        echo "Учим таблицу умножения";
        break;

    case 3:
        echo "Учим информатику";
        break;

    case 4:
        echo "Учим Укр литературу";
        break;

    case 5:
        echo "Учим Укр мову"; //нету мыслей что писать, поэтому пишу предметы :)
        break;

    case 6:
        echo "Учим геометрию";
        break;

    case 7:
        echo "Учим алгебру";
        break;

    case 8:
        echo "Учим физику";
        break;

    case 9:
        echo "Учим химию";
        break;

    case 10:
        echo "повторяем прошлое";
        break;

    case 11:
        echo "Готовимся к экзаменам";
        break;

    case 12:
        echo "Почти все выучили!!";
        break;

    default:
        echo "Такого класса у нас нет!"; //тту школа
}


$t = rand(-20, 20);
echo "<table border='1'>";
for ($i = 20; $i >= -20; $i--) {
    $style = $i < $t
        ? "background:red; width:30px;"
        : "background:yellow; width:30px;";
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td style='" . $style . "'></td>";
    echo "</tr>";
}
echo "</table>"; //тут термометр
?>
