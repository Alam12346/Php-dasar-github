<?php


$belanja = 100;
if ($belanja <= 100 && $belanja >= 90) {
    echo "A";
}   elseif ($belanja <= 89 && $belanja >= 80) {
    echo "B";
} elseif ($belanja <= 79 && $belanja >= 75) {
    echo "C";
}elseif ($belanja <= 74 && $belanja >= 60) {
    echo "D";
}elseif ($belanja <= 59 && $belanja >=0 ) {
    echo "E";
}


else {
    echo "sistem eror";
}

?>