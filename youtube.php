<?php

$matches= $matches[1];
preg_match(
    '/[\\?\\&]v=([^\\?\\&]+)/',
    'https://www.youtube.com/watch?v=vFcS080VYQ0',
    $matches
);

?>

<object width="425" id="$matches[1]" height="350" data="https://www.youtube.com/watch?v=vFcS080VYQ0" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/Ahg6qcgoay4" /></object>
