<?php

$belanja = -1000;
if ($belanja >= 15000) {
    echo "maka anda mendapatkan silverqueen";
}   elseif ($belanja <= 10000 && $belanja >= 5000) {
    echo "anda mendapatkan teh pucuk harum 2";
}   else {
    echo "anda mendapatkan cireng";
}

echo "program lampu lalu lintas <br>";
$lampu ="hijau";
switch ($lampu) {
    case "merah":
        echo "anda harus berhenti";
        break;
        case "kuning":
            echo "anda harus siap siap";
            break;
            case "hijau":
                echo "anda harus maju";
                break;

                default:
                echo " lampu lalu lintas eror";
                
}

?>