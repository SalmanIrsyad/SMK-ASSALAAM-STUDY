<?php
echo"<b>Penggunaan Top dan Bottom didalam array Assosiatif</b>";
echo "<br><br>";

$counturis = array(
    'CAD' => 'Canada',
    'TWN' => 'Taiwan',
    'USA' => 'United States',
    'GBR' => 'United Kindom',
    'GER' => 'Germany'
);

print "Original/n";
print_r($counturis);

print "Move Taiwan to the top/n";
move_to_top($counturis,'TWN');
print_r($counturis);

print "Move United States to the top/n";
move_to_top($counturis,'USA');
print_r($counturis);

function move_to_top(&$array,$key){
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
}

function move_to_bottom(&$array,$key){
    $value= $array[$key];
    unset($array[$key]);
    $array[$key] = $value;
}
?>