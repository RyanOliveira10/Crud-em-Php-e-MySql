<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/global.css">

  <title>Alteração de Cadastro</title>
</head>

<body>
  <?php
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM clientes WHERE id = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
  ?>


  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Editar Cadastro</h1>
        <form action="cadastro_script.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="nome" 
            required value="<?php echo $linha['nome']; ?>">
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email"
            required value="<?php echo $linha['email']; ?>">
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="number" class="form-control" name="telefone"
            required value="<?php echo $linha['telefone']; ?>">
          </div>
          <div class="mb-3">
            <label for="data de nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="dataNascimento"
            required value="<?php echo $linha['dataNascimento']; ?>">
          </div>
          <button type="submit" class="btn btn-primary">Salvar Alterações</button>
          <input type="hidden" name="id" value="<?php echo $linha['id']?>">
          <a class="btn btn-danger btn-primary" href="./pesquisa.php" role="button">Voltar</a>
        </form>
      </div>
    </div>
  </div>


  <script src="../js/bootstrap.min.js"></script>
</body>

</html>