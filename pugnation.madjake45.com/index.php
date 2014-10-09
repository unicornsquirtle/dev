<!DOCTYPE html>
<html>
<?php

$array = array(
    "http://upload.wikimedia.org/wikipedia/commons/d/d7/Sad-pug.jpg",
    "http://carrotsncake.com/wp-content/uploads/2010/02/J3zoipBQBpxank53ZCeZo8UIo1_500.jpg",
    "https://c1.staticflickr.com/3/2482/3626712341_f0441c3fb4.jpg",
    "http://thumbs.dreamstime.com/x/%E7%96%AF%E7%8B%82%E7%9A%84%E8%A1%A8%E9%9D%A2%E6%84%89%E5%BF%AB%E7%9A%84%E5%93%88-%E7%8B%97-2364792.jpg",
    "http://www.vikingmops.com/images/10.%20Happy%20Pug.jpg",
    "http://media-cache-ec0.pinimg.com/736x/ca/2f/a6/ca2fa6ad200a7bb933fc3812affd28a6.jpg",
    "http://3.bp.blogspot.com/_frdFfbyVDwQ/TQuQvDb59PI/AAAAAAAADFM/NVnfxC6cMhk/s400/puglights.bmp",
    "http://pugtailsdotnet.files.wordpress.com/2011/01/dsc_0120.jpg",
    "http://pugtailsdotnet.files.wordpress.com/2011/10/puggasaurus-rex.jpg",
    "http://imagecdn.bodybuilding.com/img/user_images/growable/2010/10/28/30317372/gallerypic/uKpiMKcAwWAYJRosUucSiVkChrTsANBJRxAC-610xh.jpg",
    "https://c1.staticflickr.com/9/8204/8261440430_bafcfaba92.jpg",
    "http://www.jointhepugs.com/wp-content/uploads/2013/04/nicolas-sanin-mantilla-goliat--500x481.jpg",
    "http://www.jointhepugs.com/wp-content/uploads/2013/07/bowtie-pug-puppy-500x500.jpg",
    "http://www.jointhepugs.com/wp-content/uploads/2013/11/Flying-Pug.jpg",
    "http://9pixs.com/wp-content/uploads/2014/07/pugs_14042599701.jpg",
    "http://www.pugs.nl/images/pug0507.jpg",
    "http://s3.gossipcop.com/up/gallery/celebs-easter-photos-2014/robin.png",
    "https://pbs.twimg.com/profile_images/417701354325291008/4fRKKBZB.jpeg",
    "https://pbs.twimg.com/profile_images/2020469856/pug-pugs-239511_407_436.jpg",
    "http://9pixs.com/wp-content/uploads/2014/07/pugs_1404259966.jpg",
    "http://i.huffpost.com/gen/808608/thumbs/o-PUG-AVENGERS-facebook.jpg",
);

$pugimage = $array[array_rand($array)];
setcookie("pugimage",$pugimage, time()+3600*24);

if($pugimage == $_COOKIE['pugimage']){
    
    $pugimage = $array[array_rand($array)];
};

?>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href="<?php echo $pugimage ?>" type="image/x-icon">
        <link rel="stylesheet" href="Style.css" type="text/css">
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <script src="Disco.js"></script>
        <script src="jquery-2.1.1.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <meta name="author" content="madjake45" />
        <title>PUGS!!!</title>
        
    </head>
<body onload="disco()">
<audio autoplay loop src="Rick.mp3"></audio>
<div id="body">
    <H1 align="Center">ATTACK OF THE PUGS!!!</H1>

    <div id="pug">
        <img src="<?php

        echo $pugimage;

        ?>" alt="PUGS!!!"/>
    </div>
</div>
    </body>
<footer>
    <br>
    Made By: <a href="http://madjake45.com"><img id="madjake45" src="http://madjake45.com/turtle.png" alt="madjake45"></a>
</footer>
</html>
