<?php
$my_text = 'The quick brown [dog].';
preg_match('#\[(.*?)\]#', $my_text, $match);
echo "'";
print $match[1]."\n";
echo "'";
?>
