<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Users</title>
  <link rel="stylesheet" href="utilisateurs.css">
  <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
</head>

<body>
  <main>
    <header>
      <div class="logo">
        <a href="accueil.php"><img src="cesi.png"></a><br><br><br><br>
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
              <a class="nav-link" href="accueil.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entreprises.php">Industries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="utilisateurs.php">Users</a>
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
    <div class="titre">
      <h1>
        Internship
      </h1>
    </div>
    <div class="choose">
      <select name="sort" id="sort-by">
        <option value="">Sort by</option>
        <option value="alph">A-Z</option>
        <option value="-alph">Z-A</option>
        <option value="age">Age</option>
    </select>   
    </div>
<div class="button_a">
  <button id="go">Add</button>
  <button id="go">Update</button>
  <button id="go">Delete</button>
</div>
  </main>
  <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
  <footer>
    <p>
        Mentions légales <br>
    <p>
        <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    </footer>
  <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
  <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>