<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Manipulação de Strings</title>
</head>

<body>
    <h1> Manipulação de Strings</h1>
    <?php 
        $nome = 'Gabriel';
        echo "Seu nome é $nome"; // Aspas duplas interpreta o texto
        echo ' Seu nome é $nome'; // Aspas simples não interpreta, apenas replica o que está escrito

        echo " Estamos no ano de " . date('Y') // . é sinal de interpolação    
    ?>
    <h2> Sequência de Escape
        <ul>
            <li>
                \n = Nova Linha
            </li>
            <li>\t = Tabulação Horizontal</li>
            <li>\\ = Barra invertida</li>
            <li>\$ = Sinal de Cifrão</li>
            <li>\u{} = Codepoint Unido</li>
        </ul>
    </h2>
</body>

</html>