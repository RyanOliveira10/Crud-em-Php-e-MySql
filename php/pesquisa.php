<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/global.css">

  <title>Pesquisar</title>
</head>

<body>
  <?php
  $pesquisa = $_POST['busca'] ?? '';

  include "conexao.php";

  $sql = "SELECT * FROM clientes WHERE nome LIKE '%$pesquisa%'";

  $dados = mysqli_query($conn, $sql);
  ?>


  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Lista de Clientes</h1>
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <form class="d-flex" action="pesquisa.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
          </div>
        </nav>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Telefone</th>
              <th scope="col">Data de Nascimento</th>
              <th scope="col">Funções</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while ($linha = mysqli_fetch_assoc($dados)) {
              $cod_pessoa = $linha['id'];
              $nome = $linha['nome'];
              $email = $linha['email'];
              $telefone = $linha['telefone'];
              $dataNascimento = $linha['dataNascimento'];
              $dataNascimento = mostrar_data($dataNascimento);

              echo "<tr>
                        <th scope = 'row'>$nome</th>
                        <td>$email</td>
                        <td>$telefone</td>
                        <td>$dataNascimento</td>
                        <td>
                          <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success'>Editar</a>
                          <a href='#confirma' class='btn btn-danger' 
                          data-bs-toggle='modal' data-bs-target='#confirma'
                          onclick=" . '"' . "pegarDados($cod_pessoa, '$nome')" . '"' . ">Excluir</a>
                        </td>
                    </tr>";
            };

            ?>
          </tbody>
        </table>
        <a class="btn btn-danger" href="../index.php" role="button">Voltar</a>
        <a class="btn btn-primary" href="../php/cadastro.php" role="button">Cadastrar novo cliente</a>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="excluir_script.php" method="POST">
          <div class="modal-body">
            <p>Tem certeza que deseja excluir ?</p>
            <b id="nome_pessoa">Nome da pessoa</b>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
            <input type="submit" class="btn btn-danger" value="Sim">
            <input type="text" name="id" id="cod_pessoa" value="">
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="../js/bootstrap.min.js"></script>
  <script>
    function pegarDados(id, nome) {
      document.getElementById('nome_pessoa').innerHTML = nome;
      document.getElementById('cod_pessoa').value = id;
    }
  </script>
</body>

</html>