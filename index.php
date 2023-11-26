<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fornecedor</title>
    <link rel="stylesheet" href="style.css" />
  </head>

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

      <section class="section">
        <div class="container">
          <div class="columns is-centered">
            <div class="colums is-half">
              <h1 class="title has-text-centered">Fornecedor</h1>

              <form action="enviar.php" method="$_POST">
                <div class="field">
                <label for="nome_fornecedor" class="label">Nome do Fornecedor:</label>
                <div class="control">
                  <input type="text" id="nome_fornecedor" name="nome_fornecedor" placeholder="Digite o nome do fornecedor">
                </div>
              </form>
            </div>
            </div>
          </div>
        </div>
      </section>

    </header>
    <main></main>
    <script src="mobile-navbar.js"></script>
  </body>
</html>