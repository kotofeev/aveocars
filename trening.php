<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тренировка с массивом</title>
</head>
<body>
Тренировка с массивом

<?php
echo "<hr>";
$leftMenu = [
    ['link'=>'Домой', 'href'=>'index.php'],
    ['link'=>'О нас', 'href'=>'about.php'],
    ['link'=>'Контакты', 'href'=>'contact.php'],
    ['link'=>'Таблица умножения', 'href'=>'table.php'],
    ['link'=>'Калькулятор', 'href'=>'calc.php']
];
print_r($leftMenu);

$bug = ["Шарова", "Нестерова", "Кэп", "Юлия", "Вован"];

echo "<hr>";

foreach ($bug as $key=>$spisok)
{
    echo $key . " > " . $spisok . "<br>";
}

?>
<hr>
А ща выведим Шарову:
<br>

<?php

echo $bug[0];


?>



</body>
</html>