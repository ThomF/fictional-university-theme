<?php
$names = array('thomas', 'brad', 'sean');
$count = 0;


while($count < count($names)) {
    echo "<li>hello, my name is $names[$count]</li>";
    $count++;
}

