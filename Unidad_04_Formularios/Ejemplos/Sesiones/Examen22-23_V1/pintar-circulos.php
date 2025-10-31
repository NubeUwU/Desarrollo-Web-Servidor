<?php
function pintar_circulos($col1, $col2, $col3, $col4) {
    $colores = [$col1, $col2, $col3, $col4];

    foreach ($colores as $color) {
        echo "<div style='width:150px; height:150px; background-color:$color;
                border:3px solid black; border-radius:50%; display:inline-block; margin:10px;'></div>";
    }
}
?>
