<DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="template.css">
</head>

<body>
<div class="titre">
      <h1>
        USERS
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

    <div>
      
    <table id='empTable' class='display dataTable'><tr>
      <tr>
      <th><h2>ID utilisateur</h2></th>
      <th><h2>Nom du compte</h2></th>
      <th><h2>Prénom</h2></th>
      <th><h2>Nom</h2></th>
      <th><h2>Role</h2></th>
      <th><h2>Promotion</h2></th>
      <th><h2>Centre</h2></th>
      
      
      </tr>

      <?php $this->_t= 'User';
      foreach($user as $user): ?>
      <tr><td><h2><?= $user->id_user() ?></h2></td>
      <td><h2><?= $user->username_user() ?></h2></td>
      <td><h2><?= $user->fname_user() ?></h2></td>
      <td><h2><?= $user->lname_user() ?></h2></td>
      <td><h2><?php $test=$user->id_role(); switch ($test) {case '1' : echo 'Etudiant';} ?></h2></td>
      <td><h2><?= $user->id_promo() ?></h2></td>
      <td><h2><?= $user->id_center() ?></h2></td>
      <?php endforeach; ?>
      </tr></table>
    </div>
    <p></p>
</body>
</html>