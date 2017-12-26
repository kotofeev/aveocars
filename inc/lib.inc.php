<?php
// Отрисовка меню
function drawMenu ($menu, $vertical = true) {
    $style = "";
    if(!$vertical)
        $style = " style = 'display:inline; margin-right:15px'";

    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li$style>";
        echo "<a href='{$item['href']}'>{$item['link']}</a>";
        echo "</li>";
    }

    echo "</ul>";

}


// Отрисовка таблицы
function drawTable($cols = 20, $rows = 20, $collor = 'green') {
    echo "<table border='1'>";
    for($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";

        for ($td = 1; $td <= $cols; $td++) {
            if ($tr == 1 or  $td ==1 )
                echo "<th style='background: $collor'>". $tr*$td . "</th>";
            else
                echo "<td>". $tr*$td . "</td>";

        }

        echo "</tr>";
    }
    echo "</table>";
}
?>