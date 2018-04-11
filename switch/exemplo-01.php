<?php

// Estruturas de controle de fluxo
$diaDaSemana = date("w");

echo $diaDaSemana;
echo "<br/>";

switch ($diaDaSemana) {

    case 0:
    echo "Domingo<br/>";
      # code...
      break;

      case 1:
      echo "Segunda<br/>";
        # code...
        break;

        case 2:
        echo "Terça<br/>";
          # code...
          break;

          case 3:
          echo "Quarta<br/>";
            # code...
            break;

            case 4:
            echo "Quinta<br/>";
              # code...
              break;

              case 5:
              echo "Sexta<br/>";
                # code...
                break;

                case 6:
                echo "Sábado<br/>";
                  # code...
                  break;

  default:
  echo "Data inválida<br/>";
    # code...


    break;
}
