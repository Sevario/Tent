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
        <?php $legertent = 1; ?>
        <h1>Legertent</h1> 
            <div class="matenform">
                <label>1. Maten</label>
                    <br />
                    <select id='maten' name="leger_maat">
                        <option value="null"></option>
                        <option value="5x5">5x5</option>
                        <option value="5x10">5x10</option>
                    </select>
                     </div>
            <div class="aantaldiv" style="display: none;">
                 <input class="aantal" type="text" class="form-control" name="leger_aantal" placeholder="Aantal">
            </div>
            <div class="checkhide">
                <label>2. Vloer</label><br>
                <label>
                    <input type="hidden" name="legercheck" value="4"/>
                    <input class="legervloer" type="checkbox" id="leger_vlonders" name="leger_vloeren" value="Vlonders"/>
                    <label class="checkbox" for="leger_vlonders"><img src="img/vlonders_leveren.svg" /></label>
                    <p>Vlonders</p>
                </label>
                <label>
                    <input class="legervloer" type="checkbox" id="leger_zeil" name="leger_vloeren" value="Zeil"/>
                    <label class="checkbox" for="leger_zeil"><img src="img/zeil.svg" /></label>
                    <p>Zeil</p>
                </label>
                <label>
                    <input  class="legervloer"type="checkbox" id="leger_geenvloer" name="leger_vloeren" value="Geen"/>
                    <label class="checkbox" for="leger_geenvloer"><img src="img/geen.svg" /></label>
                    <p>Geen Vloer</p>
                </label>
            </div>
            <div class="checkhide" id="legerafbouw" style='display: none;'>
                <label>3. Op/Afbouw</label><br>
                <label>
                    <input class="legerafbouw" type="checkbox" id="leger_opafbouwja" name="leger_op_afbouw" value="Ja"/>
                    <label class="checkbox" for="leger_opafbouwja"><img src="img/op_afbouw.svg" /></label>
                    <p>Op/Afbouw</p>
                </label>
                <label>
                    <input class="legerafbouw" type="checkbox" id="leger_opafbouwnee" name="leger_op_afbouw" value="Nee"/>
                    <label class="checkbox" for="leger_opafbouwnee"><img src="img/geen.svg" /></label>
                    <p>Geen Op/Afbouw</p>
                </label>
            </div>
            <div class="checkhide" id="legertoeb" style='display: none;'>
                <label>4. Toebehoren</label><br>
                <label>
                    <input class="legertoeb" type="checkbox" id="leger_veldbed" name="leger_veldbed" value="Veldbed"/>
                    <label class="checkbox" for="leger_veldbed"><img src="img/veldbed.svg" /></label>
                    <p>Veldbed<input class="inputveldbed" type="text" name="veldbedaantal" style="display: none;width:50px;"/></p>
                </label>
                <label>
                    <input class="legertoeb" type="checkbox" id="leger_slaapzak" name="leger_slaapzak" value="Slaapzak"/>
                    <label class="checkbox" for="leger_slaapzak"><img src="img/slaapzak.svg" /></label>
                    <p>Slaapzak<input class="inputslaapzak" type="text" name="slaapzakaantal" style="display: none;width:50px;"/></p>
                </label>
            </div>
            <div class="checkhide" id="legertransport" style='display: none;'>
                <label>5. Transport</label><br>
                <label>
                    <input class="legertransport" type="checkbox" id="leger_bezorgen" name="leger_transport" value="Bezorgen"/>
                    <label class="checkbox" for="leger_bezorgen"><img src="img/bezorgen.svg" /></label>
                    <p>Bezorgen</p>
                </label>
                <label>
                    <input class="legertransport" type="checkbox" id="leger_afhalen" name="leger_transport" value="Afhalen"/>
                    <label class="checkbox" for="leger_afhalen"><img src="img/afhalen.svg" /></label>
                    <p>Afhalen</p>
                </label>
            </div>
            <div class="checkhide" id="legerstraat" style='display: none;'>
                <label>6. Ondergrond</label><br>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_stenenstraat" name="leger_ondergrond" value="Stenen straat"/>
                    <label class="checkbox" for="leger_stenenstraat"><img src="img/tegels.svg" /></label>
                    <p>Stenen Straat</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_asfalt" name="leger_ondergrond" value="Asfalt"/>
                    <label class="checkbox" for="leger_asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_gras" name="leger_ondergrond" value="Gras"/>
                    <label class="checkbox" for="leger_gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_grind" name="leger_ondergrond" value="Grind"/>
                    <label class="checkbox" for="leger_grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_beton" name="leger_ondergrond" value="Beton"/>
                    <label class="checkbox" for="leger_beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input class="legerstraat" type="checkbox" id="leger_strand" name="leger_ondergrond" value="Strand"/>
                    <label class="checkbox" for="leger_strand"><img src="img/strand.svg" /></label>
                    <p>Strand</p>
                </label><br>
            </div>
            <div id="legerharing" style='display: none;'>
                <label>
                     <input class="geenharingen" type="checkbox" value="Er kunnen geen haringen geslagen worden." name="leger_haringen" />
                     Er kunnen geen haringen geslagen worden.
                <label>
            </div>
    </body>
</html>
