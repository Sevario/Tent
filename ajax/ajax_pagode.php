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
                    <input class="pagode_vloer" type="checkbox" id="pagode_vlonders"  name="pagode_vloer"/>
                    <label class="checkbox" for="pagode_vlonders"><img src="img/vlonders_leveren.svg" /></label>
                    <p>Vlonders</p>
                </label>
                <label>
                    <input class="pagode_vloer" type="checkbox" id="pagode_systeemvloer" name="pagode_vloer" />
                    <label class="checkbox" for="pagode_systeemvloer"><img src="img/systeemvloer.svg" /></label>
                    <p>Systeemvloer</p>
                </label>
                <label>
                    <input class="pagode_vloer" type="checkbox" id="pagode_geenvloer" name="pagode_vloer" />
                    <label class="checkbox" for="pagode_geenvloer"><img src="img/geen.svg" /></label>
                    <p>Geen Vloer</p>
                </label>
            </div>
            <div class="checkhide" style="display: none;" id="pagode_toeb">
                <label>3. Toebehoren</label><br>
                <label>
                    <input class="pagode_toeb" type="checkbox" id="pagode_brandblusser" />
                    <label class="checkbox" for="pagode_brandblusser"><img src="img/brandblusser.svg" /></label>
                    <p>Brandblusser</p>
                </label>
                <label>
                    <input class="pagode_toeb" type="checkbox" id="pagode_noodverlichting" />
                    <label class="checkbox" for="pagode_noodverlichting"><img src="img/noodverlichting.svg" /></label>
                    <p>Noodverlichting</p>
                </label>
                <label>
                    <input class="pagode_toeb" type="checkbox" id="pagode_heater" />
                    <label class="checkbox" for="pagode_heater"><img src="img/heater.svg" /></label>
                    <p>Heater</p>
                </label>
            </div>
            <div class="checkhide" style="display: none;" id="pagode_grond">
                <label>4. Ondergrond</label><br>
                <label>
                    <input class="pagode_grond" type="checkbox" id="pagode_stenenstraat" name="pagode_vloeren"/>
                    <label class="checkbox" for="pagode_stenenstraat"><img src="img/tegels.svg" /></label>
                    <p>Stenen Straat</p>
                </label>
                <label>
                    <input class="pagode_grond" type="checkbox" id="pagode_asfalt" name="pagode_vloeren"/>
                    <label class="checkbox" for="pagode_asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input class="pagode_grond" type="checkbox" id="pagode_gras" name="pagode_vloeren"/>
                    <label class="checkbox" for="pagode_gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input class="pagode_grond" type="checkbox" id="pagode_grind" name="pagode_vloeren"/>
                    <label class="checkbox" for="pagode_grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input class="pagode_grond" type="checkbox" id="pagode_beton" name="pagode_vloeren"/>
                    <label class="checkbox" for="pagode_beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input class="pagode_grond" type="checkbox" id="pagode_strand" name="pagode_vloeren"/>
                    <label class="checkbox" for="pagode_strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label> <br>
            </div>
            <div style="display: none;" id="pagode_haringen">
                <label>
                     <input class="geenharingen" type="checkbox" name="pagode_haringen" value="geenharingen" /> Er kunnen geen haringen geslagen worden.
                <label>
            </div>
    </body>
</html>