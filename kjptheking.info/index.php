<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Welcome</title>
        
    </head>
    <body>
        <H1>Here is the native Kyle Pomroy</H1>


        <img src="<?php
        $rand = rand(1,$max);
        switch (rand(1, 3)) {
            case '1':
              echo "http://t3.gstatic.com/images?q=tbn:ANd9GcRpYwpxCRNt0SEVEffLHXe-VFmDDL1NV5J3fnzGoEK2OQYqoag6:www.howtodrawmanga3d.com/sites/default/files/imagecache/obrazok-do-tutorialu/user/tutorials/how_to_draw_magikarp_pokemon/how_draw_magikarp_pokemon.jpg";
                break;
                
            case '2';
              echo "https://pbs.twimg.com/profile_images/443835622747549697/PSD-VNdL.jpeg";
                break;
                
            case '3';
              echo "http://t3.gstatic.com/images?q=tbn:ANd9GcRuz7xWsnPRM7Ely0B9w5E-BBweHvv01989QChFrN5bXP__vloilQ:https://gp6.googleusercontent.com/-MbaEVoOeerk/AAAAAAAAAAI/AAAAAAAAAAA/n6z-m4TQaDg/s48-c-k-no/photo.jpg%3Fsz%3D50";
                break;
            
            default:
                echo "http://t3.gstatic.com/images?q=tbn:ANd9GcRuz7xWsnPRM7Ely0B9w5E-BBweHvv01989QChFrN5bXP__vloilQ:https://gp6.googleusercontent.com/-MbaEVoOeerk/AAAAAAAAAAI/AAAAAAAAAAA/n6z-m4TQaDg/s48-c-k-no/photo.jpg%3Fsz%3D50";
                break;
        }

        ?>" alt="Kyle Pomroy"/>

    </body>
</html>