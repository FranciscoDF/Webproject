<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Companies.css"/>
        <title>ADD User</title>
    </head>
    <body class="corps">
        <header>
        </header>
        <main>
            <form action="./?url=industries/add" method="post" class="formul">
                <section>
                    <fieldset class="formb1">
                        <label>Id_indusrie</label>
                        <input type="text" class="textbox" id="txtbox" name="Name" placeholder="Google" required/>
                        <label>Name_indutrie</label>
                        <input type="text" class="textbox" id="txtbox1" name="ActivityArea" placeholder="IT" required/>
                        <label>Location_industrie</label>
                        <input type="text" class="textbox" id="txtbox2" name="Skills" placeholder="Smart"/>
                        <label>Evaluation</label>
                        <input type="text" class="textbox" id="txtbox3" name="TrustLevel" placeholder="lvl10"/>
                    </fieldset>
                </section>
                <section>
                    <fieldset class="formb2">
                        <label>Trainee numbers</label>
                        <input type="text" class="textbox" id="txtbox4" name="TraineeNumbers" placeholder="52"/>
                        <label>Description</label>
                        <input type="text" class="textbox" id="txtbox5" name="Location" placeholder="London" required/>
                        <label>Activity Area</label>
                        <input type="text" class="textbox" id="txtbox6" name="Grades" placeholder="4/5"/> <br/>
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
