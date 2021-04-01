<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="View/Companies.css"/>
        <title>Update Industries</title>
    </head>
    <body class="corps">
        <header>
        </header>
        <?php
            $industries = $test[1];
        ?>
        <main>
            <form action="./?url=industries/add" method="post" class="formul">
                <section>
                    <fieldset class="formb1">
                        <label>Name</label>
                        <input type="text" class="textbox" id="nom_entreprise" name="nom_entreprise" placeholder="Google" value="<?= $industries->nom_entreprise() ?>" required/>
                        <label>Previous Activity Area : </label>
                        <?= $industries->name_sector() ?>
                        <div class="choose">
                            <?php $secteur = $test[0];?>
                            <select name="id_secteur" id="id_secteur">
                                <option value="nothing">Choose a role</option>
                                <?php foreach($secteur as $secteur): ?>
                                <option value="<?= $secteur->id_sector()?>"><?= $secteur->name_sector() ?></option>
                                <?php endforeach; ?>
                            </select>   
                        </div>
                        <label>Location_industrie</label>
                        <input type="text" class="textbox" id="lieu_entreprise" name="lieu_entreprise" placeholder="Smart" value="<?= $industries->lieu_entreprise() ?>" required/>
                    </fieldset>
                </section>
                <section>
                    <fieldset class="formb2">
                        <label>Number of trainees </label>
                        <input type="text" class="textbox" id="nbrStagiaire_entreprise" name="nbrStagiaire_entreprise" value="<?= $industries->nbrStagiaire_entreprise() ?>" placeholder="52"/>
                        <label>Description</label>
                        <input type="text" class="textbox" id="description_entreprise" name="description_entreprise" value="<?= $industries->description_entreprise() ?>" placeholder="We are the best industrie in the world" required/>
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
