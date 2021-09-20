<?php
    include "conexao.php";

    $nomebarra = $_POST['nomebarra'];
    $progresso = $_POST['progresso'];

    $sql_code = 'INSERT INTO progresso VALUES';
    $sql_code .= "(null, '$nomebarra','$progresso')"; 
    
    if( $conn->query($sql_code) === TRUE){
        echo "<div class='ty'><h2>Barra adicionada com sucesso!</h2>";
        echo "<a href='../cadastrarprogresso.html'>Adicionar mais barras.</a>";
        echo "<a href='../verprogresso.php'>Ver barras de progresso.</a></div>";
    } else{
        echo "Erro: ".$sql_code."<br>". $conn->error;
    }

    $conn->close();
?>

<style>
    .ty{
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }.ty h2{
        color: #7773F1;
        font-size: 20px;
    }.ty a{
        color: #534EF1;
        font-size: 20px;
    }
</style>