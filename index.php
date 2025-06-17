<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Meu Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Alerta -->
<div class="alert alert-primary text-center" role="alert">
  Bem-vindo ao meu blog!
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Meu Blog</a>
    <div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <div class="row">
    <!-- Conteúdo principal -->
    <div class="col-md-8">
      <?php
        $posts = [
          [
            "titulo" => "Primeira postagem",
            "data" => "10/06/2025",
            "imagem" => "https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "conteudo" => "Este é o conteúdo da primeira postagem do blog. Bem legal, né?"
          ],
          [
            "titulo" => "Segunda postagem",
            "data" => "12/06/2025",
            "imagem" => "https://images.unsplash.com/photo-1601645191163-3fc0d5d64e35?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8UXVhZHJpbmhvc3xlbnwwfHwwfHx8MA%3D%3D",
            "conteudo" => "Aqui vai o conteúdo da segunda postagem. Aproveite a leitura!"
          ],
          [
            "titulo" => "Terceira postagem",
            "data" => "15/06/2025",
            "imagem" => "https://images.unsplash.com/photo-1625535069654-cfeb8f829088?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29tcHV0YSVDMyVBNyVDMyVBM298ZW58MHx8MHx8fDA%3D",
            "conteudo" => "Última postagem do blog com Bootstrap e PHP!"
          ]
        ];

        foreach ($posts as $post) {
          echo '
            <div class="card mb-4">
              <img src="'.$post["imagem"].'" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">'.$post["titulo"].'</h5>
                <h6 class="card-subtitle mb-2 text-muted">'.$post["data"].'</h6>
                <p class="card-text">'.$post["conteudo"].'</p>
                <a href="#" class="btn btn-primary">Leia mais...</a>
              </div>
            </div>
          ';
        }
      ?>
    </div>

    <!-- Sidebar -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sobre o Autor</h5>
          <p class="card-text">Sou um estudante de programação apaixonado por PHP e Bootstrap!</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé -->
  <footer class="mt-4 bg-light p-4">
    <h5>Contato</h5>
    <form>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome">
      </div>
      <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
    <p class="mt-3">Email: contato@meublog.com</p>
  </footer>
</div>

</body>
</html>
