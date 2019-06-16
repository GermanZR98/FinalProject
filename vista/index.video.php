<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <script src="snap.svg-min.js"></script>
    <title>Document</title>
    <style>
    
    @media  (max-width: 1000px) {

        body {
            background-image: url("../estilos/fondo2.png");
        }

        .cajaRosa {
            display: none;
        }

        #myVideo {
            display: none;
        }
    }

    @media  (max-height: 620px) {

        body {
            background-image: url("../estilos/fondo2.png") !important;
        }

        .cajaRosa {
            display: none;
        }

        #myVideo {
            display: none;
        }
    }
    
    </style>
</head>
<body>

<div id="#iconDiv"></div>

    <div class="videoFondo">

        <video autoplay muted loop id="myVideo">
            <source src="../estilos/video.mp4" type="video/mp4">
        </video>

        <div class="cajaRosa">
            <div class="cajaNegroTitulo">
                Twitter: @SoundCloud <br>
                Facebook: SoundCloud_Music <br>
                Servicio técnico <br>
                SkySound(Copyright)
                <a class="btn btn-primary btn-sm card-title" href="../index.php?mod=cancion&ope=index">Volver atrás</a> 

            </div>
        </div>

        <div class="container">
            <div class="contenedorVideo">
                <div style="margin: auto;width:70%;text-align:center">

                        <div class="item">
                            <h1 class="fondoBanner titulo">SKYSOUND</h1>
                        </div>                        

                    <iframe class="item" width="250" height="150" src="https://www.youtube.com/embed/0I647GU3Jsc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe class="item" width="250" height="150" src="https://www.youtube.com/embed/KrVC5dm5fFc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe class="item" width="250" height="150" src="https://www.youtube.com/embed/YJVmu6yttiw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe class="item" width="250" height="150" src="https://www.youtube.com/embed/oJa7Kr7_9dw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>


<script>
    var s = Snap("#iconDiv");
    Snap.load("drawing.svg", function(f) {
        console.log(f);
        s.append(f);
    }) ;
</script>

<!-- var s = Snap(800,800);
Snap.load("img/wdd.svg", onSVGLoaded ) ;

function onSVGLoaded( svg ){ 
    svg.select("rect[fill='#AD6F6F']").animate({fill: "#5D9170"},1000);
    var circles = svg.select('circle');
    var rect = svg.select('rect');
    var text = svg.select('text');
    rect.animate( { width: 500 }, 1000 );
    circles.animate({r: 0}, 1000);
    text.animate({y: -200,x: 150}, 1000);
    
    s.append( svg );
} -->
    
</body>
</html>