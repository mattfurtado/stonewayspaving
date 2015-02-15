<?php
if ($curr == $max) $next = 1;
else $next = $curr + 1;

if ($curr == 1) $prev = $max;
else $prev = $curr - 1;

echo '<img src="../images/jobs/job'.$job.'_'.$type.$curr.'.jpg" />';

if($max>1){
	echo '<br /><br />';
	echo $curr.' of '.$max;
	echo '<br /><br />';
	echo '<a href="'.$type.$typeNum.'.php?id='.$prev.'">Previous</a>';
	echo '|';
	echo '<a href="'.$type.$typeNum.'.php?id='.$next.'">Next</a>';
}
?>