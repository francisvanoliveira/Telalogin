<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Clientes</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Sites Desenvolvidos</h1>
      <h4>Usuario: <?php echo $_SESSION['nome']; ?></h4>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Cliente</th>
          <th scope="col">Site</th>
          <th scope="col">Acesso</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Anne Moura</td>
          <td>annemoura.com.br</td>
          <td>
            <a href="https://annemoura.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://annemoura.com.br/gr7-gestao/" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
        <tr>
          <td>Artflor Boutique</td>
          <td>artflorboutique.com.br</td>
          <td>
            <a href="https://artflorboutique.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://artflorboutique.com.br/wp-admin" class="btn btn-secondary">Painel</a>
          </td>
        <tr>
          <td>Beta Brasil</td>
          <td>betabras.com.br</td>
          <td>
            <a href="https://betabras.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://betabras.com.br/gr7-gestao/" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
        <tr>
          <td>FL Industria</td>
          <td>flindustria-am.com.br</td>
          <td>
            <a href="https://www.flindustria-am.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://www.flindustria-am.com.br/gr7-gestao" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
        <tr>
          <td>GR7 Sites</td>
          <td>sites.gr7tecnologia.com.br</td>
          <td>
            <a href="https://sites.gr7tecnologia.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
          </td>
        </tr>
        <tr>
          <td>GR7 Store</td>
          <td>gr7store.com.br</td>
          <td>
            <a href="https://gr7store.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://gr7store.com.br/wp-admin" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
        <tr>
          <td>GR7 Tecnologia</td>
          <td>gr7tecnologia.com.br</td>
          <td>
            <a href="https://gr7tecnologia.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://gr7tecnologia.com.br/wp-admin" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
        <tr>
          <td>Inovameta</td>
          <td>inovameta.com.br</td>
          <td>
            <a href="https://inovameta.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://inovameta.com.br/gr7-gestao/" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
        <tr>
          <td>JBL Representações</td>
          <td>jblrepresentacoes.com</td>
          <td>
            <a href="https://jblrepresentacoes.com/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://jblrepresentacoes.com/gr7-gestao/" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
        <tr>
          <td>Master Tegui</td>
          <td>mastertegui.com.br</td>
          <td>
            <a href="https://www.mastertegui.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://www.mastertegui.com.br/gr7-gestao/" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
        <tr>
          <td>Tahiti Motel</td>
          <td>tahitimotel.com.br</td>
          <td>
            <a href="https://www.tahitimotel.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
          </td>
        </tr>
        <tr>
          <td>Y Criativa</td>
          <td>ytransformandoonovo.com.br</td>
          <td>
            <a href="https://ytransformandoonovo.com.br/" class="btn btn-primary" target="_blank">Acessar</a>
            <a href="https://ytransformandoonovo.com.br/gr7-gestao/" class="btn btn-secondary" target="_blank">Painel</a>
          </td>
        </tr>
      </tbody>
    </table>
    <p>
        <a href="logout.php" class="btn btn-secondary">Sair</a>
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>