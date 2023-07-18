<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <div class="Prato do dia">
            <?php
                $hoje = date("w");
                $dia_da_semana[0] = "Domingo";
                $dia_da_semana[1] = "Segunda-feira";
                $dia_da_semana[2] = "Terça-feira";
                $dia_da_semana[3] = "Quarta-feira";
                $dia_da_semana[4] = "Quinta-feira";
                $dia_da_semana[5] = "Sexta-feira";
                $dia_da_semana[6] = "Sabado";

                $nome_prato[0] = "Lasanha a quatro queijos";
                $nome_prato[1] = "Frango ao molho madeira";
                $nome_prato[2] = "Arroz à grega";
                $nome_prato[3] = "Feijoada à moda da casa";
                $nome_prato[4] = "Nhoque paulista";
                $nome_prato[5] = "Bacalhou ao forno";
                $nome_prato[6] = "Feijão branco";

                $preco_prato[0] = "R$ 12,20";
                $preco_prato[1] = "R$ 10,00";
                $preco_prato[2] = "R$ 9,40";
                $preco_prato[3] = "R$ 11,20";
                $preco_prato[4] = "R$ 8,50";
                $preco_prato[5] = "R$ 15,20";
                $preco_prato[6] = "R$ 10,00";

                $img[0] = "<img src= img/feijão.jpeg  />";
                $img[1] = "<img src= img/frango.jpeg  />";
                $img[2] = "<img src= img/arroz.jpg  />";
                $img[3] = "<img src= img/feijoada.jpeg  />";
                $img[4] = "<img src= img/nhoque.jpg  />";
                $img[5] = "<img src= img/bacalhau.jpeg  />";
                $img[6] = "<img src= img/feijãob.jpeg  />";
                

                print "<center>Hoje é: <font size=5><b>$dia_da_semana[$hoje]</b></font></center><br />";

                print "<center>Nossa sugestão para hoje é: <font size=5><B>$nome_prato[$hoje]</b></font></center></font><br />";

                print "<center><img width=750px height=450px $img[$hoje] </center></img><br />";

                print "<center>Preço: <b><font size=5 color=#ff0000>$preco_prato[$hoje]</b></font></center><br />";

            ?>
            
        </div>
    </body>
</html>