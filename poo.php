<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>

    <?php
        class Carro {
            public string $marca;
            public string $modelo;
            public string $cor;
            public int $velocidade = 1;

            function acelerar($valor){
                $this->velocidade += $valor;
            }

            function frear($valor){
                if($this->velocidade <= 0){
                    echo "Não pode frear a 0km por hora!";
                } else{
                    $this->velocidade -= $valor;

                    if($this->velocidade < 0){
                    $this->velocidade = 0;
                    }
                }   
            }
        }

        $meuCarro = new Carro;

        $meuCarro->marca = "Volkswagen";
        $meuCarro->modelo = "Polo";
        $meuCarro->cor = "Preto";
        $meuCarro->acelerar(100);
        $meuCarro->frear(40);

        echo 'Velocidade ' . $meuCarro->velocidade;
    ?>

    </header>
</body>
</html>