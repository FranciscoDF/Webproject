<p>
<?php
$reponse = $bdd->query('SELECT * FROM utilisateur');
$datas = $reponse->fetch();
unset($datas[0]);
foreach ($datas as $data) {
echo $data;
}
?>
</p>
<html>
<div class=tableau>
    <table class="table table-bordered">
<tr>
    <th><p class="text-error">id_utilisateur</p></th>
    <th><p class="text-error">user_utilisateur</p></th>
    <th><p class="text-error">mdp_utilisateur</p></th>
    <th><p class="text-error">name_utilisateur</p></th>
  <th><p class="text-error">surname_utilisateur</p></th>
  <th><p class="text-error">id_role</p></th>
  <th><p class="text-error">id_promotion</p></th>
  <th><p class="text-error">id_centre</p></th>
    </tr>
<tr>
</html>

