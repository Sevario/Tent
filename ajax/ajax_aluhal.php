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
        <h1>Aluhal</h1> 
            <div class="matenform">
                <label>1. Maten</label>
                    <br />
                    <select id='maten'> 
                        <option value="breete">Breedte</option>
                        <option value="option1">6</option>
                        <option value="option2">8</option>
                        <option value="option1">10</option>
                        <option value="option2">12.5</option>
                        <option value="option1">15</option>
                        <option value="option2">20</option>
                        <option value="option1">20</option>
                        <option value="option2">25</option>
                    </select>
                    <select id='maten'> 
                        <option value="lengte">Lengte</option>
                        <option value="option1">5</option>
                        <option value="option2">10</option>
                        <option value="option1">15</option>
                        <option value="option2">20</option>
                        <option value="option1">25</option>
                        <option value="option2">30</option>
                        <option value="option1">35</option>
                        <option value="option2">40</option>
                        <option value="option2">45</option>
                        <option value="option1">50</option>
                        <option value="option2">55</option>
                        <option value="option1">60</option>
                        <option value="option2">65<option>
                        <option value="option1">70</option>
                        <option value="option2">75</option>
                        <option value="option2">80</option>
                        <option value="option1">85</option>
                        <option value="option2">90</option>
                        <option value="option1">95</option>
                        <option value="option2">100</option>
                    </select>
                </div>
            <div class="checkhide">
                <label>2. Vloer</label><br>
                <label>
                    <input type="checkbox" id="vlonders" name="vloeren"/>
                    <label class="checkbox" for="vlonders"><img src="img/vlonders.svg" /></label>
                    <p>Vlonders</p>
                </label>
                <label>
                    <input type="checkbox" id="systeemvloer" name="vloeren"/>
                    <label class="checkbox" for="systeemvloer"><img src="img/systeemvloer.svg" /></label>
                    <p>Systeemvloer</p>
                </label>
                <label>
                    <input type="checkbox" id="geenvloer" name="vloeren"/>
                    <label class="checkbox" for="geenvloer"><img src="img/geen.svg" /></label>
                    <p>Geen Vloer</p>
                </label>
            </div>
            <div class="checkhide">
                <label>3. Opties</label><br>
                <label>
                    <input type="checkbox" id="hardewanden" name="opties"/>
                    <label class="checkbox" for="hardewanden"><img src="img/geen.svg" /></label>
                    <p>Harde Wanden</p>
                </label>
                <label>
                    <input type="checkbox" id="glaswand" name="opties"/>
                    <label class="checkbox" for="glaswand"><img src="img/geen.svg" /></label>
                    <p>Glaswand per meter</p>
                </label>
                <label>
                    <input type="checkbox" id="bankirai" name="opties"/>
                    <label class="checkbox" for="bankirai"><img src="img/geen.svg" /></label>
                    <p>Bankirai Terrastegels</p>
                </label>
                <label>
                    <input type="checkbox" id="antraciet" name="opties"/>
                    <label class="checkbox" for="antraciet"><img src="img/geen.svg" /></label>
                    <p>Antracie Tapijttegels</p>
                </label>
            </div>
            <div class="checkhide">
                <label>4. Toebehoren</label><br>
                <label>
                    <input type="checkbox" id="brandblusser"/>
                    <label class="checkbox" for="brandblusser"><img src="img/brandblusser.svg" /></label>
                    <p>Brandblusser</p>
                </label>
                <label>
                    <input type="checkbox" id="noodverlichting"/>
                    <label class="checkbox" for="noodverlichting"><img src="img/noodverlichting.svg" /></label>
                    <p>Noodverlichting</p>
                </label>
                <label>
                    <input type="checkbox" id="heater" name="opties"/>
                    <label class="checkbox" for="heater"><img src="img/heater.svg" /></label>
                    <p>Heater</p>
                </label>
            </div>
            <div class="checkhide">
                <label>5. Ondergrond</label><br>
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
    </body>
</html>
