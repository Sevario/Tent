    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <script src="js/jquery.js"></script>
    <script src="js/tent.js"></script>

        <h1>NAW-gegevens</h1>
        <div class="naw">
            <label>Bedrijf of particulier</label>
            <br />
            <select id = "opts" onchange = "showForm()" name="nawdrop">
                <option value = "0" ></option>
                <option value = "1" >Bedrijf</option>
                <option value = "2" >Particulier</option>
            </select>
        </div>
        <div id = "f1" style="display: none"><br>
            <label>Bedrijfsnaam:</label>
            <input type="text" name="bedrijfsnaam"><br>
            <label>Contactpersoon:</label>
            <input type="text" name="Contactpersoon"><br>
            <label>Adres:</label>
            <input type="text" name="bedAdres"><br>
            <label>Postcode:</label>
            <input type="text" name="bedPostcode"><br>
            <label>Plaats:</label>
            <input type="text" name="bedPlaats"><br>
            <label>Land:</label>
            <input type="text" name="bedLand"><br>
            <label>Tel.nr:</label>
            <input type="text" name="bedTelnr"><br>
            <label>Tel.nr mobiel:</label>
            <input type="text" name="bedMobielnr"><br>
            <label>Email:</label>
            <input type="text" name="bedEmail"><br>
        </div>
        <div id = "f2" style="display: none"><br>
            <label>Naam:</label>
            <input type="text" name="Naam"><br>
            <label>Adres:</label>
            <input type="text" name="Adres"><br>
            <label>Postcode:</label>
            <input type="text" name="Postcode"><br>
            <label>Plaats:</label>
            <input type="text" name="Plaats"><br>
            <label>Land:</label>
            <input type="text" name="Land"><br>
            <label>Tel.nr:</label>
            <input type="text" name="Telnr"><br>
            <label>Tel.nr mobiel:</label>
            <input type="text" name="Mobielnr"><br>
            <label>Email:</label>
            <input type="text" name="Email"><br>
            <label>Afleveradres</label><br>
            <input type="checkbox" name="check1" value="1">
            <label>Afwijkend van bovenstaand</label><br>
            <label>Adres:</label>
            <input type="text" name="Adres2"><br>
            <label>Plaats:</label>
            <input type="text" name="Plaats2"><br>
            <label>Land:</label>
            <input type="text" name="Land2"><br>
        </div>