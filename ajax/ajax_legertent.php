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
                    <input class="legervloer" type="checkbox" id="leger_vlonders" name="leger_vloeren"/>
                    <label class="checkbox" for="leger_vlonders"><img src="img/vlonders.svg" /></label>
                    <p>Vlonders</p>
                </label>
                <label>
                    <input class="legervloer" type="checkbox" id="leger_zeil" name="leger_vloeren"/>
                    <label class="checkbox" for="leger_zeil"><img src="img/zeil.svg" /></label>
                    <p>Zeil</p>
                </label>
                <label>
                    <input  class="legervloer"type="checkbox" id="leger_geenvloer" name="leger_vloeren"/>
                    <label class="checkbox" for="leger_geenvloer"><img src="img/geen.svg" /></label>
                    <p>Geen Vloer</p>
                </label>
            </div>
            <div class="checkhide" id="legerafbouw" style='display: none;'>
                <label>3. Op/Afbouw</label><br>
                <label>
                    <input class="legerafbouw" type="checkbox" id="leger_opafbouwja" name="leger_op_afbouw"/>
                    <label class="checkbox" for="leger_opafbouwja"><img src="img/op_afbouw.svg" /></label>
                    <p>Op/Afbouw</p>
                </label>
                <label>
                    <input class="legerafbouw" type="checkbox" id="leger_opafbouwnee" name="leger_op_afbouw"/>
                    <label class="checkbox" for="leger_opafbouwnee"><img src="img/geen.svg" /></label>
                    <p>Geen Op/Afbouw</p>
                </label>
            </div>
            <div class="checkhide" id="legertoeb" style='display: none;'>
                <label>4. Toebehoren</label><br>
                <label>
                    <input class="legertoeb" type="checkbox" id="leger_veldbed"/>
                    <label class="checkbox" for="leger_veldbed"><img src="img/veldbed.svg" /></label>
                    <p>Veldbed</p>
                </label>
                <label>
                    <input class="legertoeb" type="checkbox" id="leger_slaapzak"/>
                    <label class="checkbox" for="leger_slaapzak"><img src="img/slaapzak.svg" /></label>
                    <p>Slaapzak</p>
                </label>
            </div>
            <div class="checkhide" id="legertransport" style='display: none;'>
                <label>5. Transport</label><br>
                <label>
                    <input class="legertransport" type="checkbox" id="leger_bezorgen" name="leger_transport"/>
                    <label class="checkbox" for="leger_bezorgen"><img src="img/bezorgen.svg" /></label>
                    <p>Bezorgen</p>
                </label>
                <label>
                    <input class="legertransport" type="checkbox" id="leger_afhalen" name="leger_transport"/>
                    <label class="checkbox" for="leger_afhalen"><img src="img/afhalen.svg" /></label>
                    <p>Afhalen</p>
                </label>
            </div>
            <div class="checkhide" id="legerstraat" style='display: none;'>
                <label>6. Ondergrond</label><br>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_stenenstraat" name="leger_ondergrond"/>
                    <label class="checkbox" for="leger_stenenstraat"><img src="img/tegels.svg" /></label>
                    <p>Stenen Straat</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_asfalt" name="leger_ondergrond"/>
                    <label class="checkbox" for="leger_asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_gras" name="leger_ondergrond"/>
                    <label class="checkbox" for="leger_gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_grind" name="leger_ondergrond"/>
                    <label class="checkbox" for="leger_grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_beton" name="leger_ondergrond"/>
                    <label class="checkbox" for="leger_beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_strand" name="leger_ondergrond"/>
                    <label class="checkbox" for="leger_strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label><br>
            </div>
            <div id="legerharing" style='display: none;'>
                <label>
                     <input class="geenharingen" type="checkbox" name="haringen" value="geenharingen" />
                     Er kunnen geen haringen geslagen worden.
                <label>
            </div>
    </body>
</html>
