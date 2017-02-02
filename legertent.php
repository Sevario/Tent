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
        <h1>Legertent</h1> 
        <form>
            <div class="matenform">
                <label>1. Maten</label>
                    <br />
                    <select id='maten'> 
                        <option value="null"></option>
                        <option value="option1">5x5</option>
                        <option value="option2">5x10</option>
                    </select>
                </div>
            <div class="aantaldiv">
                 <input class="aantal" type="text" class="form-control" name="aantal" placeholder="Aantal">
            </div>
            <div class="checkhide">
                <label>2. Vloer</label><br>
                <label>
                    <input type="checkbox" id="vlonders" name="vloeren"/>
                    <label class="checkbox" for="vlonders"><img src="img/vlonders.svg" /></label>
                    <p>Vlonders</p>
                </label>
                <label>
                    <input type="checkbox" id="zeil" name="vloeren"/>
                    <label class="checkbox" for="zeil"><img src="img/zeil.svg" /></label>
                    <p>Zeil</p>
                </label>
                <label>
                    <input type="checkbox" id="geenvloer" name="vloeren"/>
                    <label class="checkbox" for="geenvloer"><img src="img/geen.svg" /></label>
                    <p>Geen Vloer</p>
                </label>
            </div>
            <div class="checkhide">
                <label>3. Op/Afbouw</label><br>
                <label>
                    <input type="checkbox" id="opafbouwja" name="op_afbouw"/>
                    <label class="checkbox" for="opafbouwja"><img src="img/op_afbouw.svg" /></label>
                    <p>Op/Afbouw</p>
                </label>
                <label>
                    <input type="checkbox" id="opafbouwnee" name="op_afbouw"/>
                    <label class="checkbox" for="opafbouwnee"><img src="img/geen.svg" /></label>
                    <p>Geen Op/Afbouw</p>
                </label>
            </div>
            <div class="checkhide">
                <label>4. Toebehoren</label><br>
                <label>
                    <input type="checkbox" id="veldbed"/>
                    <label class="checkbox" for="veldbed"><img src="img/veldbed.svg" /></label>
                    <p>Veldbed</p>
                </label>
                <label>
                    <input type="checkbox" id="slaapzak"/>
                    <label class="checkbox" for="slaapzak"><img src="img/slaapzak.svg" /></label>
                    <p>Slaapzak</p>
                </label>
            </div>
            <div class="checkhide">
                <label>5. Transport</label><br>
                <label>
                    <input type="checkbox" id="bezorgen" name="transport"/>
                    <label class="checkbox" for="bezorgen"><img src="img/bezorgen.svg" /></label>
                    <p>Bezorgen</p>
                </label>
                <label>
                    <input type="checkbox" id="afhalen" name="transport"/>
                    <label class="checkbox" for="afhalen"><img src="img/afhalen.svg" /></label>
                    <p>Afhalen</p>
                </label>
            </div>
            <div class="checkhide">
                <label>6. Ondergrond</label><br>
                <label>
                    <input type="checkbox" id="stenenstraat" name="ondergrond"/>
                    <label class="checkbox" for="stenenstraat"><img src="img/stenen_straat.svg" /></label>
                    <p>Stenen Straat</p>
                </label>
                <label>
                    <input type="checkbox" id="asftalt" name="ondergrond"/>
                    <label class="checkbox" for="asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input type="checkbox" id="gras" name="ondergrond"/>
                    <label class="checkbox" for="gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input type="checkbox" id="grind" name="ondergrond"/>
                    <label class="checkbox" for="grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input type="checkbox" id="beton" name="ondergrond"/>
                    <label class="checkbox" for="beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input type="checkbox" id="strand" name="ondergrond"/>
                    <label class="checkbox" for="strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label><br>
            </div>
            <div>
                <label>
                     <input class="geenharingen" type="checkbox" name="haringen" value="geenharingen" />
                     Er kunnen geen haringen geslagen worden.
                <label>
            </div>
        </form>
    </body>
</html>
