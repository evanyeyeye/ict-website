<?php

// Thanks SCT!

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: https://www.bigparser.com/");
    die();
}

class Website {
    private $title;
    public function __construct($title) {
        $this->title = $title;
    }
    private function require_to_var($file) {
        ob_start();
        require($file);
        return ob_get_clean();
    }
    public function render() {
        $o = $this->require_to_var(basename($_SERVER["SCRIPT_FILENAME"]));
        echo <<<TEMPLATE
TEMPLATE;
        die();
    }
}

?>