<!-- $arrayの中身の個数を数え、for文を用いて全出力せよ -->

<?php

$array = ['笹野', '赤い笹野', '青い笹野', '黒い笹野', '黄色い笹野'];
$count = count($array);
echo $count;

echo '<br>';

for ($i=0; $i < count($array); $i++) {
    echo $array[$i] . '<br>';
}

?>