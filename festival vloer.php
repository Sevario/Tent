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
        <h1>Festival vloer</h1>
            <form action="testpage.php" method="post">
                <div class="vlonders">
                    <label>1. Vlonders</label>
                    <label>
                        <input type="text" id="vlonders" name="vloer" style="width: 50px;"/>m²
                    </label>
                </div>
                <div class="checkhide">
                    <label>2. Leggen</label><br>
                    <label>
                        <input type="checkbox" id="leggen"  name="leggen" value="Gelegd"/>
                        <label class="checkbox" for="leggen"><img src="img/geen.svg" /></label>
                        <p>Gelegd</p>
                    </label>
                    <label>
                        <input type="checkbox" id="ongelegd" name="leggen" value="Ongelegd"/>
                        <label class="checkbox" for="ongelegd"><img src="img/geen.svg" /></label>
                        <p>Ongelegd</p>
                    </label>
                </div>
                <div class="checkhide">
                    <label>3. Transport</label><br>
                    <label>
                        <input type="checkbox" id="bezorgen" name="transport" value="Bezorgen"/>
                        <label class="checkbox" for="bezorgen"><img src="img/bezorgen.svg" /></label>
                        <p>Bezorgen</p>
                    </label>
                    <label>
                        <input type="checkbox" id="afhalen" name="transport" value="Afhalen"/>
                        <label class="checkbox" for="afhalen"><img src="img/afhalen.svg" /></label>
                        <p>Afhalen</p>
                    </label>
                </div>
                <div class="checkhide">
                    <label>4. Ondergrond</label><br>
                    <label>
                        <input type="checkbox" id="stenenstraat" name="straat" value="Stenen straat"/>
                        <label class="checkbox" for="stenenstraat"><img src="img/stenen_straat.svg" /></label>
                        <p>Stenen straat</p>
                    </label>
                    <label>
                        <input type="checkbox" id="asfalt" name="straat" value="Asfalt"/>
                        <label class="checkbox" for="asfalt"><img src="img/asfalt.svg" /></label>
                        <p>Asfalt</p>
                    </label>
                    <label>
                        <input type="checkbox" id="gras" name="straat" value="Gras"/>
                        <label class="checkbox" for="gras"><img src="img/gras.svg" /></label>
                        <p>Gras</p>
                    </label>
                    <label>
                        <input type="checkbox" id="grind" name="straat" value="Grind"/>
                        <label class="checkbox" for="grind"><img src="img/grind.svg" /></label>
                        <p>Grind</p>
                    </label>
                    <label>
                        <input type="checkbox" id="beton" name="straat" value="Beton"/>
                        <label class="checkbox" for="beton"><img src="img/beton.svg" /></label>
                        <p>Beton</p>
                    </label>
                    <label>
                        <input type="checkbox" id="strand" name="straat" value="Strand"/>
                        <label class="checkbox" for="strand"><img src="img/strand.svg" /></label>
                        <p>Strand</p>
                    </label>
                </div>
                <div>
                    <label>
                        <input class="geenharingen" type="checkbox" name="haringen_festival" value="geenharingen">
                        Er kunnen geen haringen geslagen worden.<br>
                    </label><br>
                    <label>
                        Wilt u hem zo <input type="submit" name="versturen" value="versturen"/> of nog een tent <input type="submit" name="toevoegen" value="toevoegen">?
                    </label>
                </div>
            </form>
    </body>
</html>