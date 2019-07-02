<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Fem's paris</title>
        <!-- Polices -->
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Javascript -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <style>
            body{
                margin-left:50px;
            }
            h1, h2{
                text-align: center;
                margin:20px;
            }
            
            .pouleA, .pouleB, .pouleC, .pouleD, .pouleE, .pouleE{
                margin-top:20px;
                text-align:center;
            }
            .equipe{
                border:1px solid;
                width:120px;
                height:50px;
                padding:15px;
                text-align: center;
                background-color:white;
            }
            equipe:hover{
                cursor:grab!important;
            }
            #poules{
                justify-content:space-evenly;
            }
            .bouton{
                width:80px;
                text-align:center;
                margin:auto;
                margin-top:50px;
            }
            #userName, #label{
                text-align:center;
                margin-top:50px;
            }
            .button:hover{
                cursor:pointer;
            }
            ul{
                list-style-type:none;
            }
            .match{
                margin-bottom:35px;
                margin-right:20px;
            }
            .eq{
                margin-right:10px;
                border:solid 1px;
                padding:3px;
                height:50px;

            }
            .huitiemes{
                display:flex;
                justify-content:space-between;
            }
            #sortable7{
                margin:auto;
            }
           
            .equipe3{
                border:1px solid;
                height:50px;
                width:200px;;
                padding:15px;
                text-align: center;
                background-color:white;
            }
            .classement{
                text-align:center;
            }
            .clast{
                border-width:0px;
                border:none;
            }
        </style>
    </head>
    <body>
        <form method="post" action="liste.php" name="paris">
            <h1>
                Qui sera l'équipe gagnante du Fem's édition 2020 ?
            </h1>
            <div id="premierePhase">
                <h2>Organise les poules en fonction du classement que tu veux parier, puis appuie sur VALIDER.</h2>
                <div id ="poules" class="row" >
                    <div class="pouleA">
                         <h3>
                                Poule A
                        </h3>
                        <ul id="sortable1" class="pouleA">
                            <li id="1A" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 1A
                            </li>
                            <li id="2A" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 2A
                            </li>
                            <li id="3A" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 3A
                            </li>
                            <li id="4A" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 4A
                            </li>
                        </ul>
                    </div>
                    <div class="pouleB">
                        <h3>
                                Poule B
                        </h3>
                        <ul id="sortable2" class="pouleA">
                           <li id="1B" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 1B
                            </li>
                            <li id="2B" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 2B
                            </li>
                            <li id="3B" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 3B
                            </li>
                            <li id="4B" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 4B
                            </li>
                        </ul>
                    </div>
                    <div class="pouleC">
                         <h3>
                                Poule C
                        </h3>
                        <ul id="sortable3" class="pouleA">
                            <li id="1C" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 1C
                            </li>
                            <li id="2C" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 2C
                            </li>
                            <li id="3C" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 3C
                            </li>
                            <li id="4C" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 4C
                            </li>
                        </ul>
                    </div>
                    <div class="pouleD">
                        <h3>
                                Poule D
                        </h3>
                        <ul id="sortable4" class="pouleA">
                           <li id="1D" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 1D
                            </li>
                            <li id="2D" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 2D
                            </li>
                            <li id="3D" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 3D
                            </li>
                            <li id="4D" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 4D
                            </li>
                        </ul>
                    </div><div class="pouleC">
                         <h3>
                                Poule E
                        </h3>
                        <ul id="sortable5" class="pouleA">
                            <li id="1E" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 1E
                            </li>
                            <li id="2E" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 2E
                            </li>
                            <li id="3E" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 3E
                            </li>
                            <li id="4E" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 4E
                            </li>
                        </ul>
                    </div>
                    <div class="pouleD">
                        <h3>
                                Poule F
                        </h3>
                        <ul id="sortable6" class="pouleA">
                           <li id="1F" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 1F
                            </li>
                            <li id="2F" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 2F
                            </li>
                            <li id="3F" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 3F
                            </li>
                            <li id="4F" class="equipe ui-state-default ">
                                <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                Equipe 4F
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row col justify-content-around">
                    <div class="col"></div>
                    <label class="col" for="nom" id="label">tom nom ici:</label>
                    <div class="col"  style="margin-top:50px">
                        <input type="text" name="nom" id="nom"  style="height:20px;">
                        <span style="display:none; color:red" id="requiredNom">Champ obligatoire</span>
                    </div>
                    <label class="col" for="prenom" id="label">ton prénom ici:</label>
                    <div class="col" style="margin-top:50px">
                        <input type="text" name="prenom" id="prenom" style="height:20px;">
                        <span style="display:none; color:red" id="requiredPrenom">Champ obligatoire</span>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="bouton btn-success btn-lg col" onclick="valider1()">
                        Valider
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div id="deuxiemePhase" style="display:none">
                <h2> C'est noté. J'ai aussi besoin des 4 meilleures équipes parmi celles que tu as classé 3èmes de leurs poules précédemment. <br/> Clique sur Valider quand c'est bon.</h2>
                <div class="row">
                    <div class="col-sm"></div>
                    <ul id="sortable7" class="col-2">
                               <li id="trezPouleA" class="equipe3 ui-state-default ">
                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                </li>
                                <li id="trezPouleB" class="equipe3 ui-state-default ">
                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                </li>
                                <li id="trezPouleC" class="equipe3 ui-state-default ">
                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                </li>
                                <li id="trezPouleD" class="equipe3 ui-state-default ">
                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                </li>
                                <li id="trezPouleE" class="equipe3 ui-state-default ">
                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                </li>
                                <li id="trezPouleF" class="equipe3 ui-state-default ">
                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                </li>
                    </ul>
                    <div class="col-sm"></div>
                </div>
                <div class="bouton btn-success btn-lg col-2" onclick="valider2()">
                    Valider
                </div>
            </div>
            <div class="phasesFinales" id="finales" style="display:none">
                <h2>C'est bien. Maintenant, pour chaque match, clique sur l'équipe que tu imagines vainqueur. Quand tu es arrivé jusqu'à la finale et que tu es sûr de tes choix, tu peux VALIDER COMME B2O.</h2>
                <div class="row huitiemes">
                    <div id="Match81" class="col match row">
                        <button id="preumsPouleA" type="button" class="bouton eq col" onclick="goToNextStage41(this)"></button>
                        <button type="button" id="deuzPouleB" class="bouton eq col" onclick="goToNextStage41(this)"></button>
                    </div>
                   <div id="Match82" class="col match row">
                        <button type="button" id="deuzPouleA" class="bouton eq col" onclick="goToNextStage41(this)"></button>
                        <button type="button" id="preumsPouleB" class="bouton eq col" onclick="goToNextStage41(this)"></button>
                    </div>
                    <div id="Match83" class="col match row">
                        <button type="button" id="preumsPouleC" class="bouton eq col" onclick="goToNextStage42(this)"></button>
                        <button type="button" id="deuzPouleD" class="bouton eq col" onclick="goToNextStage42(this)"></button>
                    </div>
                   <div id="Match84" class="col match row">
                        <button type="button" id="deuzPouleC" class="bouton eq col" onclick="goToNextStage42(this)"></button>
                        <button type="button" id="preumsPouleD" class="bouton eq col" onclick="goToNextStage42(this)"></button>
                    </div>
                    <div id="Match85" class="col match row">
                        <button type="button" id="preumsPouleE" class="bouton eq col" onclick="goToNextStage43(this)"></button>
                        <button type="button" id="deuzPouleF" class="bouton eq col" onclick="goToNextStage43(this)" ></button>
                    </div>
                   <div id="Match86" class="col match row">
                        <button type="button" id="deuzPouleE" class="bouton eq col" onclick="goToNextStage43(this)"></button>
                        <button type="button" id="preumsPouleF" class="bouton eq col" onclick="goToNextStage43(this)"></button>
                    </div>
                    <div id="Match87" class="col match row">
                        <button type="button" id="troisieme1" class="bouton eq col" onclick="goToNextStage44(this)"></button>
                        <button type="button" id="troisieme2" class="bouton eq col" onclick="goToNextStage44(this)"></button>
                    </div>
                    <div id="Match88" class="col match row">
                        <button type="button" id="troisieme3" class="bouton eq col" onclick="goToNextStage44(this)"></button>
                        <button type="button" id="troisieme4" class="bouton eq col" onclick="goToNextStage44(this)"></button>
                    </div>
                </div> 
                <div class="row quart justyfy-content-around">

                    <div id="Match41" class="col match row" >
                        <button type="button" id="Equipe1Match41" class="bouton eq col" onclick="goToNextStage21(this)"></button>
                        <button type="button" id="Equipe2Match41" class="bouton eq col" onclick="goToNextStage21(this)"></button>
                    </div>

                    <div id="Match42" class="col match row" >
                        <button type="button" id="Equipe1Match42" class="bouton eq col" onclick="goToNextStage21(this)"></button>
                        <button type="button" id="Equipe2Match42" class="bouton eq col" onclick="goToNextStage21(this)"></button>
                    </div>

                    <div id="Match43" class="col match row">
                        <button type="button" id="Equipe1Match43" class="bouton eq col" onclick="goToNextStage22(this)"></button>
                        <button type="button" id="Equipe2Match43" class="bouton eq col" onclick="goToNextStage22(this)"></button>
                    </div>

                    <div id="Match44" class="col match row">
                        <button type="button" id="Equipe1Match44" class="bouton eq col" onclick="goToNextStage22(this)"></button>
                        <button type="button" id="Equipe2Match44" class="bouton eq col" onclick="goToNextStage22(this)"></button>
                    </div>
                </div>
                <div class="row demi justify-content-around">
                    <div id="Match21" class="match row col" >
                        <button type="button" id="Equipe1Match21" class="bouton eq col" onclick="goToNextStagefinales(this)" ></button>
                        <button type="button" id="Equipe2Match21" class="bouton eq col" onclick="goToNextStagefinales(this)"></button>
                    </div>
                    <div id="Match22" class="match row col">
                        <button type="button" id="Equipe1Match22" class="bouton eq col" onclick="goToNextStagefinales(this)"></button>
                        <button type="button" id="Equipe2Match22" class="bouton eq col" onclick="goToNextStagefinales(this)"></button>
                    </div>
                </div>
                <div class="finales justify-content-around">
                     <div id="petiteFinale" class="match col">
                        <h3 style="text-align:center">Petite finale</h3>
                        <div class="row">
                            <button type="button" id="Equipe1PetiteFinale" class="bouton eq col" onclick="classementfinal(this)"></button>
                            <button type="button" id="Equipe2PetiteFinale" class="bouton eq col" onclick="classementfinal(this)"></button>
                        </div>
                    </div>
                    <div id="finale" class="match col">
                        <h3 style="text-align:center">Finale</h3>
                        <div class="row">
                            <button type="button" id="Equipe1Finale" class="bouton eq col" onclick="classementfinal(this)" ></button>
                            <button type="button" id="Equipe2Finale" class="bouton eq col" onclick="classementfinal(this)"></button>
                        </div>
                    </div>
                </div>
                <div style="text-align:center">
                    <h3>Le classement que tu paries est donc le suivant : </h3>
                        <h4 id="Premier">
                            Premier : <input class="clast" name="1" id="1" readonly></input> 
                        </h4>
                        <h4 id="Deuxième" >
                            Deuxième : <input class="clast" name="2" id="2" readonly></input>
                        </h4>
                        <h4 id="Deuxième">
                            Troisième : <input class="clast" name="3" id="3" readonly></input>
                        </h4>
                        <h4 id="Quatrième">
                            Quatrième : <input class="clast" name="4" id="4" readonly></input>
                        </h4>

                    <h3> Si tu es sûr, oublie pas de valider !</h3>
                    <button class="bouton btn-success btn-lg" type="submit">
                        Valider
                    </button>
                </div>    
            </div>
        </form>
    </body>

    

    <script>
         $( function() {
            $( "#sortable1" ).sortable();
            $( "#sortable1" ).disableSelection();
          } );
         $( function() {
            $( "#sortable2" ).sortable();
            $( "#sortable2" ).disableSelection();
          } );
        $( function() {
            $( "#sortable3" ).sortable();
            $( "#sortable3" ).disableSelection();
          } );
         $( function() {
            $( "#sortable4" ).sortable();
            $( "#sortable4" ).disableSelection();
          } );
        $( function() {
            $( "#sortable5" ).sortable();
            $( "#sortable5" ).disableSelection();
          } );
         $( function() {
            $( "#sortable6" ).sortable();
            $( "#sortable6" ).disableSelection();
          } );
        $( function() {
            $( "#sortable7" ).sortable();
            $( "#sortable7" ).disableSelection();
          } );
        
        var nom;
        var preumsPouleA;
        var preumsPouleB;
        var preumsPouleC;
        var preumsPouleD;
        var preumsPouleE;
        var preumsPouleF;
        var deuzPouleA;
        var deuzPouleB;
        var deuzPouleC;
        var deuzPouleD;
        var deuzPouleE;
        var deuzPouleF;
        var trezPouleA;
        var trezPouleB;
        var trezPouleC;
        var trezPouleD;
        var trezPouleE;
        var trezPouleF;
        var troisieme1;
        var troisieme2; 
        var troisieme3; 
        var troisieme4;
        
        function valider1(){
            if(document.getElementById("nom").value == ""  && document.getElementById("prenom").value != ""){
                document.getElementById("requiredNom").style.display = "block";
            }
            else if(document.getElementById("prenom").value == "" && document.getElementById("nom").value != ""){
                document.getElementById("requiredPrenom").style.display = "block";
            }
            else if(document.getElementById("nom").value == "" && document.getElementById("prenom").value == ""){
                document.getElementById("requiredNom").style.display = "block";
                document.getElementById("requiredPrenom").style.display = "block";
            }
            else if(document.getElementById("nom").value != "" && document.getElementById("prenom").value != ""){
                preumsPouleA = document.getElementById("sortable1").getElementsByTagName('li')[0];
                deuzPouleA = document.getElementById("sortable1").getElementsByTagName('li')[1];
                trezPouleA = document.getElementById("sortable1").getElementsByTagName('li')[2];
                preumsPouleB = document.getElementById("sortable2").getElementsByTagName('li')[0];
                deuzPouleB = document.getElementById("sortable2").getElementsByTagName('li')[1];
                trezPouleB = document.getElementById("sortable2").getElementsByTagName('li')[2];
                preumsPouleC = document.getElementById("sortable3").getElementsByTagName('li')[0];
                deuzPouleC =  document.getElementById("sortable3").getElementsByTagName('li')[1];
                trezPouleC = document.getElementById("sortable3").getElementsByTagName('li')[2];
                preumsPouleD =  document.getElementById("sortable4").getElementsByTagName('li')[0];
                deuzPouleD =  document.getElementById("sortable4").getElementsByTagName('li')[1];
                trezPouleD = document.getElementById("sortable4").getElementsByTagName('li')[2];
                preumsPouleE = document.getElementById("sortable5").getElementsByTagName('li')[0];
                deuzPouleE = document.getElementById("sortable5").getElementsByTagName('li')[1];
                trezPouleE = document.getElementById("sortable5").getElementsByTagName('li')[2];
                preumsPouleF = document.getElementById("sortable6").getElementsByTagName('li')[0];
                deuzPouleF = document.getElementById("sortable6").getElementsByTagName('li')[1];
                trezPouleF = document.getElementById("sortable6").getElementsByTagName('li')[2];
                document.getElementById("trezPouleA").textContent = trezPouleA.textContent;
                document.getElementById("trezPouleB").textContent = trezPouleB.textContent;
                document.getElementById("trezPouleC").textContent = trezPouleC.textContent
                document.getElementById("trezPouleD").textContent = trezPouleD.textContent
                document.getElementById("trezPouleE").textContent = trezPouleE.textContent;
                document.getElementById("trezPouleF").textContent = trezPouleF.textContent;

                document.getElementById("premierePhase").style.display = "none";
                document.getElementById("deuxiemePhase").style.display = "block";
            }
   
        }
        function valider2(){
            troisieme1 = document.getElementById("sortable7").getElementsByTagName('li')[0];
            troisieme2 = document.getElementById("sortable7").getElementsByTagName('li')[1];
            troisieme3 = document.getElementById("sortable7").getElementsByTagName('li')[2];
            troisieme4 = document.getElementById("sortable7").getElementsByTagName('li')[3];
            
            //On attribue le text content à chaque huitième 
            document.getElementById("preumsPouleA").textContent = preumsPouleA.textContent;
            document.getElementById("deuzPouleA").textContent = deuzPouleA.textContent;
            document.getElementById("preumsPouleB").textContent = preumsPouleB.textContent;
            document.getElementById("deuzPouleB").textContent = deuzPouleB.textContent;
            document.getElementById("preumsPouleC").textContent = preumsPouleC.textContent;
            document.getElementById("deuzPouleC").textContent = deuzPouleC.textContent;
            document.getElementById("preumsPouleD").textContent = preumsPouleD.textContent;
            document.getElementById("deuzPouleD").textContent = deuzPouleD.textContent;
            document.getElementById("preumsPouleE").textContent = preumsPouleE.textContent;
            document.getElementById("deuzPouleE").textContent = deuzPouleE.textContent;
            document.getElementById("preumsPouleF").textContent = preumsPouleF.textContent;
            document.getElementById("deuzPouleF").textContent = deuzPouleF.textContent;
            document.getElementById("troisieme1").textContent = troisieme1.textContent;
            document.getElementById("troisieme2").textContent = troisieme2.textContent;
            document.getElementById("troisieme3").textContent = troisieme3.textContent;
            document.getElementById("troisieme4").textContent = troisieme4.textContent;
            
            //On efface les phases de poules et on affiche les huitièmes de finales
            document.getElementById("deuxiemePhase").style.display = "none";
            document.getElementById("finales").style.display = "block";
        }
        
        function goToNextStage41(obj){
            if(obj.id == "preumsPouleA" || obj.id == "deuzPouleB"){
                document.getElementById("Equipe1Match41").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "preumsPouleB" || obj.id == "deuzPouleA"){
                document.getElementById("Equipe2Match41").textContent = document.getElementById(obj.id).textContent;
            }
        }
        
        function goToNextStage42(obj){
            if(obj.id == "preumsPouleC" || obj.id == "deuzPouleD"){
                document.getElementById("Equipe1Match42").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "preumsPouleD" || obj.id == "deuzPouleC"){
                document.getElementById("Equipe2Match42").textContent = document.getElementById(obj.id).textContent;
            }
        }
        function goToNextStage43(obj){
            if(obj.id == "preumsPouleE" || obj.id == "deuzPouleF"){
                document.getElementById("Equipe1Match43").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "preumsPouleF" || obj.id == "deuzPouleE"){
                document.getElementById("Equipe2Match43").textContent = document.getElementById(obj.id).textContent;
            }
        }
        
        function goToNextStage44(obj){
            if(obj.id == "troisieme1" || obj.id == "troisieme2"){
                document.getElementById("Equipe1Match44").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "troisieme3" || obj.id == "troisieme4"){
                document.getElementById("Equipe2Match44").textContent = document.getElementById(obj.id).textContent;
            }
        }
        function goToNextStage21(obj){
            if(obj.id == "Equipe1Match41" || obj.id == "Equipe2Match41"){
                document.getElementById("Equipe1Match21").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "Equipe1Match42" || obj.id == "Equipe2Match42"){
                document.getElementById("Equipe2Match21").textContent = document.getElementById(obj.id).textContent;
            }
        }
        function goToNextStage22(obj){
            if(obj.id == "Equipe1Match43" || obj.id == "Equipe2Match43"){
                document.getElementById("Equipe1Match22").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "Equipe1Match44" || obj.id == "Equipe2Match44"){
                document.getElementById("Equipe2Match22").textContent = document.getElementById(obj.id).textContent;
            }
        }
        function goToNextStagefinales(obj){
            if(obj.id == "Equipe1Match21"){
                document.getElementById("Equipe1Finale").textContent = document.getElementById("Equipe1Match21").textContent;
                document.getElementById("Equipe1PetiteFinale").textContent = document.getElementById("Equipe2Match21").textContent;
            }
            if(obj.id == "Equipe2Match21"){
                document.getElementById("Equipe1Finale").textContent = document.getElementById("Equipe2Match21").textContent;
                document.getElementById("Equipe1PetiteFinale").textContent = document.getElementById("Equipe1Match21").textContent;
            }
            if(obj.id == "Equipe1Match22"){
                document.getElementById("Equipe2Finale").textContent = document.getElementById("Equipe1Match22").textContent;
                document.getElementById("Equipe2PetiteFinale").textContent = document.getElementById("Equipe2Match22").textContent;
            }
            if(obj.id == "Equipe2Match22"){
                document.getElementById("Equipe2Finale").textContent = document.getElementById("Equipe2Match22").textContent;
                document.getElementById("Equipe2PetiteFinale").textContent = document.getElementById("Equipe1Match22").textContent;
            }
        }
        function classementfinal(obj){
            if(obj.id == "Equipe1Finale"){
                document.getElementById("1").value = document.getElementById("Equipe1Finale").textContent.trim();
                document.getElementById("2").value = document.getElementById("Equipe2Finale").textContent.trim();
            }
            if(obj.id == "Equipe2Finale"){
                document.getElementById("1").value = document.getElementById("Equipe2Finale").textContent.trim();
                document.getElementById("2").value = document.getElementById("Equipe1Finale").textContent.trim();
            }
            if(obj.id == "Equipe1PetiteFinale"){
                document.getElementById("3").value = document.getElementById("Equipe1PetiteFinale").textContent.trim();
                document.getElementById("4").value = document.getElementById("Equipe2PetiteFinale").textContent.trim();
            }
            if(obj.id == "Equipe2PetiteFinale"){
                document.getElementById("3").value = document.getElementById("Equipe2PetiteFinale").textContent.trim();
                document.getElementById("4").value = document.getElementById("Equipe1PetiteFinale").textContent.trim();
            }
        }
        
        function valider3(){    
            
            document.getElementById("finales").style.display="none";
            document.getElementById("utilisateur").textContent = nom;
            document.getElementById("fin").style.display="block";
        }
        
    </script>

</html>

