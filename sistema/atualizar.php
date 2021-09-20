<?php
    include "conexao.php";

    $id = $_POST['id'];
    $progresso = $_POST['progresso'];
    $sql = "UPDATE progresso SET progresso = '$progresso' WHERE id='$id'";

    if($conn->query($sql) === TRUE){
        echo "<div class='ty'><h2>Barra atualizada com sucesso!</h2>";
        echo "<a href='../atualizarprogresso.php'>Atualizar outras barras.</a>";
        echo "<a href='../verprogresso.php'>Ver barras de progresso.</a></div>";
    } else{
        echo "Erro: ".$sql."<br>". $conn->error;
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