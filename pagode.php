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
        <h1>Pagode</h1>
        <form>
            <div class="matenform">
                <label>1. Maten</label>
                    <br />
                    <select id='maten'>
                        <option value="null"></option>
                        <option value="option1">4x4</option>
                        <option value="option2">5x5</option>
                    </select>
                </div>
            <div class="aantaldiv">
                 <input class="aantal" type="text" class="form-control" name="aantal" placeholder="Aantal">
            </div>
            <div class="checkhide">
                <label>2. Vloer</label><br>
                <label>
                    <input type="checkbox" id="vlonders"  name="vloer"/>
                    <label class="checkbox" for="vlonders"><img src="img/vlonders.svg" /></label>
                    <p>Vlonders</p>
                </label>
                <label>
                    <input type="checkbox" id="systeemvloer" name="vloer" />
                    <label class="checkbox" for="systeemvloer"><img src="img/systeemvloer.svg" /></label>
                    <p>Systeemvloer</p>
                </label>
                <label>
                    <input type="checkbox" id="geenvloer" name="vloer" />
                    <label class="checkbox" for="geenvloer"><img src="img/geen.svg" /></label>
                    <p>Geen Vloer</p>
                </label>
            </div>
            <div class="checkhide">
                <label>3. Toebehoren</label><br>
                <label>
                    <input type="checkbox" id="brandblusser" />
                    <label class="checkbox" for="brandblusser"><img src="img/brandblusser.svg" /></label>
                    <p>Brandblusser</p>
                </label>
                <label>
                    <input type="checkbox" id="noodverlichting" />
                    <label class="checkbox" for="noodverlichting"><img src="img/noodverlichting.svg" /></label>
                    <p>Noodverlichting</p>
                </label>
                <label>
                    <input type="checkbox" id="heater" />
                    <label class="checkbox" for="heater"><img src="img/heater.svg" /></label>
                    <p>Heater</p>
                </label>
            </div>
            <div class="checkhide">
                <label>4. Ondergrond</label><br>
                <label>
                    <input type="checkbox" id="stenenstraat" name="vloeren"/>
                    <label class="checkbox" for="stenenstraat"><img src="img/stenen_straat.svg" /></label>
                    <p>Stenen Straat</p>
                </label>
                <label>
                    <input type="checkbox" id="asfalt" name="vloeren"/>
                    <label class="checkbox" for="asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input type="checkbox" id="gras" name="vloeren"/>
                    <label class="checkbox" for="gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input type="checkbox" id="grind" name="vloeren"/>
                    <label class="checkbox" for="grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input type="checkbox" id="beton" name="vloeren"/>
                    <label class="checkbox" for="beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input type="checkbox" id="strand" name="vloeren"/>
                    <label class="checkbox" for="strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label> <br>
            </div>
            <div>
                <label>
                     <input class="geenharingen" type="checkbox" name="haringen" value="geenharingen" /> Er kunnen geen haringen geslagen worden.
                <label>
            </div>
        </form>
    </body>
</html>