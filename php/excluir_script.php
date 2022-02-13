<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/global.css">

  <title>Excluir cadastro</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <?php

        include "conexao.php";

        //COLETA DADOS DO FORMULARIO PARA ARMAZENAMENTO
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $dataNascimento = $_POST['dataNascimento'];

        //MODIFICA O CADASTRO DO CLIENTE        
        $sql = "DELETE `clientes` WHERE id = $id ";

        //VERIFICA CADASTRO/MODIFICAÇÕES
        if (mysqli_query($conn, $sql)) {
          mensagem("$nome excluido com sucesso!", 'success');
        } else {
          mensagem("$nome falha ao excluir!", 'danger');
        }
        ?>

        <a href="pesquisa.php" class="btn btn-danger">Voltar</a>
      </div>
    </div>
  </div>


  <script src="../js/bootstrap.min.js"></script>
</body>

</html>