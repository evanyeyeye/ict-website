<?php

if (!class_exists('Template')) {
    require_once 'template.php';
    $w = new Template('ACSL');
    $w->render();
}

?>

<?php

$data = json_decode(file_get_contents("lectures/lectures.json"))["ACSL"];
foreach ($data as $key => $value) {
  echo '<div class="notification"><a href="lectures/acsl/' . $value . '">' . $key . '</a></div>';
}

?>