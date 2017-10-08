<?php

if (!class_exists('Template')) {
    require_once 'template.php';
    $w = new Template('Programming');
    $w->render();
}

?>

<?php

$data = json_decode(file_get_contents("lectures/lectures.json"), true)["Programming"];
foreach ($data as $key => $value) {
  echo '<div class="notification"><a href="lectures/programming/' . $value . '">' . $key . '</a></div>';
}

?>