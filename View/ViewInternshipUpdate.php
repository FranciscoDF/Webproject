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
                    $internship = $test[1];
                    ?>
            <form action="./?url=internship/update" method="post" class="formul">
                <section>
                    <fieldset class="formb1">
                        <label>Offer</label>
                        <input type="text" class="textbox" id="nom_offre" name="nom_offre" placeholder="Title of the offer" required value="<?= $internship->name_internship() ?>"/>
                        <label>Description (50 char)</label>
                        <input type="text" class="textbox" id="description_offre" name="description_offre" placeholder ="Enter a description" required value="<?= $internship->des_internship() ?>"/>
                        <label>Location</label>
                        <input type="text" class="textbox" id="lieu_offre" name="lieu_offre" placeholder="Enter the location" required value="<?= $internship->lieu_internship() ?>"/>
                        <label>Date</label>
                        <input type="text" class="textbox" id="date_offre" name="date_offre" placeholder="yyyy/mm/dd" required value="<?= $internship->date_internship() ?>"/>
                        <label>Duration</label>
                        <input type="text" class="textbox" id="duree_offre" name="duree_offre" placeholder="hh:mm:ss" required value="<?= $internship->duree_internship() ?>"/>
                        <label>Salary</label>
                        <input type="text" class="textbox" id="remu_offre" name="remu_offre" placeholder="Enter the salary" required value="<?= $internship->remu_internship() ?>"/>
                        <label>Number of places</label>
                        <input type="text" class="textbox" id="nbPlace_offre" name="nbPlace_offre" placeholder="Enter number of places" required value="<?= $internship->nbPlace_internship() ?>"/>
                        <input type="hidden" class="textbox" id="id_offre" name="id_offre" value="<?= $internship->id_internship() ?>">
                    </fieldset>
                </section>
                <section>
                    <fieldset class="formb2">
                        <label>Industries</label>
                        <div class="choose">
                            <?php $industries = $test[0];?>
                            <select name="id_entreprise" id="id_entreprise">
                                <option value="nothing">Choose an industry</option>
                                <?php foreach($industries as $industries): ?>
                                <option value="<?= $industries->id_entreprise()?>"><?= $industries->nom_entreprise() ?></option>
                                <?php endforeach; ?>
                            </select>   
                        </div>          
                        <br/>
                        <div class="button_a">
                            <button name="submit" id="submit">Update</button>
                        </div>
                    </fieldset>
                </section>
            </form>
        
    </body>
</html>