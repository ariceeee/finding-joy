<?php
    // load responses from file
    $file = file_get_contents("responses.json");
    $json = json_decode($file, true);

    if($json == null) {
        echo "Error: failed to load or parse json file. Uh oh spaghettios.";
        exit;
    }

    // get selected topic from POST var
    $selectedTopic = $_POST['filter'];

    $output = []; // stores responses that belong to the selected topic filter

    foreach($json as $response) {
        // find responses that pertain to the selected topic
        if (isset($response['topics']) && in_array($selectedTopic, $response['topics'])) {
            $output[] = $response['text'];
        }
    }

    // return html
    header('Content-Type: text/html');

    if(count($output) == 0) {
        echo "<p>No responses found that pertain to the selected topic.</p>";
    } else {
        foreach($output as $response) {
            echo "<div class = \"tile\"><p>" . $response . "</p></div>";
        }
    }

?>