<?php
require_once '../verifica.php';

$paginas = [
    "Home" => "../index.php",
    "Sobre" => "sobre.php",
    "Cadastro" => "cadastro.php",
    "Login" => "login.php",
    "Produtos" => "produtos.php",
    "Carrinho" => "carrinho.php"
  ];
  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sobre</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/sobre.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    
</head>
<body>

<header>

  <div class="logo">
    <img src="../assets/LogPrinc.jpeg">
</div>
    <span>Chérie Petco.</span>

</header>

<nav>

    
    <?php
    if($sessaoAtiva){ 
    echo $nomeUser;
    } else{
      echo "Visitante";
    }

    foreach ($paginas as $pagina => $valor) {
        echo "<a href='$valor' target='_blank'>$pagina</a>";
                }
                if($sessaoAtiva){
                 echo "<a href='logout.php'>Sair</a>";
                }
    
                
                ?>
</nav>

<main>

        <div class="petshop1">
        <h2 class="container">Chérie PetShop</h2>
    
    <p class="container">Só quem é apaixonado por animais sabe: a relação de amor e cumplicidade que temos com nossos bichinhos de
        estimação é um vínculo único! Por essa razão, não medimos esforços para oferecer o que há de melhor para
        trazer ainda mais alegria e qualidade de vida. Rações, medicamentos e brinquedos estão na nossa listinha de
        prioridades; e tudo isso você encontra em nosso Pet Shop online.
        Muito embora a gente ame nossos amigos de quatro patas, sabemos que cada pet tem particularidades que os
        tornam ainda mais encantadores. Por essa razão, em nosso site de Pet Shop, é possível conferir uma ampla
        variedade de artigos para trazer conforto e bem-estar para nossos amiguinhos.
        Por isso, conveniência é uma de nossas virtudes! A qualquer hora do dia ou da noite, tudo sobre pet shop
        você pode encontrar aqui. Sempre com a qualidade das melhores marcas e com o cuidado da Chérie PetCo.</p>
        </div>
        


         <div class="petshop2">
        
        <h2 class="container">Ração</h2>
    
    <p class="container">A ração seca é a base da alimentação de muitos pets pela praticidade e combinação nutricional completa.
        Indicada por médicos veterinários para animais com mais saúde e disposição, a ração seca é encontrada em
        diversas versões, tamanhos e sabores na Chérie PetCo. Aproveite os melhores preços e receba seus produtos sem
        sair de casa.
        Oferecer ração seca de qualidade é um sinal de amor. Desenvolvidas a partir de pesquisas para uma nutrição
        completa, colaboram para uma vida mais longa e saudável. Os grãos de ração auxiliam no
        combate à formação de tártaro, preservando a saúde do animal.
        Na Chérie PetCo., você encontra diversas marcas.
        Cada uma delas possui ingredientes variados e receitas desenvolvidas para oferecer
        uma refeição balanceada para cada necessidade do animal. Você encontra versões por idade,
        porte, raça, além daquelas desenvolvidas para necessidades específicas, como rações coadjuvantes
        (medicamentosas), para dietas ou pelagem mais bonita. Leve sempre em consideração as características
        físicas e necessidades especiais do seu animal..</p>
</div>

    
        <div class="petshop3">
            
        
    
    <h2 class="container">Brinquedos</h2>
    <p class="container">Só quem é apaixonado por animais sabe: a relação de amor e cumplicidade que temos com nossos bichinhos de
        estimação é um vínculo único! Por essa razão, não medimos esforços para oferecer o que há de melhor para
        trazer ainda mais alegria e qualidade de vida. Rações, medicamentos e brinquedos estão na nossa listinha de
        prioridades; e tudo isso você encontra em nosso Pet Shop online.
        Muito embora a gente ame nossos amigos de quatro patas, sabemos que cada pet tem particularidades que os
        tornam ainda mais encantadores. Por essa razão, em nosso site de Pet Shop, é possível conferir uma ampla
        variedade de artigos para trazer conforto e bem-estar para nossos amiguinhos.
        Por isso, conveniência é uma de nossas virtudes! A qualquer hora do dia ou da noite, tudo sobre pet shop
        você pode encontrar aqui. Sempre com a qualidade das melhores marcas e com o cuidado da Chérie PetCo.</p>
        </div>
        
    
        <div class="petshop4">
        
    
    <h2 class="container">Remedio</h2>
    <p class="container">Para tratar os probleminhas de saúde que nossos pets possam vir a ter, é preciso garantir remédios de qualidade.
        Assim, seu peludinho terá uma ótima recuperação e um tratamento supereficaz!
        E para adquirir um excelente medicamento para os cuidados com a saúde do seu filho de quatro patas, conte com a
        Chérie PetCo.! Temos diversas opções de remédios por preços super especiais. Assim, você encontra o remedinho
        certo para o problema do seu peludo e ainda economiza!
        Para garantir uma excelente medicação no tratamento do seu filho de quatro patas, confira as opções disponíveis
        aqui, no Pet Shop on-line da Chérie PetCo.! Nosso catálogo de remédios garante total eficácia no tratamento do
        seu peludo, além de excelentes preços. Aproveite sua visita e adquira já o melhor para a saúde do pet!</p>
        </div>
   
</main>




    
</body>
</html>