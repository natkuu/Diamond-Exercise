<?php

function print_diamond ($letter){

    $alphabet = 'ABCDEFGHIJKLMNOPRSTUWXYZ';
    $index = strrpos($alphabet, $letter);
    $index2 = $index-1;
    echo '<pre>';
    for($i=0;$i<=$index;$i++){
        for ($d=$index-$i; $d > 0; $d--)  {
            echo " ";
        }

        for($j=0;$j<=$i;$j++){
            if ($j == 0 || $j == $i) echo $alphabet[$i]." ";
            else if ($j == 1) echo str_repeat(' ', ($i-1)*2);
        }
            echo "<br>";
        }
        for($i=$index2;$i>=0;$i--){
        for ($d=0; $d <= $index2-$i; $d++)  {
            echo " ";
        }
        for($j=$i;$j>=0;$j--){
            if ($j == 0 || $j == $i) echo $alphabet[$i]." ";
            else if ($j == 1) echo str_repeat(' ', ($i-1)*2);
        }
            echo "<br>";

    }
}
//caling the function
print_diamond ('Z');

