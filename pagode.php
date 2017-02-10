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
        <form  action="testpage.php" method="post">
            
                
                <script>
                    $(document).ready(function() {
                    var counter =2;
                    $('.newtent').on("click", function() {
                        var newtent = $( ".dropdownmenu option:checked" ).val();
                            if (counter<9) {
                                if (newtent==="festival") {
                                    $( ".formadd" ).append( "<div class='form"+counter+"'></div>" );
                                    $(".form"+counter).load("ajax/ajax_festival_vloer.php");
                                    counter++;
                                }

                                if (newtent==="leger") {
                                    $( ".formadd" ).append( "<div class='form"+counter+"'></div>" );
                                    $(".form"+counter).load("ajax/ajax_legertent.php");
                                    counter++;
                                }

                                if (newtent==="aluhal") {
                                    $( ".formadd" ).append( "<div class='form"+counter+"'></div>" );
                                    $(".form"+counter).load("ajax/ajax_aluhal.php");
                                    counter++;
                                }

                                if (newtent==="opslag") {
                                    $( ".formadd" ).append( "<div class='form"+counter+"'></div>" );
                                    $(".form"+counter).load("ajax/ajax_opslagtent.php");
                                    counter++;
                                }

                                if (newtent==="pagode") {
                                    $( ".formadd" ).append( "<div class='form"+counter+"'></div>" );
                                    $(".form"+counter).load("ajax/ajax_pagode.php");
                                    counter++;
                                }

                                if (newtent==="span") {
                                    $( ".formadd" ).append( "<div class='form"+counter+"'></div>" );
                                    $(".form"+counter).load("ajax/ajax_spantent.php");
                                    counter++;
                                }

                                if (newtent==="stretch") {
                                    $( ".formadd" ).append( "<div class='form"+counter+"'></div>" );
                                    $(".form"+counter).load("ajax/ajax_stretchtent.php");
                                    counter++;
                                }

                                if (newtent==="vip") {
                                    $( ".formadd" ).append( "<div class='form"+counter+"'></div>" );
                                    $(".form"+counter).load("ajax/ajax_vip_paviljoen.php");
                                    counter++;
                                }
                          }

                    });
                    
                    
                        $(".form1").load("ajax/ajax_pagode.php");
                    });
                </script>                    
                <div class="formadd">
                <div class="form1"></div>
                </div>
                
                
                Wilt u hem zo <input type="submit" name="versturen" value="versturen"/> of nog een 
                
                    <select class="dropdownmenu">
                        <option>Selecteer de nieuwe tent</option>
                        <option value='opslag'>Opslagtent</option>
                        <option value='festival'>Festival Vloer</option>
                        <option value='leger'>Legertent</option>
                        <option value="aluhal">Aluhal</option>
                        <option value="pagode">Pagode</option>
                        <option value="span">Spantent</option>
                        <option value="stretch">Stretchtent</option>
                        <option value="vip">Vip Paviljoen</option>
                        
                        
                    </select> <button class="newtent" type="button">toevoegen</button><div class="drop"></div>?
                </label>
            
        </form>
    </body>
</html>
