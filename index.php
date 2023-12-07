<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fornecedor</title>
  <link rel="stylesheet" href="style.css" />
</head>

<style>
  body {
    font-family: monospace, monospace, Helvetica, sans-serif
  }

  .content {
    display: flex;
    justify-content: center;
  }

  .contato {
    width: 100%;
    max-width: 500px;
  }

  .form {
    display: flex;
    flex-direction: column
  }

  .field {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #DDD;
    border-radius: 5px;
    font-family: monospace, Helvetica, sans-serif;
    font-size: 16px;
  }

  textarea {
    height: 150px;
  }
</style>

<!-- COMEÇO DO NVBAR -->

<body>
  <header>
    <section class="sect"></section>
    <nav>
      <a class="logo" href="/">Fornecedor</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="Observação.php">Observações</a></li>
        <li><a href="Bancario.php">Dados Bancários</a></li>
        <li><a href="Historico.php">Histórico</a></li>
        <li><a href="Unidade.php">Conversão de Unidades</a></li>
      </ul>
    </nav>
    <!-- INICIO DO NVBAR -->
  <script src="mobile-navbar.js"></script>
</body>

</html>