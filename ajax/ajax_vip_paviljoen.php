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
                    <input class="vip_opties" type="checkbox" id="vip_dak"  name="vip_opties"/>
                    <label class="checkbox" for="vip_dak"><img src="img/geen.svg" /></label>
                    <p>Transparant dak</p>
                </label>
                <label>
                    <input class="vip_opties" type="checkbox" id="vip_wand"  name="vip_opties"/>
                    <label class="checkbox" for="vip_wand"><img src="img/geen.svg" /></label>
                    <p>Glaswand per meter</p>
                </label>
                <label>
                    <input class="vip_opties" type="checkbox" id="vip_bankirai"  name="vip_opties"/>
                    <label class="checkbox" for="vip_bankirai"><img src="img/geen.svg" /></label>
                    <p>Bankirai vloertegel</p>
                </label>
                <label>
                    <input class="vip_opties" type="checkbox" id="vip_antraciet"  name="vip_opties"/>
                    <label class="checkbox" for="vip_antraciet"><img src="img/geen.svg" /></label>
                    <p>Antraciet tapijttegel</p>
                </label>
            </div>
            <div class="checkhide" style="display:none;" id="vip_toeb">
                <label>3. Toebehoren</label><br>
                <label>
                    <input class="vip_toeb" type="checkbox" id="vip_brandblusser" />
                    <label class="checkbox" for="vip_brandblusser"><img src="img/brandblusser.svg" /></label>
                    <p>Brandblusser</p>
                </label>
                <label>
                    <input class="vip_toeb" type="checkbox" id="vip_noodverlichting" />
                    <label class="checkbox" for="vip_noodverlichting"><img src="img/noodverlichting.svg" /></label>
                    <p>Noodverlichting</p>
                </label>
                <label>
                    <input class="vip_toeb" type="checkbox" id="vip_heater" />
                    <label class="checkbox" for="vip_heater"><img src="img/heater.svg" /></label>
                    <p>Heater</p>
                </label>
                <label>
                    <input class="vip_toeb" type="checkbox" id="vip_geen" />
                    <label class="checkbox" for="vip_geen"><img src="img/geen.svg" /></label>
                    <p>Geen</p>
                </label>
            </div>
            <div class="checkhide" style="display:none;" id="vip_grond">
                <label>4. Ondergrond</label><br>
                <label>
                    <input class="vip_grond" type="checkbox" id="vip_stenenstraat" name="vip_straat"/>
                    <label class="checkbox" for="vip_stenenstraat"><img src="img/tegels.svg" /></label>
                    <p>Stenen straat</p>
                </label>
                <label>
                    <input class="vip_grond" type="checkbox" id="vip_asfalt" name="vip_straat"/>
                    <label class="checkbox" for="vip_asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input class="vip_grond" type="checkbox" id="vip_gras" name="vip_straat"/>
                    <label class="checkbox" for="vip_gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input class="vip_grond" type="checkbox" id="vip_grind" name="vip_straat"/>
                    <label class="checkbox" for="vip_grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input class="vip_grond" type="checkbox" id="vip_beton" name="vip_straat"/>
                    <label class="checkbox" for="vip_beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input class="vip_grond" type="checkbox" id="vip_strand" name="vip_straat"/>
                    <label class="checkbox" for="vip_strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label>
            </div>
            <div style="display:none;" id="vip_haringen">
                <label>
                    <input class="geenharingen" type="checkbox" name="vip_haringen" value="geenharingen">
                    Er kunnen geen haringen geslagen worden.<br>
                </label><br>
            </div>
    </body>
</html>