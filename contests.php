<?php

if (!class_exists('Template')) {
    require_once 'template.php';
    $w = new Template('Contests');
    $w->render();
}

?>

<?php

// if (strtotime("2017:10:27 14:30:00") <= strtotime("now")) {
if (strtotime("2017:10:26 20:25:00") <= strtotime("now")) {
    echo '<div class="notification"><a href="contest1.zip">In-House Contest 1</a></div>';
} else {
    echo '<div class="notification"><p>Stay tuned!</p></div>';
}

?>