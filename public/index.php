<?

?>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/anims.css">
        <title>Agroeasy - Tecnologia Agricola</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;800&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/hammerjs/2.0.8/hammer.min.js"></script>


        <script src="js/scrolldisplay.js"></script> 
    </head>
    <body>

    <?php include 'php/topbar.php'; ?>

    <div class="bodysection" id="newproductbox">
        <script type="text/javascript">
            BindSwipe();
        </script>
        <div class="newproductcontainer" id="np1">
            <div class="newproductdescription">
                <p class="newproductname" onclick="location.href='contact.php'">Automação de Máquinas</p>
                <p class="newproductlabel"onclick="location.href='contact.php'">Automatize as operações de cultivo com Hexagon.</p>
                <a href="contact.php"><p class="newproductlabel" id="npsmall">Entre em contato.</p></a>
            </div>
        </div>  
        <div class="newproductcontainer hiddensection" id="np2">
            <div class="newproductdescription">
                <p class="newproductname" onclick="location.href='contact.php'">Guia Virtual Hexagon</p>
                <p class="newproductlabel" onclick="location.href='contact.php'">Sistema de orientação para manter o alinhamento de tratores.</p>
                <a href="contact.php"><p class="newproductlabel" id="npsmall">Entre em contato.</p></a>
            </div>
        </div>  
        <div class="newproductcontainer hiddensection" id="np3">
            <div class="newproductdescription">
                <p class="newproductname" onclick="location.href='contact.php'">LOREM IPSUM DOLOR</p>
                <p class="newproductlabel" onclick="location.href='contact.php'">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod.</p>
                <a href="contact.php"><p class="newproductlabel" id="npsmall">Entre em contato.</p></a>
            </div>
        </div>  
        <div class="newproductcontainer hiddensection" id="np4">
            <div class="newproductdescription">
                <p class="newproductname" onclick="location.href='contact.php'">LOREM IPSUM DOLOR</p>
                <p class="newproductlabel" onclick="location.href='contact.php'">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod.</p>
                <a href="contact.php"><p class="newproductlabel" id="npsmall">Entre em contato.</p></a>
            </div>
        </div> 
    </div>

    <div class="bodysection" id="contactnowbox">
        <p class="contactnowlabel">Venda e Manutenção de Equipamentos Agrícolas. <a class="semilighttext" href="contact.php">Ligue Agora.</a></p>
    </div>

    <div class="bodysection" id="sectionmarca">
        <div class="bodyheader">
            <p class="headertitle">Principais Marcas</p>
        </div>
        <div class="bodycontent" >
            <div class="box small productbox"><div class="productimg" id="prod1"></div></div>
            <div class="box small productbox"><div class="productimg" id="prod2"></div></div>
            <div class="box small productbox"><div class="productimg" id="prod3"></div></div>
        </div>
    </div>

    <?php include 'php/footer.php'; ?>

    </body>
<html>