<?php 
$num = 5;
$result = ($num > 0) ? 'positive' : '';
$result = ($num < 0) ? (($num < -10) ? 'value is below -10' : 'negative') : 'its zero';