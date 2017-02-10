<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <script src="js/jquery.js"></script>
            <script src="js/tent.js"></script>
        <title></title>
    </head>
    <body>
        <?php $festival = "yes"; ?>
        <h1>Festival Vloer</h1>
                <div class="vlonders">
                    <label>1. Vlonders</label>
                    <label>
                        <input type="text" id="festival_vlonders" name="vloer" style="width: 50px;"/>m²
                    </label>
                </div>
                <div class="checkhide">
                    <label>2. Leggen</label><br>
                    <label>
                        <input class="leggen" type="checkbox" id="leggen"  name="leggen" value="Gelegd"/>
                        <label class="checkbox " for="leggen"><img src="img/geen.svg" /></label>
                        <p>Gelegd</p>
                    </label>
                    <label>
                        <input class="leggen" type="checkbox" id="ongelegd" name="leggen" value="Ongelegd"/>
                        <label class="checkbox" for="ongelegd"><img src="img/geen.svg" /></label>
                        <p>Ongelegd</p>
                    </label>
                </div>
                <div class="checkhide" id='festivalbezorgen' style='display: none;'>
                    <label>3. Transport</label><br>
                    <label>
                        <input class="transport" type="checkbox" id="bezorgen" name="transport" value="Bezorgen"/>
                        <label class="checkbox" for="bezorgen"><img src="img/bezorgen.svg" /></label>
                        <p>Bezorgen</p>
                    </label>
                    <label>
                        <input class="transport" type="checkbox" id="afhalen" name="transport" value="Afhalen"/>
                        <label class="checkbox" for="afhalen"><img src="img/geen.svg" /></label>
                        <p>Afhalen</p>
                    </label>
                </div>
                <div class="checkhide" id='festivalgrond' style='display: none;'>
                    <label>4. Ondergrond</label><br>
                    <label>
                        <input class="straat" type="checkbox" id="fest_stenenstraat" name="straat" value="Stenen straat"/>
                        <label class="checkbox" for="fest_stenenstraat"><img src="img/tegels.svg" /></label>
                        <p>Stenen straat</p>
                    </label>
                    <label>
                        <input class="straat" type="checkbox" id="fest_asfalt" name="straat" value="Asfalt"/>
                        <label class="checkbox" for="fest_asfalt"><img src="img/asfalt.svg" /></label>
                        <p>Asfalt</p>
                    </label>
                    <label>
                        <input class="straat" type="checkbox" id="fest_gras" name="straat" value="Gras"/>
                        <label class="checkbox" for="fest_gras"><img src="img/gras.svg" /></label>
                        <p>Gras</p>
                    </label>
                    <label>
                        <input class="straat" type="checkbox" id="fest_grind" name="straat" value="Grind"/>
                        <label class="checkbox" for="fest_grind"><img src="img/grind.svg" /></label>
                        <p>Grind</p>
                    </label>
                    <label>
                        <input class="straat" type="checkbox" id="fest_beton" name="straat" value="Beton"/>
                        <label class="checkbox" for="fest_beton"><img src="img/beton.svg" /></label>
                        <p>Beton</p>
                    </label>
                    <label>
                        <input class="straat" type="checkbox" id="fest_strand" name="straat" value="Strand"/>
                        <label class="checkbox" for="fest_strand"><img src="img/strand.svg" /></label>
                        <p>Strand</p>
                    </label>
                </div>
                <div id="festivalharing" style="display:none">
                    <label>
                        <input class="geenharingen" type="checkbox" name="fest_haringen_festival" value="geenharingen">
                        Er kunnen geen haringen geslagen worden.<br>
                    </label><br>
                </div>
    </body>