<html>
<body>
    <div class="choose">
      <select name="sort" id="sort-by">
        <option value=""><p>Sort by</p></option>
        <option value="alph">A-Z</option>
        <option value="-alph">Z-A</option>
        <option value="age">Age</option>
    </select>   

    <table id='empTable' class='dataTable'><tr>
      <tr>
      <th><h2>ID internship</h2></th>
      <th><h2>Name</h2></th>
      <th><h2>Description</h2></th>
      <th><h2>Place</h2></th>
      <th><h2>Date</h2></th>
      <th><h2>Lengh</h2></th>
      <th><h2>Paid</h2></th>
      <th><h2>Free place</h2></th>
      <th><h2>id entreprise</h2></th>
      </tr>

      <?php $this->_t= 'Internship';
      foreach($internship as $internship): ?>
      <tr><td><h2><?= $internship->id_internship() ?></h2></td>
      <td><h2><?= $internship->name_internship() ?></h2></td>
      <td><h2><?= $internship->des_internship() ?></h2></td>
      <td><h2><?= $internship->lieu_internship() ?></h2></td>
      <td><h2><?= $internship->date_internship() ?></h2></td>
      <td><h2><?= $internship->duree_internship() ?></h2></td>
      <td><h2><?= $internship->remu_internship() ?></h2></td>
      <td><h2><?= $internship->nbPlace_internship() ?></h2></td>
      <td><h2><?= $internship->id_entreprise() ?></h2></td>
      <?php endforeach; ?>
      </tr></table>
    </div>
    <div class="button_a">
    <button id="adder">Add</button>

      <form action="./?url=internship/formupdate" method="POST">
      <input type="text" class="getbyid" id="id_utilisateur" name="id_utilisateur" placeholder="Enter User ID to Update">
      <button id="updater" class="update">Update</button>
      </form>

      <form action="./?url=internship/delete" method="POST">
      <input type="text" class="getbyid" id="id_utilisateur" name="id_utilisateur" placeholder="Enter User ID to Delete">
      <button id="deleter" class="delete">Delete</button>
      </form>
    </div>


    <script src="View/ViewInternship.js">
</body>
</html>