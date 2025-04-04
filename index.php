<?php include "processing.php" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/main.css">
        <title>Finding Joy</title>
    </head>

    <body>
        <header>
            <h1>Our everyday life is magic.</h1>
            <p id="descr">I asked the Internet to tell me about the <span class="em">small</span>, <span class="em">simple</span>, <span class="em">mundane</span>, and <span class="em">"boring"</span> things in their life that bring them joy. Here's what they said:</p>
        </header>

        <main>
            <section class="gallery">
                <?php generateTiles(); ?>
            </section>
        </main>
    </body>
</html>