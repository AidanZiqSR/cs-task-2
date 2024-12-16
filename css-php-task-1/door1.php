<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 1 Adventure</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Magic Door Adventure - Door 1</h1>
    </header>

    <main>
        <section id="story">
            <h2>Your Adventure Begins</h2>
            <p>You stepped through Door 1 and found yourself in a lush, enchanted garden filled with talking animals.</p>
        </section>

        <form action="index.html" method="get">
            <button type="submit">Restart Adventure</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Magic Door Adventure. All rights reserved.</p>
    </footer>
</body>
</html>


<?php
// door1.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<html><head><link rel='stylesheet' href='style.css'></head><body>";
    echo "<header><h1>Magic Door Adventure - Door 1</h1></header>";
    echo "<main><section id='story'>";
    echo "<h2>Welcome to the Gryffindor Common Room</h2>";
    echo "<p>You find yourself in the cozy warmth of the Gryffindor common room. A roaring fire lights up the room. Suddenly, a portrait speaks: 'Prove your bravery in a duel with a boggart!'</p>";
    echo "<p>What will you do next?</p>";
    echo "<form action='index.html' method='post'><button>Return to Start</button></form>";
    echo "</section></main>";
    echo "<footer><p>&copy; 2024 Magic Door Adventure. All rights reserved. Inspired by Harry Potter.</p></footer>";
    echo "</body></html>";
}
?>
