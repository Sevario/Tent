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
        <form  action="testpage.php" method="post">
            
                
                <script>
                    $(document).ready(function() {
                        $(".form1").load("ajax/ajax_opslagtent.php");
                    });
                </script>                    
                <div class="formadd">
                <div class="form1"></div>
                </div>
                
                
                Wilt u hem zo <input type="submit" name="versturen" value="versturen"/> of nog een 
                
                    <select class="dropdownmenu">
                        <option>Selecteer de nieuwe tent</option>
                        <?php if (empty($opslag)) {
                        echo "<option value='opslag'>Opslagtent</option>";
                        }
                        if (empty($festival)) {
                        echo "<option value='festival'>Festival Vloer</option>";
                        }
                        if (empty($leger)) {
                        echo "<option value='leger'>Legertent</option>";
                        }
                        ?>
                    </select> <button class="newtent" type="button">toevoegen</button><div class="drop"></div>?
                </label>
            
        </form>
    </body>
</html>
