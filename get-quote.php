<?php
$url = "https://bible-api.com/?random=verse";
$result = file_get_contents($url);
$arr = json_decode($result);

$things = $arr->verses;
$item = $things[0];

$txt = $item->text;
$nam = $item->book_name;
$cha = $item->chapter;
$ver = $item->verse;

echo "<div class=\"port holder\"> <b>" . $nam . " Chapter " . $cha . " Verse " . $ver . "</b></div>";
echo "<div class=\"port\">" . $txt . "</div>";
?>
