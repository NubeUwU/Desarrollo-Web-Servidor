<?php
function pintar_circulos($col1, $col2, $col3, $col4) {
    $cols = [$col1, $col2, $col3, $col4];

    foreach ($cols as $color) {
        echo "<div style='width:250px; height:250px; background-color:$color; border:3px solid black; border-radius:50%; display:inline-block; margin:10px;'></div>";
    }
    
    echo "</div>";
}
?>
