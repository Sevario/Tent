
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="Dropdown.js"></script>
</head>

<body>
    <h1>Stretchtent</h1>
<form>
    <label>Maat</label>
<select id = "opts" onchange = "showForm()">
    <option value = "0"></option>
    <option value = "1">7.5 x 10</option>
    <option value = "2">10 x 12</option>
    <option value = "3">10 x 15</option>
    <option value = "4">10 x 20</option>
</select>
    <form name= "form1">
    <div id = "f1" style="display:none">

        <label>Kleur:</label></br>
        <label>
            <input type="radio" name="fb" value="small" />
            <img src="img/platina.svg">
        </label>

        <label>
            <input type="radio" name="fb" value="big"/>
            <img src="img/rood.svg">
        </label>
        <label>
            <input id="fb1" type="radio" name="fb" value="med" />
            <img src="img/zand.svg">
        </label></br>

    </div>

    <div id = "f2" style="display:none">
        <label>Kleur:</label></br>
        <label>
            <input type="radio" name="fb2" value="small" />
            <img src="img/black.svg">
        </label>

        <label>
            <input type="radio" name="fb2" value="big"/>
            <img src="img/platina.svg">
        </label>

    </div>
    <div id = "f3" style="display:none">
            <label>Kleur:</label></br>
            <label>
                <input type="checkbox" name="fb3" value="small" />
                <img src="img/black.svg">
            </label>

            <label>
                <input type="checkbox" name="fb3" value="big"/>
                <img src="img/platina.svg">
            </label>
            <label>
                <input id="fb3" type="checkbox" name="fb3" value="med" />
                <img src="img/rood.svg">
            </label>
            <label>
                <input id="fb3" type="checkbox name="fb3" value="med" />
                <img src="img/zand.svg">
            </label>
    </div>
        <div id = "f4" style="display:none">
            <label>Kleur:</label></br>
            <label>
                <input id="fb4" type="radio" name="fb4" value="small" />
                <img src="img/platina.svg">
            </label>

            <label>
                <input id="fb4" type="radio" name="fb4" value="big"/>
                <img src="img/zand.svg">
            </label>
        </div></br>
        <label>Vloeren:</label></br>
        <label>
            <input id="vl1" type="radio" name="vl1" value="big"/>
            <img src="img/vlonders.svg">
        </label>
        <label>
            <input id="vl2" type="radio" name="vl1" value="big"/>
            <img src="img/systeemvloer.svg">
        </label>
        <label>
            <input id="vl3" type="radio" name="vl1" value="big"/>
            <img src="img/geen.svg">
        </label></br>
        <label>Toebehoren:</label></br>
        <label class="checked">
            <input id="tb1" type="checkbox" name="tb1" value="big"/>
            <img src="img/brandblusser.svg" >
        </label>
        <label>
            <input id="tb2" type="checkbox" name="tb1" value="big"/>
            <img src="img/noodverlichting.svg">
        </label>
        <label>
            <input id="tb3" type="checkbox" name="tb1" value="big"/>
            <img src="img/heater.svg"class="checked">
        </label></br>
        <label>Ondergrond:</label></br>
        <label>
            <input id="o1" type="radio" name="o1" value="big"/>
            <img src="img/stenen_straat.svg">
        </label>
        <label>
            <input id="o2" type="radio" name="o1" value="big"/>
            <img src="img/asvalt.svg">
        </label>
        <label>
            <input id="o3" type="radio" name="o1" value="big"/>
            <img src="img/gras.svg">
        </label>
        <label>
            <input id="o4" type="radio" name="o1" value="big"/>
            <img src="img/grind.svg">
        </label>
        <label>
            <input id="o5" type="radio" name="o1" value="big"/>
            <img src="img/beton.svg">
        </label>
        <label>
            <input id="o6" type="radio" name="o1" value="big"/>
            <img src="img/strand.svg">
        </label></br>
        <input type="checkbox" name="check1"/>
        <label>Kunnen geen haringen geslagen worden.

        </label>
    </form>

</body>
