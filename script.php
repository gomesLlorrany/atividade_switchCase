<body>
<div>
<?php
    $favcolor = $_POST["favcolor"];
    // Utilizando o switch case para determinar a cor favorita
 
     switch ($favcolor) {
 
        case "vermelho":
             echo "<p>Sua cor favorita é vermelho!</p>";
            break;
 
        case "azul":
            echo "<p>Sua cor favorita é azul!</p>";
            break;
 
        case "verde":
            echo "<p>Sua cor favorita é verde!</p>";
            break;
 
            case "nenhum":
                echo "<p>Sua cor favorita não é nenhuma das opções!</p>";
                break;
 
        default:
            echo "<p>Sua cor favorita não é vermelho, azul ou verde!</p>";
    }
?>
</div>
</body>