<?php setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); ?>


<DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="View/ViewUser.css"/>       
</head>

<body>
    
    <div class="choose">
      <select name="sort" id="sort-by">
        <option value="">Sort by</option>
        <option value="alph">A-Z</option>
        <option value="-alph">Z-A</option>
        <option value="age">Age</option>
    </select>   
    </div>
    
    <div>
      
    <table id='empTable' class='dataTable'><tr>
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
      <td><h2><?= $user->name_role() ?></h2></td>
      <td><h2><?= $user->name_promo() ?></h2></td>
      <td><h2><?= $user->name_center() ?></h2></td>
      <?php endforeach; ?>
      </tr></table>
    </div>
    <div class="button_a">
    <button id="adder">Add</button>

      <form action="./?url=user/formupdate" method="POST">
      <input type="text" class="getbyid" id="id_utilisateur" name="id_utilisateur" placeholder="Enter User ID to Update">
      <button id="updater" class="update">Update</button>
      </form>

      <form action="./?url=user/delete" method="POST">
      <input type="text" class="getbyid" id="id_utilisateur" name="id_utilisateur" placeholder="Enter User ID to Delete">
      <button id="deleter" class="delete">Delete</button>
      </form>
    </div>





    <script src="View/ViewUser.js">
</body>
</html>