<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>
        Testes de Tipos Primitivos
    </h1>
    <?php 
        // 0x = hexadecial ob = binario 0 = octal
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = true;
        // var_dump($v)

        // $num = (integer) 3e2 // 3 x 10(2) coerção
        // echo "O valor é $num";

        // $num = (float) "950";
        // var_dump($num)

        // $casado = false;
        // var_dump($casado)
        // print "O valor para casado é $casado"

         //$vet = [6, 2, 9, 3, 5];
         //echo "O vetor é $vet";
         //var_dump($vet);

         class Pessoa {
            private string $nome;
         }

         $p = new Pessoa;
         var_dump($p)

    ?>
</body>

</html>