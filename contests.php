<?php

if (!class_exists('Template')) {
    require_once 'template.php';
    $w = new Template('Contests');
    $w->render();
}

?>

<div class="notification">
    <a href="contests/contest1.zip">In-House Contest 1 (with solutions)</a>    
</div>

<div class="notification">
    <a href="contests/acsl1.zip">ACSL Contest 1 Practice</a>    
</div>

<?php

date_default_timezone_set('America/New_York');

?>