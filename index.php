<?php
//alternate syntax

// if(10<5){
// echo 'we are in IF';
// }else{
// echo 'we are in ELSE';
// }


if (10 > 5):?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        hello world
    </body>
    </html>
    <?php
endif?>
<?php
echo'<br>';

if(10>10):
    echo 'First condition';
        echo'<br>';
    echo 'First condition';
        echo'<br>';
    echo 'First condition';
    
    elseif(10>5):
        echo'second condition';
        echo'<br>';
        echo'second condition';
        echo'<br>';
        echo'second condition';
        else :
            echo 'Else';
        endif;