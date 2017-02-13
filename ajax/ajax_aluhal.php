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
                    <select id='maten' name="alu_breedte">
                        <option value="breedte" ">Breedte</option>
                        <option value="6"">6</option>
                        <option value="8"">8</option>
                        <option value="10"">10</option>
                        <option value="12.5"">12.5</option>
                        <option value="15"">15</option>
                        <option value="20"">20</option>
                        <option value="25"">25</option>
                    </select>
                    <select id='maten' name="alu_lengte">
                        <option value="lengte" ">Lengte</option>
                        <option value="5" ">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                        <option value="60">60</option>
                        <option value="65">65</option>
                        <option value="70">70</option>
                        <option value="75">75</option>
                        <option value="80">80</option>
                        <option value="85">85</option>
                        <option value="90">90</option>
                        <option value="95">95</option>
                        <option value="100">100</option>
                    </select>
                </div>
            <div class="checkhide">
                <label>2. Vloer</label><br>
                <label>
                    <input type="hidden" name="aluhalcheck" value="3"/>
                    <input class="alu_vloer" type="checkbox" id="alu_vlonders" name="alu_vloeren" value="Vlonders"/>
                    <label class="checkbox" for="alu_vlonders"><img src="img/vlonders_gelegd.svg" /></label>
                    <p>Vlonders</p>
                </label>
                <label>
                    <input class="alu_vloer" type="checkbox" id="alu_systeemvloer" name="alu_vloeren" value="Systeemvloer"/>
                    <label class="checkbox" for="alu_systeemvloer"><img src="img/systeemvloer.svg" /></label>
                    <p>Systeemvloer</p>
                </label>
                <label>
                    <input class="alu_vloer" type="checkbox" id="alu_geenvloer" name="alu_vloeren" value="Geen"/>
                    <label class="checkbox" for="alu_geenvloer"><img src="img/geen.svg" /></label>
                    <p>Geen Vloer</p>
                </label>
            </div>
            <div class="checkhide" id="alu_opties" style='display: none;'>
                <label>3. Opties</label><br>
                <label>
                    <input class="alu_opties" type="checkbox" id="alu_hardewanden" name="alu_opties" value="Harde wanden"/>
                    <label class="checkbox" for="alu_hardewanden"><img src="img/geen.svg" /></label>
                    <p>Harde Wanden</p>
                </label>
                <label>
                    <input class="alu_opties" type="checkbox" id="alu_glaswand" name="alu_opties"value="Glaswand"/>
                    <label class="checkbox" for="alu_glaswand"><img src="img/geen.svg" /></label>
                    <p>Glaswand per meter</p>
                </label>
                <label>
                    <input class="alu_opties" type="checkbox" id="alu_bankirai" name="alu_opties" value="Bankirai"/>
                    <label class="checkbox" for="alu_bankirai"><img src="img/geen.svg" /></label>
                    <p>Bankirai Terrastegels</p>
                </label>
                <label>
                    <input class="alu_opties" type="checkbox" id="alu_antraciet" name="alu_opties" value="Antraciet"/>
                    <label class="checkbox" for="alu_antraciet"><img src="img/geen.svg" /></label>
                    <p>Antracie Tapijttegels</p>
                </label>
            </div>
            <div class="checkhide" id="alu_toeb" style='display: none;'>
                <label>4. Toebehoren</label><br>
                <label>
                    <input class="alu_toeb" type="checkbox" id="alu_brandblusser" name="alu_toebehoren" value="Brandblusser"/>
                    <label class="checkbox" for="alu_brandblusser"><img src="img/brandblusser.svg" /></label>
                    <p>Brandblusser</p>
                </label>
                <label>
                    <input class="alu_toeb" type="checkbox" id="alu_noodverlichting" ame="alu_toebehoren" value="Noodverlichting"/>
                    <label class="checkbox" for="alu_noodverlichting"><img src="img/noodverlichting.svg" /></label>
                    <p>Noodverlichting</p>
                </label>
                <label>
                    <input class="alu_toeb" type="checkbox" id="alu_heater" name="opties" ame="alu_toebehoren" value="Heater"/>
                    <label class="checkbox" for="alu_heater"><img src="img/heater.svg" /></label>
                    <p>Heater</p>
                </label>
            </div>
            <div class="checkhide" id="alu_grond" style='display: none;'>
                <label>5. Ondergrond</label><br>
                <label>
                    <input class="alu_grond" type="checkbox" id="alu_stenenstraat" name="alu_ondergrond" value="Stenen straat"/>
                    <label class="checkbox" for="alu_stenenstraat"><img src="img/tegels.svg" /></label>
                    <p>Stenen Straat</p>
                </label>
                <label>
                    <input class="alu_grond" class="alu_grond" type="checkbox" id="alu_asfalt" name="alu_ondergrond" value="Asfalt"/>
                    <label class="checkbox" for="alu_asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input class="alu_grond" type="checkbox" id="alu_gras" name="alu_ondergrond" value="Gras"/>
                    <label class="checkbox" for="alu_gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input class="alu_grond" type="checkbox" id="alu_grind" name="alu_ondergrond"/>
                    <label class="checkbox" for="alu_grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input class="alu_grond" type="checkbox" id="alu_beton" name="alu_ondergrond" value="Beton"/>
                    <label class="checkbox" for="alu_beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input class="alu_grond" type="checkbox" id="alu_strand" name="alu_ondergrond" value="Strand"/>
                    <label class="checkbox" for="alu_strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label><br>
            </div>
            <div id="alu_haring" style='display: none;'>
                <label>
                     <input class="geenharingen" type="checkbox" name="alu_haringen" value="Er kunnen geen haringen geslagen worden." />
                     Er kunnen geen haringen geslagen worden.
                <label>
            </div>
    </body>
</html>
