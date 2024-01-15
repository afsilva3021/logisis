<?php
session_start();
  if(empty($_SESSION)) {
  header("Location: index.html");
}
?>



<?php 
  include "./app/controleDePaginas.php";

?>

<nav class="navbar bg-body-tertiary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand">
            <?php 
              echo "Olá, ".$_SESSION["nome"];
              echo "<a href='./app/logout.php' class='btn btn-outline-danger'>Sair</a>";
            ?>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Aloc Locação</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="pages" href="?pages=default">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?pages=cadastro">Cadastrar conferencia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?pages=cadastro">Conferidos</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Configuração
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Cadastro de usuario</a></li>
                    <li><a class="dropdown-item" href="#">Cadastro de motorista</a></li>
                    <li><a class="dropdown-item" href="#">Cadastro de Carros</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Relatorio</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Procurar Conferencia" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </div>
      </nav>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>