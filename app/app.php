<?php




require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/cd.php";
    $app = new Silex\Application();



$app->get("/",function(){


        $first_cd = new CD("Master of Reality", "Black Sabbath", "http://findicons.com/files/icons/1609/ose_png/256/cd.png", 10.99);
        $second_cd = new CD("Electric Ladyland", "Jimi Hendrix", "http://findicons.com/files/icons/1609/ose_png/256/cd.png", 10.99);
        $third_cd = new CD("Nevermind", "Nirvana", "http://findicons.com/files/icons/1609/ose_png/256/cd.png", 10.99);
        $fourth_cd = new CD("I don't get it", "Pork Lion", "http://findicons.com/files/icons/1609/ose_png/256/cd.png", 49.99);
        $cds = array($first_cd, $second_cd, $third_cd, $fourth_cd);

        $output="";

        foreach($cds as $cd){
            $output= $output .
            "<div class='row'>
                   <div class='col-md-6'>
                       <img src=" . $cd->getCoverArt() . ">
                   </div>
                   <div class='col-md-6'>
                       <p>" . $cd->getTitle() . "</p>
                       <p>By " . $cd->getArtist() . "</p>
                       <p>$". $cd->getPrice() . "</p>
                   </div>

                   </div>";
        }

        return $output;

});

        return $app;

?>
