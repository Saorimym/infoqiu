<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução de Questões</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(255, 153, 153);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.5);
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
            border-radius: 8px;
        }

        .ultima-conteiner-pergunta {
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
            font-family: "Times New Roman", Times, serif;
            font-size: 40px;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>MATEMÁTICA</h1>

<div class="container">
    <?php
    $questoes = array(
        array(
            'pergunta' => 'Quanto é 4 x 5',
            'resposta' => '4 x 5 = 20.'
        ),
        array(
            'pergunta' => 'Quanto é 10 - 2',
            'resposta' => '10 - 2 = 8.'
        ),
        array(
            'pergunta' => 'Quanto é 4 x 2 + 1 - 5',
            'resposta' => '4 x 2 + 1 - 5 = 4.'
        ),
        array(
            'pergunta' => 'Quanto é 3³',
            'resposta' => '3³= 27.'
        ),
        array(
            'pergunta' => 'Quanto é 2³ ',
            'resposta' => '2³ = 8.'
        ),
        array(
            'pergunta' => 'Quanto é 5 + 2 - 2',
            'resposta' => '5 + 2 - 2 = 5.'
        ),
        array(
            'pergunta' => 'Quanto é 4234 x 0',
            'resposta' => '4234 x 0 = 0.'
        ),
        // Adicione mais questões conforme necessário
    );

    $indice_questao = array_rand($questoes);
    $indice_questao2 = array_rand($questoes);
    $indice_questao3 = array_rand($questoes);
    while ($indice_questao2 == $indice_questao || $indice_questao2 == $indice_questao3) {
        $indice_questao2 = array_rand($questoes);
        if ($indice_questao3 == $indice_questao)
            $indice_questao3 = array_rand($questoes);
    }
    ?>

    <section class="conteiner-pergunta">
        <h2><?php echo $questoes[$indice_questao]['pergunta']; ?></h2>
        <p><?php echo $questoes[$indice_questao]['resposta']; ?></p>
    </section>

    <section class="conteiner-pergunta">
        <h2><?php echo $questoes[$indice_questao2]['pergunta']; ?></h2>
        <p><?php echo $questoes[$indice_questao2]['resposta']; ?></p>
    </section>

    <section class="conteiner-pergunta ultima-conteiner-pergunta">
        <h2><?php echo $questoes[$indice_questao3]['pergunta']; ?></h2>
        <p><?php echo $questoes[$indice_questao3]['resposta']; ?></p>
    </section>
</div>

</body>
</html>
