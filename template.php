<?php

// Thanks SCT!

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: https://www.bigparser.com/");
    die();
}

class Template {
    private $title;
    public function __construct($title) {
        $this->title = $title;
    }
    private function generate_nav() {
        $header_array = ["Programming", "ACSL", "Contests"];
        $list = "";
        foreach ($header_array as $header) {
            if ($this->title === $header) {
                $list .= "<li class="is-active"><a>{$header}</a></li>\n";
            } else {
                $list .= "<li><a>{$header}</a></li>\n";
            }
        }
        return $list;
    } 
    private function require_to_var($file) {
        ob_start();
        require($file);
        return ob_get_clean();
    }
    public function render() {
        $block_nav = $this->generate_nav();
        $block_content = $this->require_to_var(basename($_SERVER["SCRIPT_FILENAME"]));
        echo <<<TEMPLATE
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
        <meta charset="utf-8">
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
                            {$block_nav}
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <section class="section">
            <div class="container">
                {$block_content}
            </div>
        </section>
    </body>
</html>
TEMPLATE;
        die();
    }
}

?>