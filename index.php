<?php include "processing.php" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/main.css">
        <script src="filter.js"></script>
        <title>Finding Joy</title>
    </head>

    <body>
        <header>
                <nav>
                    <div id="logo">
                        <h1>Finding <span id = "cursive">Joy</span> In Your Everyday</h1>
                    </div>

                    <div class="nav-item">
                        <a href="index.php">Home</a>
                    </div>

                    <div class="nav-item">
                        <a href="about.html">About</a>
                    </div>

                    <div class="nav-item">
                        <a href="https://forms.gle/MfK3JFmvvbnjdAGj6">Contribute</a>
                    </div>
                </nav>
            </header>
        <main>
            
            <section class="filter-panel">
                <h2 id="filter-panel-title">Browse By Topic</h2>

                <div class = "filters">
                    <button class = "filter">
                        Animals
                    </button>

                    <button class = "filter">
                        Comfort
                    </button>

                    <button class = "filter">
                        Creativity &amp; Expression
                    </button>

                    <button class = "filter">
                        Daily Routine
                    </button>

                    <button class = "filter">
                        Five Senses
                    </button>

                    <button class = "filter">
                        Food &amp; Drink
                    </button>

                    <button class = "filter">
                        Human Connection
                    </button>

                    <button class = "filter">
                        Introspection
                    </button>

                    <button class = "filter">
                        Mindfulness
                    </button>

                    <button class = "filter">
                        Nature
                    </button>

                    <button class = "filter">
                        Wisdom &amp; Reflection
                    </button>
                </div>
            </section>

            <section class="gallery">
                <?php generateTiles(); ?>
            </section>
        </main>
    </body>
</html>