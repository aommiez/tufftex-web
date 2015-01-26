<html lang="en" class="swipebox-no-touch" style="
    height: 100%;
"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tufftex Group</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="fonts02/font02.css" rel="stylesheet">
    <link href="css/tufftex-component.css" rel="stylesheet">
    <link href="css/tufftex.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="js/jquery.nicescroll.min.js"></script>-->

    <!--<link rel="stylesheet" href="swipebox-master/src/css/swipebox.min.css">-->
    <!--<script src="swipebox-master/src/js/jquery.swipebox.min.js"></script>-->


    <link rel="stylesheet" href="css/demo-styles.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>

    <style>
        @font-face {
            font-family: thaisanslite;
            src: url(fonts/thaisanslite_r1.ttf);
        }

        body {
            font-family: Cocogoose, thaisanslite;
        }

        @import url(http://fonts.googleapis.com/css?family=Lato:400,100,300);

        body {
            background-color: #111;
            font: normal 100%/1.5 "Lato", sans-serif;
            color: white;
            text-align: center
        }

        .demo-wrapper {
            padding: 1em
        }

        header {
            font-size: 20px;
            padding: 1em 1.5em;
            line-height: .5em;
            background-color: #454683;
            color: white
        }

        a {
            text-decoration: none;
            color: inherit
        }

        a.button {
            background-color: #F02968;
            padding: 5px 15px;
            border-radius: 3px;
            display: inline-block;
            margin-top: 1.5em;
            margin-right: 1em
        }

        .infobar {
            font-size: 20px;
            padding: 1em
        }

        .infobar p {
            text-align: center;
            margin-top: 1em
        }

        h1 {
            text-align: center;
            font-size: 2em
        }

        .credit,
        .tips {
            text-align: center
        }

        .credit {
            margin-top: 1em
        }

        .credit a {
            text-decoration: underline
        }

        #gallery-container {
            text-align: left;
        }

    </style>
</head>

<body role="document" style="height: 100%; background: black;">

<!-- Fixed navbar -->
<nav class="navbar navbar-fixed-top fontBlack">
    <div class="navbarBg">

    </div>
    <div class="container">
        <div class="navbar-header">
            <a href="#">
            </a><a href="#main">
                <img src="images/head/logo.png" class="logoImg">
            </a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="liMain"><a href="index.html#main">HOME</a></li>
                <li class="liAbout"><a href="index.html#aboutus">ABOUT US</a></li>
                <li class="liPortfolio active"><a href="index.html#portfilios">PRODUCTS</a></li>
                <li class="liService"><a href="index.html#services">SERVICES</a></li>
                <li class="liService"><a href="index.html#ourclients">OUR CLIENTS</a></li>
                <li class="liContact"><a href="index.html#contact">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav" style="float: right;">
                <li><a href="#" style="font-size: 44px;font-weight: normal;padding: 12px 0px 12px 0px;color:#ffffff;">|</a></li>
                <li><a href="#"><img src="images/head/iconFacebook.png"></a></li>
                <li><a href="#"><img src="images/head/iconyoutube.png"></a></li>
                <li><a href="#"><img src="images/head/icongmail.png"></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->

    </div>
</nav>
<div style="padding-top: 60px;">
<!--    <strong style="font-size: 33px; vertical-align: middle; padding: 0 20px; font-weight: bold;">Contruction</strong>-->
</div>

<?php
$dir = "product_img/".$_GET['p'];
$dh  = opendir($dir);
$pictures = array();
while (false !== ($filename = readdir($dh))) {
    $allowed =  array('png' ,'jpg');
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(in_array($ext,$allowed) ) {
        $pictures[] = $dir."/".$filename;
    }
}
?>
<div id="gallery-container" style="margin: 0 auto; margin-top: 60px; background: black;">
    <ul class="items--small">
        <?php foreach($pictures as $key=> $value){?>
            <li class="item"><a href="#"><img src="<?php echo $value;?>" alt="" /></a></li>
        <?php }?>
    </ul>
    <ul class="items--big">
        <?php foreach($pictures as $key=> $value){?>
        <li class="item--big">
            <a href="#">
                <figure>
                    <img src="<?php echo $value;?>" alt="" />
<!--                    <figcaption class="img-caption">-->
<!--                        Caption-->
<!--                    </figcaption>-->
                </figure>
            </a>
        </li>
        <?php }?>
    </ul>

    <div class="controls">
        <span class="control icon-arrow-left" data-direction="previous"></span>
        <span class="control icon-arrow-right" data-direction="next"></span>
        <span class="grid icon-grid"></span>
        <span class="fs-toggle icon-fullscreen"></span>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#gallery-container').sGallery({
            fullScreenEnabled: true
        });
    });
</script>

</body>
</html>