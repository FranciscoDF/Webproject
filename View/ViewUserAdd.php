<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Companies.css"/>
        
       
    </head>
    <body class="corps">
        <header>
        </header>
        <main>
            <form action="http://localhost/ProjetWeb/Webproject/?url=user/add" method="post" class="formul">
                <section>
                    <fieldset class="formb1">
                    <label>User</label>
                        <input type="text" class="textbox" id="user" name="user" placeholder="jean.cadre"/>
                        <label>Name</label>
                        <input type="text" class="textbox" id="name" name="name" placeholder="Jean" required/>
                        <label>Surname</label>
                        <input type="text" class="textbox" id="surname" name="surname" placeholder="Cadre"/>
                    </fieldset>
                </section>
                <section>
                    <fieldset class="formb2">
                        <label>Promotion</label>
                        <div class="choose">
                            <?php $this->_t= 'Add User';
                                $promo = $test[1];?>
                            <select name="promo" id="promo">
                                <option value="nothing">Choose a promotion</option>
                                <?php foreach($promo as $promo): ?>
                                <option value="<?php $promo->id_promo()?>"><?= $promo->name_promo() ?></option>
                                <?php endforeach; ?>
                            </select>   
                        </div>
                        <label>Center</label>
                        <div class="choose">
                            <?php $center = $test[2];?>
                            <select name="center" id="center">
                                <option value="nothing">Choose a center</option>
                                <?php foreach($center as $center): ?>
                                <option value="<?php $center->id_center()?>"><?= $center->name_center() ?></option>
                                <?php endforeach; ?>
                            </select>   
                        </div>
                        <label>Role</label>
                        <div class="choose">
                            <?php $role = $test[0];?>
                            <select name="role" id="role">
                            <option value="nothing">Choose a role</option>
                                <?php foreach($role as $role): ?>
                                <option value="<?php $role->id_role()?>"><?= $role->name_role() ?></option>
                                <?php endforeach; ?>
                            </select>   
                        </div>                        
                        <br/>
                        <div class="button_a">
                            <button id="go_d">Add</button>
                        </div>
                    </fieldset>
                </section>
            </form>
        </main>
    </body>
</html>