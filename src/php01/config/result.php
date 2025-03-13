<?php
$my_name = htmlspecialchars($_GET['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_GET['choices'], ENT_QUOTES);
$number = htmlspecialchars($_GET['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;