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
            <form>
                <div class="vlonders">
                    <label>1. Vlonders</label>
                    <label>
                        <input type="text" id="vlonders" name="vloer" style="width: 50px;"/>m²
                    </label>
                </div>
                <div class="checkhide">
                    <label>2. Leggen</label><br>
                    <label>
                        <input type="checkbox" id="leggen"  name="leggen"/>
                        <label class="checkbox" for="leggen"><img src="img/geen.svg" /></label>
                        <p>Gelegd</p>
                    </label>
                    <label>
                        <input type="checkbox" id="ongelegd" name="leggen" />
                        <label class="checkbox" for="ongelegd"><img src="img/geen.svg" /></label>
                        <p>Ongelegd</p>
                    </label>
                </div>
    </body>
</html>