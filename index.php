<!DOCTYPE html>
<html>
<!--
         _ _    _           _     
   _ __ (_) | _(_)___ _   _| |__  
  | '_ \| | |/ / / __| | | | '_ \ 
  | | | | |   <| \__ \ |_| | |_) |
  |_| |_|_|_|\_\_|___/\__,_|_.__/ 
		                
-->
  <head>
    <meta charset="utf-">
    <meta content="TJHSST Intermediate Computer Team promotes problem-solving skills with computers and participates in the American Computer Science League competitions" name="description">
    <meta content="tj, tjhsst, computer, programming, club, ict, tjict, usaco, ascl" name="keywords">
    <meta content="Evan Shi" name="author">    
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>TJICT</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/bulmaswatch/lux/bulmaswatch.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <section class="hero is-primary is-medium">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            TJICT
          </h1>
          <h2 class="subtitle">
            Intermediate Computer Team
          </h2>
        </div>
      </div>
      <div class="hero-foot">
        <nav class="tabs is-boxed">
          <div class="container">
            <ul>
              <li class="is-active"><a>Programming</a></li>
              <li><a>ACSL</a></li>
              <li><a>Contests</a></li>
              <li><a>Reference</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <section class="section">
      <div class="container">
<?php
$data = json_decode(file_get_contents("programming.json"));
foreach ($data as $key => $value) {
  echo '<div class="notification"><a href="lectures/programming/' . $value . '">' . $key . '</a></div>';
}
?>
      </div>
    </section>
  </body>
</html>