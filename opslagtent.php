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
        <h1>Opslagtent</h1> 
        <form action="testpage.php" method="post">
            <div class="matenform">
                <label>1. Maten</label>
                    <br />
                    <select id='maten' name="breedte"> 
                        <option value="breedte">Breedte</option>
                        <option value="6 Meter">6</option>
                        <option value="8 Meter">8</option>
                        <option value="10 Meter">10</option>
                        <option value="12.5 Meter">12.5</option>
                        <option value="15 Meter">15</option>
                        <option value="20 Meter">20</option>
                        <option value="25 Meter">25</option>
                    </select>
                    <select id='maten' name="lengte"> 
                        <option value="lengte">Lengte</option>
                        <option value="5 Meter">5</option>
                        <option value="10 Meter">10</option>
                        <option value="15 Meter">15</option>
                        <option value="20 Meter">20</option>
                        <option value="25 Meter">25</option>
                        <option value="30 Meter">30</option>
                        <option value="35 Meter">35</option>
                        <option value="40 Meter">40</option>
                        <option value="45 Meter">45</option>
                        <option value="50 Meter">50</option>
                        <option value="55 Meter">55</option>
                        <option value="60 Meter">60</option>
                        <option value="65 Meter">65<option>
                        <option value="70 Meter">70</option>
                        <option value="75 Meter">75</option>
                        <option value="80 Meter">80</option>
                        <option value="85 Meter">85</option>
                        <option value="90 Meter">90</option>
                        <option value="95 Meter">95</option>
                        <option value="100 Meter">100</option>
                    </select><br>
                    <label>
                     <input class="advies" type="checkbox" value="advies" /> Mijn maat staat er niet tussen, ik wil graag advies. 
                     <div class="advieschecked" style="display: none;">
                            Breedte:<input class="adviesbreedte" type="text" name="advieslengte"/>
                            Lengte: <input class="advieslengte" type="text" name="advieslengte"/>
                     </div>
                    <label>
                </div>
            <div class="checkhide">
                <label>2. Zijwanden</label><br>
                <label>
                    <input type="checkbox" id="zeil" name="zijwanden" value="Zeil"/>
                    <label class="checkbox" for="zeil"><img src="img/zeil.svg" /></label>
                    <p>Zeil</p>
                </label>
                <label>
                    <input type="checkbox" id="sandwichpanelen" name="zijwanden" value="Sandwich Panelen"/>
                    <label class="checkbox" for="sandwichpanelen"><img src="img/sandwichpanelen.svg" /></label>
                    <p>Sandwich Panelen</p>
                </label>
                <label>
                    <input type="checkbox" id="damwand" name="zijwanden" value="Dam Wand"/>
                    <label class="checkbox" for="damwand"><img src="img/dam_wand.svg" /></label>
                    <p>Dam Wand</p>
                </label>
            </div>
            <div class="checkhide">
                <label>3. Deuren</label><br>
                <label>
                    <input type="checkbox" id="roldeur" name="rol_deur" value="Roldeur"/>
                    <label class="checkbox" for="roldeur"><img src="img/roldeur.svg" /></label>
                    <p>Roldeur</p>
                </label>
                <label>
                    <input type="checkbox" id="overhead" name="overhead_deur" value="Overhead Deur"/>
                    <label class="checkbox" for="overhead"><img src="img/overhead_deur.svg" /></label>
                    <p>Overhead Deur</p>
                </label>
                <label>
                    <input type="checkbox" id="enkeledeur" name="enkele_entree_deur" value="Enkele Entreedeur"/>
                    <label class="checkbox" for="enkeledeur"><img src="img/enkele_entree_deur.svg" /></label>
                    <p>Enkele Entreedeur</p>
                </label>
                <label>
                    <input type="checkbox" id="dubbeledeur" name="dubbele_entree_deur" value="Dubbele Entreedeur"/>
                    <label class="checkbox" for="dubbeledeur"><img src="img/geen.svg" /></label>
                    <p>Dubbele Entreedeur</p>
                </label>
                <label>
                    <input type="checkbox" id="geendeur" name ="geendeur" value="Geen Deur"/>
                    <label class="checkbox" for="geendeur"><img src="img/geen.svg" /></label>
                    <p>Geen Deur</p>
                </label>
            </div>
            <div class="checkhide">
                <label>4. Opties</label><br>
                <label>
                    <input type="checkbox" id="verlichting" name="verlichting" value="Verlichting"/>
                    <label class="checkbox" for="verlichting"><img src="img/geen.svg" /></label>
                    <p>Verlichting</p>
                </label>
                <label>
                    <input type="checkbox" id="verwarming" name="verwarming" value="Verwarming"/>
                    <label class="checkbox" for="verwarming"><img src="img/geen.svg" /></label>
                    <p>Verwarming</p>
                </label>
                <label>
                    <input type="checkbox" id="systeemvloer" name="systeemvloer" value="Systeem Vloer"/>
                    <label class="checkbox" for="systeemvloer"><img src="img/systeemvloer.svg" /></label>
                    <p>Systeem Vloer</p>
                </label>
                <label>
                    <input type="checkbox" id="geenopties" name="geenopties" value="Geen Opties"/>
                    <label class="checkbox" for="geenopties"><img src="img/geen.svg" /></label>
                    <p>Geen</p>
                </label>
            </div>
            <div class="checkhide">
                <label>5. Ondergrond</label><br>
                <label>
                    <input type="checkbox" id="stenenstraat" name="ondergrond" value="Stenen Straat"/>
                    <label class="checkbox" for="stenenstraat"><img src="img/stenen_straat.svg" /></label>
                    <p>Stenen Straat</p>
                </label>
                <label>
                    <input type="checkbox" id="asfalt" name="ondergrond" value="Asfalt"/>
                    <label class="checkbox" for="asfalt"><img src="img/asfalt.svg" /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input type="checkbox" id="gras" name="ondergrond" value="Gras"/>
                    <label class="checkbox" for="gras"><img src="img/gras.svg" /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input type="checkbox" id="grind" name="ondergrond" value="Grind"/>
                    <label class="checkbox" for="grind"><img src="img/grind.svg" /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input type="checkbox" id="beton" name="ondergrond" value="Beton"/>
                    <label class="checkbox" for="beton"><img src="img/beton.svg" /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input type="checkbox" id="strand" name="ondergrond" value="Strand"/>
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
            <input class="submitbutton" type="submit" value="Submit">
        </form>
    </body>
</html>
