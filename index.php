
<?php

$data = json_decode(file_get_contents("programming.json"));
foreach ($data as $key => $value) {
  echo '<div class="notification"><a href="lectures/programming/' . $value . '">' . $key . '</a></div>';
}

?>