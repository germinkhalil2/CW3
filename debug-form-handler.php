<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1 Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main class="container">
    <section class="card">
        <h1>Exercise 1: Form Input Values</h1>

        <?php
        echo "<p><strong>Your Name:</strong> " . htmlspecialchars($_POST['visitor_name'] ?? '') . "</p>";

        $options = $_POST['options'] ?? [];

        if (!is_array($options)) {
            $options = [$options];
        }

        echo "<p><strong>Options:</strong> " . htmlspecialchars(implode(", ", $options)) . "</p>";

        echo "<h2>All Form Data</h2>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        ?>

        <a class="back-link" href="debug-form.html">Go Back</a>
    </section>
</main>

</body>
</html>