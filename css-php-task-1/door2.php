<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 2 Adventure</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Magic Door Adventure - Door 2</h1>
    </header>

    <main>
        <section id="story">
            <h2>Your Adventure Begins</h2>
            <p>You stepped through Door 2 and entered a dark cave. The walls glitter with countless gemstones, but beware of the hidden traps!</p>
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
// door2.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<html><head><link rel='stylesheet' href='style.css'></head><body>";
    echo "<header><h1>Magic Door Adventure - Door 2</h1></header>";
    echo "<main><section id='story'>";
    echo "<h2>The Forbidden Forest</h2>";
    echo "<p>You step into the dark and eerie Forbidden Forest. Shadows move between the trees. Suddenly, a centaur appears and says: 'Follow me if you wish to escape unscathed.'</p>";
    echo "<p>What will you do next?</p>";
    echo "<form action='index.html' method='post'><button>Return to Start</button></form>";
    echo "</section></main>";
    echo "<footer><p>&copy; 2024 Magic Door Adventure. All rights reserved. Inspired by Harry Potter.</p></footer>";
    echo "</body></html>";
}
?>
