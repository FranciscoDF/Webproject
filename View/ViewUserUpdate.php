<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="View/companies.css"/>
    </head>
    <body class="corps">
        <header>
        </header>
        <?php
                    $user = $test[3];
                    ?>
            <form action="./?url=user/update" method="post" class="formul">
                <section>
                    <fieldset class="formb1">
                        <label>User</label>
                        <input type="text" class="textbox" id="user_utilisateur" name="user_utilisateur" placeholder="jean.cadre" required value="<?= $user->username_user() ?>" />
                        <label>Password</label>
                        <input type="password" class="textbox" id="mdp_utilisateur" name="mdp_utilisateur" required value="<?= $user->password_user() ?>"/>
                        <label>Surname</label>
                        <input type="text" class="textbox" id="nom_utilisateur" name="nom_utilisateur" placeholder="Jean" required value="<?= $user->fname_user() ?>"/>
                        <label>Name</label>
                        <input type="text" class="textbox" id="prenom_utilisateur" name="prenom_utilisateur" placeholder="Cadre" required value="<?= $user->lname_user() ?>"/>
                        <input type="hidden" class="textbox" id="id_utilisateur" name="id_utilisateur" value="<?= $user->id_user() ?>">
                    </fieldset>
                </section>
                <section>
                
                    <fieldset class="formb2">
                        <label>Previous Role : </label>
                        <?= $user->name_role() ?>
                            <div class="choose">
                                <?php $role = $test[0];?>
                                <select name="id_role" id="id_role">
                                <option value="nothing">Choose a role</option>
                                    <?php foreach($role as $role): ?>
                                    <option value="<?= $role->id_role()?>"><?= $role->name_role() ?></option>
                                    <?php endforeach; ?>
                                </select>   
                            </div>  
                        <label>Previous Promotion : </label>
                        <?= $user->name_promo() ?>
                        <div class="choose">
                            <?php $this->_t= 'Update User';
                                $promo = $test[1];?>

                            <select name="id_promotion" id="id_promotion">
                                <option value="nothing">Choose a promotion</option>
                                <?php foreach($promo as $promo): ?>
                                <option value="<?= $promo->id_promo()?>"><?= $promo->name_promo() ?></option>
                                <?php endforeach; ?>
                            </select>   
                        </div>
                        <label>Previous Center : </label>
                        <?= $user->name_center() ?>
                        <div class="choose">
                            <?php $center = $test[2];?>
                            <select name="id_centre" id="id_centre">
                                <option value="nothing">Choose a center</option>
                                <?php foreach($center as $center): ?>
                                <option value="<?= $center->id_center()?>"><?= $center->name_center() ?></option>
                                <?php endforeach; ?>
                            </select>   
                        </div>                      
                        <br/>
                        <div class="button_a">
                            <button name="submit" id="submit">Add</button>
                        </div>
                    </fieldset>
                </section>
            </form>
        
    </body>
</html>