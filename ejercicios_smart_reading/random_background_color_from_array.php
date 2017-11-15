<?php
/* am a beginner when it comes to programming so I wanted to see if this would be the right way to code this. I was trying to generate a random background color from an array.

If there is something I'm missing or there is something I could do better please let me know.
*/
   $background_colors = array('#282E33', '#25373A', '#164852', '#495E67', '#FF3838');

    $count = count($background_colors) - 1;

    $i = rand(0, $count);

    $rand_background = $background_colors[$i];

    /*


4
down vote
accepted
That's pretty good.

However, I'd do it like so with array_rand()...

$background_colors = array('#282E33', '#25373A', '#164852', '#495E67', '#FF3838');

$rand_background = $background_colors[array_rand($background_colors)];
It is less code and more readable IMO.
    */

/*

function GenerateRandomColor()
{
    $color = '#';
    $colorHexLighter = array("9","A","B","C","D","E","F" );
    for($x=0; $x < 6; $x++):
        $color .= $colorHexLighter[array_rand($colorHexLighter, 1)]  ;
    endfor;
    return substr($color, 0, 7);
}

*/
?>
<html>
    <head>

    </head>
    <body style="background: <?php echo $rand_background; ?>;">

    </body>
</html>