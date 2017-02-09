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
        <h1>Stretchtent</h1>
            <div class="matenform">
                <label>1. Maten (in meters)</label>
                    <br />
                <select id = "opts" onchange = "showForm()">
                    <option value = "0"></option>
                    <option value = "1">7.5 x 10</option>
                    <option value = "2">10 x 12</option>
                    <option value = "3">10 x 15</option>
                    <option value = "4">10 x 20</option>
                </select>
                </div>
            <div id = "f1" style="display: none" class="checkhide">

                <label>Kleur:</label></br>
                <label>
                    <input type="checkbox" id="platina"  name="fb"/>
                    <label class="checkbox" for="platina"><img src="img/platina.svg" /></label>
                </label>

                <label>
                    <input type="checkbox" id="rood"  name="fb"/>
                    <label class="checkbox" for="rood"><img src="img/rood.svg" /></label>
                </label>
                <label>
                    <input type="checkbox" id="zand"  name="fb"/>
                    <label class="checkbox" for="zand"><img src="img/zand.svg" /></label>
                </label></br>

            </div>

            <div id = "f2" style="display:none" class="checkhide">
                <label>Kleur:</label></br>
                <label>
                    <input type="checkbox" id="platina4"  name="fb"/>
                    <label class="checkbox" for="platina4"><img src="img/platina.svg" /></label>
                </label>

                <label>
                    <input type="checkbox" id="zand4"  name="fb"/>
                    <label class="checkbox" for="zand4"><img src="img/zand.svg" /></label>
                </label>

            </div>
            <div id = "f3" style="display:none" class="checkhide">
                <label>Kleur:</label></br>
                <label>
                    <input type="checkbox" id="black"  name="fb"/>
                    <label class="checkbox" for="black"><img src="img/black.svg" /></label>
                </label>

                <label>
                    <input type="checkbox" id="platina2"  name="fb"/>
                    <label class="checkbox" for="platina2"><img src="img/platina.svg" /></label>
                </label>
                <label>
                    <input type="checkbox" id="rood2"  name="fb"/>
                    <label class="checkbox" for="rood2"><img src="img/rood.svg" /></label>
                </label>
                <label>
                    <input type="checkbox" id="zand2"  name="fb"/>
                    <label class="checkbox" for="zand2"><img src="img/zand.svg" /></label>
                </label>
            </div>
            <div id = "f4" style="display:none" class="checkhide">
                <label>Kleur:</label></br>
                <label>
                    <input type="checkbox" id="platina3"  name="fb"/>
                    <label class="checkbox" for="platina3"><img src="img/platina.svg" /></label>
                </label>

                <label>
                    <input type="checkbox" id="zand3" name="fb"/>
                    <label class="checkbox" for="zand3"><img src="img/zand.svg" /></label>
                </label>
            </div></br>
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
