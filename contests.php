<?php

if (!class_exists('Template')) {
    require_once 'template.php';
    $w = new Template('Contests');
    $w->render();
}

?>

<div class="notification">
    <a href="contest1.zip">In-House Contest 1</a>
</div>

<?php

date_default_timezone_set('America/New_York');

?>