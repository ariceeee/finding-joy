<?php
    function loadResponsesFromFile() {
        $file = fopen("responses.txt", "r");
        $ln = 0;

        $responses = array();

        while($line = fgets($file)) {
            $ln++;
            $responses[] = $line;
        }

        return $responses;
    }

    function createTileElement($text) {
        return "<div class = \"tile\"><p>" . $text . "</p></div>";
    }

    function generateTiles() {
        $responses = loadResponsesFromFile();

        foreach($responses as $r) {
            echo createTileElement($r);
        }
    }

?>