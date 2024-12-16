<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 3 Adventure</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Magic Door Adventure - Door 3</h1>
    </header>

    <main>
        <section id="story">
            <h2>Your Adventure Begins</h2>
            <p>You stepped through Door 3 and found yourself in a futuristic city bustling with advanced robots and flying cars. The future is in your hands!</p>
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
// door3.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<html><head><link rel='stylesheet' href='style.css'></head><body>";
    echo "<header><h1>Magic Door Adventure - Door 3</h1></header>";
    echo "<main><section id='story'>";
    echo "<h2>The Chamber of Secrets</h2>";
    echo "<p>You descend into the cold, damp Chamber of Secrets. The walls are covered with snake carvings, and you hear a hissing sound. Suddenly, a voice whispers: 'Speak, and the door shall open.'</p>";
    echo "<p>What will you do next?</p>";
    echo "<form action='index.html' method='post'><button>Return to Start</button></form>";
    echo "</section></main>";
    echo "<footer><p>&copy; 2024 Magic Door Adventure. All rights reserved. Inspired by Harry Potter.</p></footer>";
    echo "</body></html>";
}
?>
