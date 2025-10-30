<?php
function pintar_circulos($colores) {
    foreach ($colores as $color) {
        echo "<div style='width:150px; height:150px; background-color:$color; border:3px solid black; border-radius:50%; display:inline-block; margin:10px;'></div>";
    }
}
?>
