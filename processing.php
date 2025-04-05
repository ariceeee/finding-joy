<?php
    function loadResponsesFromFile() {
        $file = file_get_contents("responses.json");
        $json = json_decode($file, true);

        if($json == null) {
            echo "Error: failed to load or parse json file. Uh oh spaghettios.";
            exit;
        }

        $responseText = array();

        foreach($json as $response) {
            $responseText[] = $response['text'];
        }

        return $responseText;
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