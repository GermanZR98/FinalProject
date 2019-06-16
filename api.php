
<?php

require_once "modelo/Database.php" ;
$db = Database::getInstance() ;

    ////////////////////////////////////////////////////
    $data = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=electronica&amp;type=cloudcast'), true);
    $variable = str_replace("www", "api", $data{"data"}[0]{"url"}."embed-json/");
    $datos = json_decode(file_get_contents($variable), true);


    $Artista = $data{"data"}[0]{"user"}{"username"};
    $Cancion = $data{"data"}[0]{"slug"};
    $Reproducciones = $data{"data"}[0]{"listener_count"};
    $link = ($datos{"html"});


    $insert  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista','$Cancion','$Reproducciones','$link')";
    $sqlp = $db->prepare($insert) ;

    $sqlp->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data1 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=pop&amp;type=cloudcast'), true);
    $variable1 = str_replace("www", "api", $data1{"data"}[0]{"url"}."embed-json/");
    $datos1 = json_decode(file_get_contents($variable1), true);


    $Artista1 = $data1{"data"}[0]{"user"}{"username"};
    $Cancion1 = $data1{"data"}[0]{"slug"};
    $Reproducciones1 = $data1{"data"}[0]{"listener_count"};
    $link1 = ($datos1{"html"});


    $insert1  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista1','$Cancion1','$Reproducciones1','$link1')";
    $sqlp1 = $db->prepare($insert1) ;

    $sqlp1->execute() ;
      ////////////////////////////////////////////////////
      /////////////////////////////////////////////////////
    $data2 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=flamenco&amp;type=cloudcast'), true);
    $variable2 = str_replace("www", "api", $data2{"data"}[0]{"url"}."embed-json/");
    $datos2 = json_decode(file_get_contents($variable2), true);


    $Artista2 = $data2{"data"}[0]{"user"}{"username"};
    $Cancion2 = $data2{"data"}[0]{"slug"};
    $Reproducciones2 = $data2{"data"}[0]{"listener_count"};
    $link2 = ($datos2{"html"});


    $insert2  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista2','$Cancion2','$Reproducciones2','$link2')";
    $sqlp2 = $db->prepare($insert2) ;

    $sqlp2->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data3 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=metal&amp;type=cloudcast'), true);
    $variable3 = str_replace("www", "api", $data3{"data"}[0]{"url"}."embed-json/");
    $datos3 = json_decode(file_get_contents($variable3), true);


    $Artista3 = $data3{"data"}[0]{"user"}{"username"};
    $Cancion3 = $data3{"data"}[0]{"slug"};
    $Reproducciones3 = $data3{"data"}[0]{"listener_count"};
    $link3 = ($datos3{"html"});


    $insert3  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista3','$Cancion3','$Reproducciones3','$link3')";
    $sqlp3 = $db->prepare($insert3) ;

    $sqlp3->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data4 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=house&amp;type=cloudcast'), true);
    $variable4 = str_replace("www", "api", $data4{"data"}[0]{"url"}."embed-json/");
    $datos4 = json_decode(file_get_contents($variable4), true);


    $Artista4 = $data4{"data"}[0]{"user"}{"username"};
    $Cancion4 = $data4{"data"}[0]{"slug"};
    $Reproducciones4 = $data4{"data"}[0]{"listener_count"};
    $link4 = ($datos4{"html"});


    $insert4  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista4','$Cancion4','$Reproducciones4','$link4')";
    $sqlp4 = $db->prepare($insert4) ;

    $sqlp4->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data5 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=reggaeton&amp;type=cloudcast'), true);
    $variable5 = str_replace("www", "api", $data5{"data"}[0]{"url"}."embed-json/");
    $datos5 = json_decode(file_get_contents($variable5), true);


    $Artista5 = $data5{"data"}[0]{"user"}{"username"};
    $Cancion5= $data5{"data"}[0]{"slug"};
    $Reproducciones5 = $data5{"data"}[0]{"listener_count"};
    $link5 = ($datos5{"html"});


    $insert5  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista5','$Cancion5','$Reproducciones5','$link5')";
    $sqlp5 = $db->prepare($insert5) ;

    $sqlp5->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data6 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=heavy&amp;type=cloudcast'), true);
    $variable6 = str_replace("www", "api", $data6{"data"}[0]{"url"}."embed-json/");
    $datos6 = json_decode(file_get_contents($variable6), true);


    $Artista6 = $data6{"data"}[0]{"user"}{"username"};
    $Cancion6 = $data6{"data"}[0]{"slug"};
    $Reproducciones6 = $data6{"data"}[0]{"listener_count"};
    $link6 = ($datos6{"html"});


    $insert6  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista6','$Cancion6','$Reproducciones6','$link6')";
    $sqlp6 = $db->prepare($insert6) ;

    $sqlp6->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data6 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=rap&amp;type=cloudcast'), true);
    $variable6 = str_replace("www", "api", $data6{"data"}[0]{"url"}."embed-json/");
    $datos6 = json_decode(file_get_contents($variable6), true);


    $Artista6 = $data6{"data"}[0]{"user"}{"username"};
    $Cancion6 = $data6{"data"}[0]{"slug"};
    $Reproducciones6 = $data6{"data"}[0]{"listener_count"};
    $link6 = ($datos6{"html"});


    $insert6  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista6','$Cancion6','$Reproducciones6','$link6')";
    $sqlp6 = $db->prepare($insert6) ;

    $sqlp6->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data7 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=trap&amp;type=cloudcast'), true);
    $variable7 = str_replace("www", "api", $data7{"data"}[0]{"url"}."embed-json/");
    $datos7 = json_decode(file_get_contents($variable7), true);


    $Artista7 = $data7{"data"}[0]{"user"}{"username"};
    $Cancion7 = $data7{"data"}[0]{"slug"};
    $Reproducciones7 = $data7{"data"}[0]{"listener_count"};
    $link7 = ($datos7{"html"});


    $insert7  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista7','$Cancion7','$Reproducciones7','$link7')";
    $sqlp7 = $db->prepare($insert7) ;

    $sqlp7->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data8 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=funk&amp;type=cloudcast'), true);
    $variable8 = str_replace("www", "api", $data8{"data"}[0]{"url"}."embed-json/");
    $datos8 = json_decode(file_get_contents($variable8), true);


    $Artista8 = $data8{"data"}[0]{"user"}{"username"};
    $Cancion8 = $data8{"data"}[0]{"slug"};
    $Reproducciones8 = $data8{"data"}[0]{"listener_count"};
    $link8 = ($datos8{"html"});


    $insert8  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista8','$Cancion8','$Reproducciones8','$link8')";
    $sqlp8 = $db->prepare($insert8) ;

    $sqlp8->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data9 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=alternative&amp;type=cloudcast'), true);
    $variable9 = str_replace("www", "api", $data9{"data"}[0]{"url"}."embed-json/");
    $datos9 = json_decode(file_get_contents($variable9), true);


    $Artista9 = $data9{"data"}[0]{"user"}{"username"};
    $Cancion9 = $data9{"data"}[0]{"slug"};
    $Reproducciones9 = $data9{"data"}[0]{"listener_count"};
    $link9 = ($datos9{"html"});


    $insert9  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista9','$Cancion9','$Reproducciones9','$link9')";
    $sqlp9 = $db->prepare($insert9) ;

    $sqlp9->execute() ;
      ////////////////////////////////////////////////////
      ////////////////////////////////////////////////////
    $data10 = json_decode(file_get_contents('https://api.mixcloud.com/search/?q=clasica&amp;type=cloudcast'), true);
    $variable10 = str_replace("www", "api", $data10{"data"}[0]{"url"}."embed-json/");
    $datos10 = json_decode(file_get_contents($variable10), true);


    $Artista10 = $data10{"data"}[0]{"user"}{"username"};
    $Cancion10 = $data10{"data"}[0]{"slug"};
    $Reproducciones10 = $data10{"data"}[0]{"listener_count"};
    $link10 = ($datos10{"html"});


    $insert10  = "INSERT INTO canciones (artista, ncancion, reproduccion, cancion)
    VALUES ('$Artista10','$Cancion10','$Reproducciones10','$link10')";
    $sqlp10 = $db->prepare($insert10) ;

    $sqlp10->execute() ;
      ////////////////////////////////////////////////////
      

?>