<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="View/entreprise.css"/>
        <title>ADD Industries</title>
    </head>
    <body class="corps">
        <header>
        </header>
        <main>
            <form action="./?url=industries/add" method="post" class="formul">
                <section>
                    <fieldset class="formb1">
                        <label>Name</label>
                        <input type="text" class="textbox" id="nom_entreprise" name="nom_entreprise" placeholder="Google" required/>
                        <label>Activity Area</label>
                        <div class="choose">
                          <?php $secteur =$sector;
                            /*print_r($secteur->name_sector());*/?>
                            <select name="id_secteur" id="id_secteur">
                                <option value="nothing">Choose sector</option> 
                                
                                <?php foreach($secteur as $secteur): ?>
                                <option value="<?= $secteur->id_sector()?>"><?= $secteur->name_sector() ?></option>
                                <?php endforeach; ?>
                            </select>   
                        </div>
                        <label>Location Industrie</label>
                        <input type="text" class="textbox" id="lieu_entreprise" name="lieu_entreprise" placeholder="Smart" required/>
                    </fieldset>
                </section>
                <section>
                    <fieldset class="formb2">
                        <label>Number of trainees </label>
                        <input type="text" class="textbox" id="nbrStagiaire_entreprise" name="nbrStagiaire_entreprise" placeholder="52"/>
                        <label>Description</label>
                        <input type="text" class="textbox" id="description_entreprise" name="description_entreprise" placeholder="We are the best industrie in the world" required/>
                        <br/>
                        <div class="button_a">
                            <button id="submit" name="submit">Add</button>
                        </div>
                    </fieldset>
                </section>
            </form>
        </main>
    </body>
</html>
