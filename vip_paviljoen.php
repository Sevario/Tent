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
                        $(".dropfill").load("ajax/ajax_dropdown.php");
                    $('.newtent').on("click", function() {
                        var newtent = $( ".dropdownmenu option:checked" ).val();
                                if (newtent==="festival") {
                                    if (!$('.formfestival').length) {
                                        $( ".formadd" ).append( "<div class='formfestival'></div>" );
                                        $(".formfestival").load("ajax/ajax_festival_vloer.php");
                                    }
                                }

                                if (newtent==="leger") {
                                    if (!$('.formleger').length) {
                                        $( ".formadd" ).append( "<div class='formleger'></div>" );
                                        $(".formleger").load("ajax/ajax_legertent.php");
                                   }
                                }   

                                if (newtent==="aluhal") {
                                    if (!$('.formaluhal').length) {
                                        $( ".formadd" ).append( "<div class='formaluhal'></div>" );
                                        $(".formaluhal").load("ajax/ajax_aluhal.php");
                                    }
                                }

                                if (newtent==="opslag") {
                                    if (!$('.formopslag').length) {
                                        $( ".formadd" ).append( "<div class='formopslag'></div>" );
                                        $(".formopslag").load("ajax/ajax_opslagtent.php");
                                    }
                                }

                                if (newtent==="pagode") {
                                    if (!$('.formpagode').length) {
                                        $( ".formadd" ).append( "<div class='formpagode'></div>" );
                                        $(".formpagode").load("ajax/ajax_pagode.php");
                                    }
                                }

                                if (newtent==="span") {
                                    if (!$('.formspan').length) {
                                        $( ".formadd" ).append( "<div class='formspan'></div>" );
                                        $(".formspan").load("ajax/ajax_spantent.php");
                                    }
                                }

                                if (newtent==="stretch") {
                                    if (!$('.formstretch').length) {
                                        $( ".formadd" ).append( "<div class='formstretch'></div>" );
                                        $(".formstretch").load("ajax/ajax_stretchtent.php");
                                    }
                                }

                                if (newtent==="vip") {
                                    if (!$('.formvip').length) {
                                        $( ".formadd" ).append( "<div class='formvip'></div>" );
                                        $(".formvip").load("ajax/ajax_vip_paviljoen.php");
                                    }
                                }
                          

                    });
                    $('.nawadd').on("click", function() {
                                $(".naw").load("naw.php");
                                });
                    
                        $(".formvip").load("ajax/ajax_vip_paviljoen.php");
                    });
                </script>                    
                <div class="formadd">
                <div class="formvip"></div>
                </div>
                Wilt u hem zo <button class="nawadd" type="button" value="versturen">Versturen</button>
                <p>of nog een </p>
                    <div class="dropfill">

                   </div>
                
                        
                    </select> <button class="newtent" type="button">toevoegen</button><div class="drop"></div>?
                </label>
                <div class="naw"></div>
            <input type="submit" value="Versturen"/>
        </form>
    </body>
</html>
