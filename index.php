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
    font-family: Arial, Arial, Helvetica, sans-serif
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
    font-family: Arial, Helvetica, sans-serif;
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

    <!-- INICIO DA PÁGINA DE FORNECEDOR -->
    <section class="content">

      <!-- COLOCANDO OS DADOS DO FORNECEDOR -->
      <div class="contato">
        <br>
        <form class="form" method="POST" action="/">
          <input class="field" name="codigo" placeholder="Codigo">

          <select class="field" name="tipo_pessoa">
            <option value="Fisica">Pessoa Física</option>
            <option value="Juridica">Pessoa Jurídica</option>
          </select>

          <div class="row">
          <input class="field" name="cnpjcpf" placeholder="CNPJ/CPF">
          <input class="field" name="nome" placeholder="Nome Fantasia">
          <input class="field" name="razaoSocial" placeholder="Razao Social">
          <input class="field" name="endereco" placeholder="Endereço">
          <input class="field" name="bairro" placeholder="Bairro">
          <input class="field" name="cep" placeholder="CEP">
          <input class="field" name="uf" placeholder="UF">
          <input class="field" name="telefone" placeholder="Telefone">
          </div>
          
          <input class="field" name="email" placeholder="Email">

    </section>

  </header>
  <main></main>
  <script src="mobile-navbar.js"></script>
</body>

</html>