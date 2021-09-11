<?php echo "program memilih jurusan <br>";
$jurusan ="RPL";
switch ($jurusan) {
    case "RPL":
        echo "anda masuk jurusan RPL";
        break;
        case "TBSM":
            echo "anda masuk jurusan TBSM";
            break;
            case "TKRO":
                echo "anda masuk jurusan TKRO";
                break;

                default:
                echo " Data tidak di temukan";
            }
?>