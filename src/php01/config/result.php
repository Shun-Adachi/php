<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);


print "お名前は" . $name . "ですね" . "<br />";

print "ご希望商品は" . $item . "ですね" . "<br />";

print "数量は" . $number . "ですね" . "<br />";