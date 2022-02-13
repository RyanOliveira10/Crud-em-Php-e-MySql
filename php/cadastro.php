<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/global.css">

  <title>Cadastro</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro de Clientes</h1>
        <form action="cadastro_script.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="nome" required>
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="number" class="form-control" name="telefone">
          </div>
          <div class="mb-3">
            <label for="data de nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="dataNascimento">
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <a class="btn btn-danger btn-primary" href="../index.php" role="button">Voltar</a>
          <a class="btn btn-success" href="pesquisa.php" role="button">Listar Clientes</a>
        </form>

      </div>
    </div>
  </div>


  <script src="../js/bootstrap.min.js"></script>
</body>

</html>