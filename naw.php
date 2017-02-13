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
        <h1>NAW-gegevens</h1>
    <form action="action_page.php">
        <div class="naw">
            <label>Bedrijf of particulier</label>
            <br />
            <select id = "opts" onchange = "showForm()">
                <option value = "0" name="nawdrop"></option>
                <option value = "1" name="nawdrop">Bedrijf</option>
                <option value = "2" name="nawdrop">Particulier</option>
            </select>
        </div>
        <div id = "f1" style="display: none"><br>
            <label>Bedrijfsnaam:</label>
            <input type="text" name="bedrijfsnaam"><br>
            <label>Contactpersoon:</label>
            <input type="text" name="Contactpersoon"><br>
            <label>Adres:</label>
            <input type="text" name="Adres"><br>
            <label>Postcode:</label>
            <input type="text" name="Postcode"><br>
            <label>Plaats:</label>
            <input type="text" name="Plaats"><br>
            <label>Land:</label>
            <input type="text" name="Land"><br>
            <label>Tel.nr:</label>
            <input type="text" name="Tel.nr"><br>
            <label>Tel.nr mobiel:</label>
            <input type="text" name="Mobiel.nr"><br>
            <label>Email:</label>
            <input type="text" name="Email"><br>
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
            <input type="text" name="Tel.nr"><br>
            <label>Tel.nr mobiel:</label>
            <input type="text" name="Mobiel.nr"><br>
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
    </form>
</body>
</html>