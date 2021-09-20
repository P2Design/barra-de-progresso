<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Barra de Progresso</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="atualizarprogresso">
        <h1>Atualizar porcentagem da Barra</h1>
        <?php
            include "sistema/conexao.php";

            $result_comment = "SELECT id, nomebarra, progresso FROM progresso ORDER BY id";
            $result_comment_2 = mysqli_query($conn, $result_comment);
        ?>
        <?php while($row_comment = mysqli_fetch_assoc($result_comment_2)){?>
            
            <form method="POST" action="sistema/atualizar.php">
                <label for="id">ID:</label>
                <input type="number" name="id" id="id" value="<?php echo $row_comment['id'];?>" readonly>
                <span><?php echo $row_comment['nomebarra']; ?></span>
                <input type="number" name="progresso" id="progresso" value="<?php echo $row_comment['progresso']; ?>">
                <label for="progresso">%</label>
                <input type="submit" value="Atualizar">
            </form>
        <?php } ?>
    </div>
    
</body>
</html>