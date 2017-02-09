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
                        $(".form1").load("ajax_opslagtent.php");
                    });
                </script>                    
                <div class="form1"></div>
                
                
                <label>
                    Wilt u hem zo <input type="submit" name="versturen" value="versturen"/> of nog een tent <button type="button">toevoegen</button>?
                </label>
            
        </form>
    </body>
</html>
