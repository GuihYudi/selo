<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../_img/icon.png" type="image/png">
    <link rel="stylesheet" href="../css/style.css">
    <title>SELO - Lentes</title>
</head>
<body>
    <div class="main">
        <?php
        include("menu.php");
        ?>
        
        <div class="content">
            <a href="#openModal"><input type="button" value="Visão Simples" id="vs" style= "cursor:pointer"></a>
            <div id="openModal" class="modalDialog">
            <div>

                <a href="#close" title="Close" class="close">X</a>
                <h2>Visão Simples</h2>
                <p>aPara os problemas de visão como, por exemplo, miopia, hipermetropia e astigmatismo, os profissionais da saúde recomendam o uso de lentes para visão simples.
                Esse tipo de lente atende também pelo nome de monofocal, sendo a sua função corrigir um campo de visão para uma única distância: perto ou longe.</p>
                </div>
            </div>
               <a href="#openModal3"> <input type="button" value="Bifocal" id="bf" style= "cursor:pointer"> </a>

               <div id="openModal3" class="modalDialog">
                <div>
                <a href="#close" title="Close" class="close">X</a>
                <h2>Bifocal</h2>
                <p>As lentes bifocais possuem dois campos visuais, para perto e para longe. Esse tipo de lente possui uma linha divisória, que fica aparente na lente. Isso pode causar alguns inconvenientes, como a adaptação do usuário e a estética dos óculos.</p>
                </div>
            </div>
               <a href="#openModal2"> <input type="button" value="Multifocal" id="mf" style= "cursor:pointer"> </a>

               <div id="openModal2" class="modalDialog">
                <div>
                <a href="#close" title="Close" class="close">X</a>
                <h2>Multifocal</h2>
                <p>As chamadas lentes multifocais ou progressivas são indicadas para pacientes que precisam enxergar bem de longe, perto e intermediário, permitindo “muitos focos” ao usuário, através do mesmo par de lentes, dispensando o uso de dois óculos (para perto e longe). Para as pessoas com idade acima de 40 anos, que sofrem com a presbiopia, as lentes multifocais são indicadas por oferecer praticidade, modernidade e valor estético.</p>
                </div>
            </div>
        </div>
        <div class="rodape">
            SELO ©, 2022. Todos os direitos reservados
        </div>
    </div>
</body>
</html>
