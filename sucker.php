<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Grade Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main class="container">
    <section class="card">
        <?php
        // Exercise 5: Basic Validation
        $required = ['name', 'section', 'cardnumber', 'cardtype'];

        foreach ($required as $field) {
            if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
                echo "<h1>Sorry</h1>";
                echo '<p>You did not fill out the form completely.</p>';
                echo '<a class="back-link" href="buyagrade.html">Try again?</a>';
                exit;
            }
        }

        // Clean user input
        $name = trim($_POST['name']);
        $section = trim($_POST['section']);
        $cardnumber = trim($_POST['cardnumber']);
        $cardtype = trim($_POST['cardtype']);

        // Exercise 3: Display submitted data
        echo "<h1>Exercise 3: Form Input Values</h1>";
        echo "<p><strong>Your Name:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Section:</strong> " . htmlspecialchars($section) . "</p>";
        echo "<p><strong>Card Number:</strong> " . htmlspecialchars($cardnumber) . "</p>";
        echo "<p><strong>Card Type:</strong> " . htmlspecialchars($cardtype) . "</p>";

        echo "<h2>Raw Form Data</h2>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        // Exercise 4: Save form data
        $line = $name . ";" . $section . ";" . $cardnumber . ";" . $cardtype . PHP_EOL;

        file_put_contents("suckers.html", $line, FILE_APPEND);

        $all = file_get_contents("suckers.html");

        echo "<h2>Exercise 4: The current database contains:</h2>";
        echo "<pre>" . htmlspecialchars($all) . "</pre>";
        ?>

        <a class="back-link" href="buyagrade.html">Submit Another Form</a>
    </section>
</main>

</body>
</html>