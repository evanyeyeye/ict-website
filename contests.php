<?php

if (!class_exists('Template')) {
    require_once 'template.php';
    $w = new Template('Contests');
    $w->render();
}

?>

<div class="notification">
	<p>Stay tuned!</p>
</div>