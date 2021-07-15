<?php
$a = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique molestie hendrerit. Nulla ullamcorper dictum nibh, a venenatis est consectetur eget. Vestibulum suscipit augue tristique, varius felis eu, rhoncus mi. Suspendisse et nunc at lorem lobortis pellentesque in sed augue. Praesent ultricies faucibus egestas. Donec sit amet tempor massa. Cras metus risus, varius nec pulvinar nec, molestie eu urna. Praesent accumsan risus quis nunc dictum, quis ultricies sapien sollicitudin. Nullam in odio malesuada, varius felis semper, posuere eros. Sed imperdiet egestas mi. Nam rhoncus lobortis lorem. Curabitur ligula tortor, pulvinar quis eleifend ut, malesuada et felis. Integer lacinia dolor sed.';
// echo $a;
$link = 'https://lipsum.com/';
// echo $link;

//Сокращаем текст новости до первых 180 символов, добавляем многоточие.
$b = mb_substr($a, 0, 180).'...'.'<br>';
// echo $b;

//Добавляем текст новости в массив. Убираем пробелы, каждое слово попадает в отдельную ячейку, с уник. идентификатором.
$pieces = explode(" ", $b);
// echo $pieces[0]."<br>";
// echo $pieces[22]."<br>";
// echo $pieces[23]."<br>";
// print_r($pieces);

//Создаем массив, где хранятся 2 последних слова с многоточием.
$res = array_slice($pieces, -2, 2, true);
// print_r ($res);

//Массив преобразовываем в строку, добав. пробелы между словами.
$arrayToString = implode(" ", $res);
// echo $arrayToString;

//Строку преобразовываем в ссылку.
$result = '<a href="' . $link . '">' . $arrayToString . '</a>';
// echo $result;

//Берем основной массив, убираем два последних слова.
array_splice($pieces, -2);
// print_r($pieces);

//Добавляем к основному массиву ссылку на новость.
array_push($pieces, $result);
// print_r($pieces);

//Преобразовываем массив в строку, добавляем пробелы к словам, выводим на экран новость.
$arrayToStringOut = implode(" ", $pieces);
echo $arrayToStringOut;
?>

<!-- PHP и HTML. Напишите код на PHP
В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
Нужно в переменную $b записать сокращенный текст новости по правилам:
- обрезать до 180 символов
- приписать многоточие
- последние 2 слова и многоточие сделать ссылкой на полный текст новости.
Какие проблемы вы видите в решении этой задачи? Что может пойти не так?
Результат: ссылка на репозиторий с кодом и ваши комментарии. -->
