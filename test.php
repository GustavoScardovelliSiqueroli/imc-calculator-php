<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <div class="main">


        <div class="form-content">
            <label for="">Resultado de IMC</label>

            <div class="imc-result">


                <?php

                function calcImc($peso, $altura)
                {
                    $imcArray = [
                        [16, "Magreza Grau III"],
                        [16.9, "Magreza Grau II"],
                        [18.4, "Magreza Grau I"],
                        [24.9, "Adequado"],
                        [29.9, "Pré-Obeso"],
                        [34.9, "Obesidade Grau I"],
                        [39.9, "Obesidade Grau II"],
                        [40, "Obesidade Grau III"]
                    ];

                    $imc = $peso / ($altura ^ 2);

                    if ($imc > $imcArray[sizeof($imcArray) - 1][0]) {
                        return [$imc, $imcArray[sizeof($imcArray) - 1][1]];
                    } else {

                        for ($i = 0; $i < (sizeof($imcArray) - 1); $i++) {

                            if ($imc <= $imcArray[$i][0]) {
                                return [$imc, $imcArray[$i][1]];
                            }
                        }
                    }
                };

                $result = calcImc($_POST['peso'], $_POST['altura']);
                echo " <span> Seu imc é: " . $result[0] . ";</span> <br> <span>O resultado dele é: " . $result[1] . "</span>";
                ?>

            </div>
            <button type="submit" id="re-calc">Calcular novamente</button>

        </div>
    </div>

    
</body>
<script type="module" src="./script.js"></script>

</html>