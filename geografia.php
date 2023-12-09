<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução de Questões</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(255, 179, 102);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 100px auto;
            background-color:rgba(255, 255, 255, 0.5);;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .conteiner-pergunta {
            border: 2px solid #ccc;
            margin-bottom: 80px;
            padding: 10px;
            background-color: #fff;
        }
        .ultima-conteiner-pergunta {
            margin-bottom: 20px;
        } 
        h1 {
            text-align: center; 
            font-family: "Times New Roman", Times, serif; 
            font-size: 40px; 
            color: #333; 
        }
    </style>
</head>
<h1>GEOGRAFIA</h1>
<body>

<div class="container">
    <?php
    // Array de questões e resoluções 
    $questoes = array(
        array(
            'pergunta' => 'Qual é a capital da Bahia',
            'resposta' => 'Salvador.'
        ),
        array(
            'pergunta' => 'Qual é a diferença entre latitude e altitude',
            'resposta' => 'Enquanto a altitude corresponde à elevação de uma área com relação ao nível do mar, a latitude diz respeito à posição de uma área na superfície terrestre em relação ao paralelo de 0°, que é a linha do Equador..'
        ),
        array(
            'pergunta' => 'O que é a geopolítica',
            'resposta' => 'A Geopolítica é uma área de estudo que analisa as relações entre os países e territórios do mundo.'
        ),
        array(
            'pergunta' => 'Defina o que foi a Primavera Arábe',
            'resposta' => 'A Primavera Árabe foi uma série de protestos de rua que aconteceram nos países árabes do norte da África e no Oriente Médio, a partir de 2010.'
        ),
        array(
            'pergunta' => 'O que significa ser um país tropical? ',
            'resposta' => 'Países com elevada radiação solar, que tem constantes registros de altas temperaturas e um considerável volume de chuvas.'
        ),
        array(
            'pergunta' => 'Onde passa o Trópico de Capricórnio no Brasil? ',
            'resposta' => 'o Trópico de Capricórnio atravessa os estados do Mato Grosso do Sul, Paraná e São Paulo.'
        ),
        array(
            'pergunta' => 'O que são os polos geográficos',
            'resposta' => 'São os representantes dos pontos extremos do planeta, com os níveis máximos e mínimos de latitude.'
        ),
        
    );

    // Obtém um índice aleatório para exibir uma questão aleatória
    $indice_questao = array_rand($questoes);
    $indice_questao2 = array_rand($questoes);
    $indice_questao3 = array_rand($questoes);
    while($indice_questao2 == $indice_questao || $indice_questao2 == $indice_questao3) {
        $indice_questao2 = array_rand($questoes);
        if($indice_questao3 == $indice_questao) 
        $indice_questao3 = array_rand($questoes);
    }
    ?>

    <section class="conteiner-pergunta">
        <?php
        echo '<h2>' . $questoes[$indice_questao]['pergunta'] . '</h2>';
        echo '<p>' . $questoes[$indice_questao]['resposta'] . '</p>';
        ?>
    </section>

    <section class="conteiner-pergunta">
        <?php
        echo '<h2>' . $questoes[$indice_questao2]['pergunta'] . '</h2>';
        echo '<p>' . $questoes[$indice_questao2]['resposta'] . '</p>';
        ?>
    </section>

    <section class="conteiner-pergunta ultima-conteiner-pergunta">
        <?php
        echo '<h2>' . $questoes[$indice_questao3]['pergunta'] . '</h2>';
        echo '<p>' . $questoes[$indice_questao3]['resposta'] . '</p>';
        ?>
    </section>
</div>

</body>
</html>
