<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barras de Progresso</title>
</head>
<body>
    <div class="barras">
        <?php
            include "sistema/conexao.php";

            //Barra #01
            $valor_barra1 = "SELECT progresso FROM progresso WHERE nomebarra = 'Barra #01'"; 
            $valor_barra1_show = mysqli_query($conn, $valor_barra1);
            $barra1 = mysqli_fetch_assoc($valor_barra1_show);
            $valorb1 = $barra1['progresso'];      

            echo '<h1>Barra #01</h1><div class="barra"><span class="barra1"><h2>'.$valorb1."%".'</h2></span></div>';

            //Barra #02
            $valor_barra2 = "SELECT progresso FROM progresso WHERE nomebarra = 'Barra #02'"; 
            $valor_barra2_show = mysqli_query($conn, $valor_barra2);
            $barra2 = mysqli_fetch_assoc($valor_barra2_show);
            $valorb2 = $barra2['progresso'];      
    
            echo '<h1>Barra #02</h1><div class="barra"><span class="barra2"><h2>'.$valorb2."%".'</h2></span></div>';

            //Barra #03
            $valor_barra3 = "SELECT progresso FROM progresso WHERE nomebarra = 'Barra #03'"; 
            $valor_barra3_show = mysqli_query($conn, $valor_barra3);
            $barra3 = mysqli_fetch_assoc($valor_barra3_show);
            $valorb3 = $barra3['progresso'];      
      
            echo '<h1>Barra #03</h1><div class="barra"><span class="barra3"><h2>'.$valorb3."%".'</h2></span></div>';

            
            //Barra #04
            $valor_barra4 = "SELECT progresso FROM progresso WHERE nomebarra = 'Barra #04'"; 
            $valor_barra4_show = mysqli_query($conn, $valor_barra4);
            $barra4 = mysqli_fetch_assoc($valor_barra4_show);
            $valorb4 = $barra4['progresso'];      
      
            echo '<h1>Barra #04</h1><div class="barra"><span class="barra4"><h2>'.$valorb4."%".'</h2></span></div>';
        ?>

        <a href="atualizarprogresso.php">Alterar porcentagem das barras</a>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Righteous;
        }.barras{
            width: 100%;
            min-height: 100vh;
            height: auto;
            background-color: #3a05f8;
            padding: 5px;
            display: flex;
            align-content: center;
            justify-content: center;
            flex-direction: column;
        }.barras a{
            width: 100%;
            text-align: center;
            color: #fff;
            margin-top: 20px;
            font-size: 20px;
        }.barras a:hover{
            color: #00cccc;
            transition: 0.5s;
        }h1{
            width: 100%;
            text-align: center;
            color: #fff;
            margin-top: 20px;
        }.barra{
            width: 100%;
            height: 50px;
            border: 2px solid #fff;
            display: flex;
            flex-direction: row;
        }.barra h2{
            width: 99%;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            position: absolute;
            font-size: 30px;
        }
        /* Valor definido no PHP, cada Class deve ter o nome diferente no echo */
        .barra1{
            width: <?php echo $valorb1."%";?>;
            height: 100%;
            background-color: #00cccc;
            display: block;
        }

        .barra2{
            width: <?php echo $valorb2."%";?>;
            height: 100%;
            background-color: #00cccc;
            display: block;
        }

        .barra3{
            width: <?php echo $valorb3."%";?>;
            height: 100%;
            background-color: #00cccc;
            display: block;
        }

        .barra4{
            width: <?php echo $valorb4."%";?>;
            height: 100%;
            background-color: #00cccc;
            display: block;
        }
    </style>
</body>
</html>