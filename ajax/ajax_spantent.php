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
        <h1>Spantent</h1>
            <div class="breedte">
                <label>1. Breedte (in meters)</label>

                <select id="breedte">
                    <option value = "0"></option>
                    <option value = "1">10</option>
                    <option value = "2">15</option>
                    <option value = "3">20</option>
                </select>
                <label> Lengte (in meters)</label>
                <select id="lengte">
                    <option value = "0"></option>
                    <option value = "1">10</option>
                    <option value = "2">15</option>
                    <option value = "3">20</option>
                    <option value = "1">25</option>
                    <option value = "2">30</option>
                    <option value = "3">35</option>
                    <option value = "1">40</option>
                    <option value = "2">45</option>
                    <option value = "3">50</option>
                    <option value = "1">55</option>
                    <option value = "2">60</option>
                </select>
            </div>
            <div class="checkhide">
                <label>2. Vloer</label><br>
                <label>
                    <input class="span_vloer" type="checkbox" id="span_vlonders"  name="span_vloer"/>
                    <label class="checkbox" for="span_vlonders"><img src="img/vlonders_leveren.svg" /></label>
                    <p>Vlonders</p>
                </label>
                <label>
                    <input class="span_vloer" type="checkbox" id="span_geenvloer" name="span_vloer" />
                    <label class="checkbox" for="span_geenvloer"><img src="img/geen.svg" /></label>
                    <p>Geen Vloer</p>
                </label>
            </div>
            <div class="checkhide" style="display:none;" id="span_toeb">
                <label>3. Toebehoren</label><br>
                <label>
                    <input class="span_toeb" type="checkbox" id="span_brandblusser" />
                    <label class="checkbox" for="span_brandblusser"><img src="img/brandblusser.svg" /></label>
                    <p>Brandblusser</p>
                </label>
                <label>
                    <input class="span_toeb" type="checkbox" id="span_noodverlichting" />
                    <label class="checkbox" for="span_noodverlichting"><img src="img/noodverlichting.svg" /></label>
                    <p>Noodverlichting</p>
                </label>
                <label>
                    <input class="span_toeb" type="checkbox" id="span_heater" />
                    <label class="checkbox" for="span_heater"><img src="img/heater.svg" /></label>
                    <p>Heater</p>
                </label>
                <label>
                    <input class="span_toeb" type="checkbox" id="span_geen" />
                    <label class="checkbox" for="span_geen"><img src="img/geen.svg" /></label>
                    <p>Geen</p>
                </label>
            </div>
            <div class="checkhide" style="display:none;" id="span_grond">
                <label>4. Ondergrond</label><br>
                <label>
                    <input class="span_grond" type="checkbox" id="span_stenenstraat" name="span_straat"/>
                    <label class="checkbox" for="span_stenenstraat"><img src="img/tegels.svg" /></label>
                    <p>Stenen straat</p>
                </label>
                <label>
                    <input class="span_grond" type="checkbox" id="span_asfalt" name="span_straat"/>
                    <label class="checkbox" for="span_asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input class="span_grond" type="checkbox" id="span_gras" name="span_straat"/>
                    <label class="checkbox" for="span_gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input class="span_grond" type="checkbox" id="span_grind" name="span_straat"/>
                    <label class="checkbox" for="span_grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input class="span_grond" type="checkbox" id="span_beton" name="span_straat"/>
                    <label class="checkbox" for="beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input class="span_grond" type="checkbox" id="span_strand" name="span_straat"/>
                    <label class="checkbox" for="span_strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label>
            </div>
        <div style="display:none;" id="span_haringen">
                <label>
                    <input class="geenharingen" type="checkbox" name="span_haringen" value="geenharingen">
                    Er kunnen geen haringen geslagen worden.<br>
                </label><br>
            </div>
    </body>
</html>