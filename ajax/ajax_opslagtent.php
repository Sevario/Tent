            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
            <script src="js/jquery.js"></script>
            <script src="js/tent.js"></script>
            <?php $opslag = "yes"; ?>
                    <h1>Opslagtent</h1>
            <div class="matenform">
                <label>1. Maten</label>
                    <br />

                    <select id='maten' name='breedte'> 
                        <option value='breedte'>Breedte</option>
                        <option value='6'>6</option>
                        <option value='8'>8</option>
                        <option value='10'>10</option>
                        <option value='12.5'>12.5</option>
                        <option value='15'>15</option>
                        <option value='20'>20</option>
                        <option value='25'>25</option>
                    </select>
                    <select id='maten' name='lengte'> 
                        <option value='lengte'>Lengte</option>
                        <option value='5'>5</option>
                        <option value='10'>10</option>
                        <option value='15'>15</option>
                        <option value='20'>20</option>
                        <option value='25'>25</option>
                        <option value='30'>30</option>
                        <option value='35'>35</option>
                        <option value='40'>40</option>
                        <option value='45'>45</option>
                        <option value='50'>50</option>
                        <option value='55'>55</option>
                        <option value='60'>60</option>
                        <option value='65'>65<option>
                        <option value='70'>70</option>
                        <option value='75'>75</option>
                        <option value='80'>80</option>
                        <option value='85'>85</option>
                        <option value='90'>90</option>
                        <option value='95'>95</option>
                        <option value='100'>100</option>
                    </select><br>
                    <label>
                        <input type="hidden" name="opslagcheck" value="1"/>
                        <input class='advies' type='checkbox' name='adviescheck' value='advies' /> Mijn maat staat er niet tussen, ik wil graag advies. 
                     <div class='advieschecked' style='display: none;'>
                            Breedte:<input class='adviesbreedte' type='text' name='adviesbreedte'/>
                            Lengte: <input class='advieslengte' type='text' name='advieslengte'/>
                     </div>
                    <label>
                </div>
            <div class='checkhide'>
                <label>2. Zijwanden</label><br>
                <label>
                    <input class='opslagwanden' type='checkbox' id='zeil' name='zijwanden' value='Zeil'/>
                    <label class='checkbox' for='zeil'><img src='img/zeil.svg' /></label>
                    <p>Zeil</p>
                </label>
                <label>
                    <input class='opslagwanden' type='checkbox' id='sandwichpanelen' name='zijwanden' value='Sandwich Panelen'/>
                    <label class='checkbox' for='sandwichpanelen'><img src='img/geen.svg' /></label>
                    <p>Sandwich Panelen</p>
                </label>
                <label>
                    <input class='opslagwanden' type='checkbox' id='damwand' name='zijwanden' value='Dam Wand'/>
                    <label class='checkbox' for='damwand'><img src='img/geen.svg' /></label>
                    <p>Dam Wand</p>
                </label>
            </div>
            <div class='checkhide' id='opslagdeuren' style='display: none;'>
                <label>3. Deuren</label><br>
                <label>
                    <input class='opslagdeuren' type='checkbox' id='roldeur' name='rol_deur' value='Roldeur'/>
                    <label class='checkbox' for='roldeur'><img src='img/geen.svg' /></label>
                    <p>Roldeur</p>
                </label>
                <label>
                    <input class='opslagdeuren' type='checkbox' id='overhead' name='overhead_deur' value='Overhead Deur'/>
                    <label class='checkbox' for='overhead'><img src='img/geen.svg' /></label>
                    <p>Overhead Deur</p>
                </label>
                <label>
                    <input class='opslagdeuren' type='checkbox' id='enkeledeur' name='enkele_entree_deur' value='Enkele Entreedeur'/>
                    <label class='checkbox' for='enkeledeur'><img src='img/geen.svg' /></label>
                    <p>Enkele Entreedeur</p>
                </label>
                <label>
                    <input class='opslagdeuren' type='checkbox' id='dubbeledeur' name='dubbele_entree_deur' value='Dubbele Entreedeur'/>
                    <label class='checkbox' for='dubbeledeur'><img src='img/geen.svg' /></label>
                    <p>Dubbele Entreedeur</p>
                </label>
                <label>
                    <input class='opslagdeuren' type='checkbox' id='geendeur' name ='geendeur' value='Geen Deur'/>
                    <label class='checkbox' for='geendeur'><img src='img/geen.svg' /></label>
                    <p>Geen Deur</p>
                </label>
            </div>
            <div class='checkhide' id='opslagopties' style='display: none;'>
                <label>4. Opties</label><br>
                <label>
                    <input class='opslagopties' type='checkbox' id='verlichting' name='verlichting' value='Verlichting'/>
                    <label class='checkbox' for='verlichting'><img src='img/geen.svg' /></label>
                    <p>Verlichting</p>
                </label>
                <label>
                    <input class='opslagopties' type='checkbox' id='verwarming' name='verwarming' value='Verwarming'/>
                    <label class='checkbox' for='verwarming'><img src='img/geen.svg' /></label>
                    <p>Verwarming</p>
                </label>
                <label>
                    <input class='opslagopties' type='checkbox' id='systeemvloer' name='systeemvloer' value='Systeem Vloer'/>
                    <label class='checkbox' for='systeemvloer'><img src='img/systeemvloer.svg' /></label>
                    <p>Systeem Vloer</p>
                </label>
                <label>
                    <input class='opslagopties' type='checkbox' id='geenopties' name='geenopties' value='Geen Opties'/>
                    <label class='checkbox' for='geenopties'><img src='img/geen.svg' /></label>
                    <p>Geen</p>
                </label>
            </div>
            <div class='checkhide' id='opslagondergrond' style='display: none;'>
                <label>5. Ondergrond</label><br>
                <label>
                    <input class='opslagondergrond' type='checkbox' id='op_stenenstraat' name='ondergrond' value='Stenen Straat'/>
                    <label class='checkbox' for='op_stenenstraat'><img src='img/tegels.svg' /></label>
                    <p>Stenen Straat</p>
                </label>
                <label>
                    <input class='opslagondergrond' type='checkbox' id='op_asfalt' name='ondergrond' value='Asfalt'/>
                    <label class='checkbox' for='op_asfalt'><img src='img/asfalt.svg' /></label>
                    <p>Asfalt</p>
                </label>
                <label>
                    <input class='opslagondergrond' type='checkbox' id='op_gras' name='ondergrond' value='Gras'/>
                    <label class='checkbox' for='op_gras'><img src='img/gras.svg' /></label>
                    <p>Gras</p>
                </label>
                <label>
                    <input type='checkbox' id='op_grind' name='ondergrond' value='Grind'/>
                    <label class='checkbox' for='op_grind'><img src='img/grind.svg' /></label>
                    <p>Grind</p>
                </label>
                <label>
                    <input class='opslagondergrond' type='checkbox' id='op_beton' name='ondergrond' value='Beton'/>
                    <label class='checkbox' for='op_beton'><img src='img/beton.svg' /></label>
                    <p>Beton</p>
                </label>
                <label>
                    <input class='opslagondergrond' type='checkbox' id='op_strand' name='ondergrond' value='Strand'/>
                    <label class='checkbox' for='op_strand'><img src='img/strand.svg' /></label>
                    <p>Strand</p>
                </label><br>
            </div>
            <div id='haringen' style='display: none;'>
                <label>
                     <input class='geenharingen' type='checkbox' name='op_haringen' value='Er kunnen geen haringen geslagen worden.' />
                     Er kunnen geen haringen geslagen worden.
                <label>
            </div>
            