<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?= $t ?></title>
        <link rel="stylesheet" href="View/template.css">
        <link rel="stylesheet" href="View/assets/vendors/bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="View/assets/vendors/fontawesome/css/all.min.css">
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    </head>
    
    
    <main>
    <header>
      <div class="logo">
        <a href="http://localhost/ProjetWeb/Webproject/?url=home"><img src="View/cesi.png"></a><br><br><br><br>
      </div>
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/ProjetWeb/Webproject/?url=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/ProjetWeb/Webproject/?url=industries/view">Industries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/ProjetWeb/Webproject/?url=user/view">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="stages.php">Internship</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account.php">Account</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
    </main>
    <div class="titre">
        <h1>
          <?= $t?>
        </h1>
      </div>


    <?= $content ?>

    <footer>
    <p>
        Mentions légales <br>
    <p>
        <script src="View/assets/vendors/jquery/jquery-3.5.1.min.js"></script>
        <script src="View/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    </footer>


</html>