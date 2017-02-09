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
        <h1>Vip Paviljoen</h1>
            <div class="breedte">
                <label>1. Breedte (in meters)</label>

                <select id="breedte">
                    <option value = "0"></option>
                    <option value = "1">6</option>
                    <option value = "2">8</option>
                    <option value = "3">10</option>
                    <option value = "3">12.5</option>
                    <option value = "3">15</option>
                    <option value = "3">20</option>
                    <option value = "3">25</option>
                </select>
                <label> Lengte (in meters)</label>
                <select id="lengte">
                    <option value = "0"></option>
                    <option value = "1">5</option>
                    <option value = "2">10</option>
                    <option value = "3">15</option>
                    <option value = "1">20</option>
                    <option value = "2">25</option>
                    <option value = "3">30</option>
                    <option value = "1">35</option>
                    <option value = "2">40</option>
                    <option value = "3">45</option>
                    <option value = "1">50</option>
                    <option value = "2">55</option>
                    <option value = "2">60</option>
                    <option value = "2">65</option>
                    <option value = "2">70</option>
                    <option value = "2">75</option>
                    <option value = "2">80</option>
                    <option value = "2">85</option>
                    <option value = "2">90</option>
                    <option value = "2">95</option>
                    <option value = "2">100</option>
                </select>
            </div>
            <div class="checkhide">
                <label>2. Opties</label><br>
                <label>
                    <input type="checkbox" id="dak"  name="opties"/>
                    <label class="checkbox" for="dak"><img src="img/geen.svg" /></label>
                    <p>Transparant dak</p>
                </label>
                <label>
                    <input type="checkbox" id="wand"  name="opties"/>
                    <label class="checkbox" for="wand"><img src="img/geen.svg" /></label>
                    <p>Glaswand per meter</p>
                </label>
                <label>
                    <input type="checkbox" id="bankirai"  name="opties"/>
                    <label class="checkbox" for="bankirai"><img src="img/geen.svg" /></label>
                    <p>Bankirai vloertegel</p>
                </label>
                <label>
                    <input type="checkbox" id="antraciet"  name="opties"/>
                    <label class="checkbox" for="antraciet"><img src="img/geen.svg" /></label>
                    <p>Antraciet tapijttegel</p>
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
                <label>
                    <input type="checkbox" id="geen" name="vloer" />
                    <label class="checkbox" for="geen"><img src="img/geen.svg" /></label>
                    <p>Geen</p>
                </label>
            </div>
            <div class="checkhide">
                <label>4. Ondergrond</label><br>
                <label>
                    <input type="checkbox" id="stenenstraat" name="straat"/>
                    <label class="checkbox" for="stenenstraat"><img src="img/stenen_straat.svg" /></label>
                    <p>Stenen straat</p>
                </label>
                <label>
                    <input type="checkbox" id="asfalt" name="straat"/>
                    <label class="checkbox" for="asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input type="checkbox" id="gras" name="straat"/>
                    <label class="checkbox" for="gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input type="checkbox" id="grind" name="straat"/>
                    <label class="checkbox" for="grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input type="checkbox" id="beton" name="straat"/>
                    <label class="checkbox" for="beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input type="checkbox" id="strand" name="straat"/>
                    <label class="checkbox" for="strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label>
            </div>
            <div>
                <label>
                    <input class="geenharingen" type="checkbox" name="haringen" value="geenharingen">
                    Er kunnen geen haringen geslagen worden.<br>
                </label><br>
            </div>
    </body>
</html>