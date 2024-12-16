<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choice = $_POST['choice'] ?? '';

    switch ($choice) {
        case 'door1':
            $message = "You step through Door 1 and find yourself in the Gryffindor common room. A warm fire crackles in the hearth as the portrait of the Fat Lady watches you.";
            break;
        case 'door2':
            $message = "Door 2 leads you into the Forbidden Forest. Shadows flicker between trees, and a centaur offers you guidance.";
            break;
        case 'door3':
            $message = "Behind Door 3, you descend into the Chamber of Secrets. The walls are adorned with snake carvings, and the air is thick with mystery.";
            break;
        default:
            $message = "Please choose a valid door to begin your adventure!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Magic Door Adventure</h1>
    </header>

    <main>
        <section id="result">
            <h2>Your Adventure</h2>
            <p><?= htmlspecialchars($message) ?></p>
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
