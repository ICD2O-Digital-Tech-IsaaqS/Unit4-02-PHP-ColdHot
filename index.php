<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="Temperature Checker, with PHP">
  <meta name="keywords" content="Immaculata, ICD2O">
  <meta name="author" content="Isaaq Simon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (13)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (13)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (13)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (13)/site.webmanifest">
  <title>Temperature Checker</title>
  <!-- Link to external CSS file -->
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h1>Temperature Checker</h1>
    <p>Enter the temperature in Celsius:</p>

    <!-- Form to enter temperature -->
    <form method="post">
        <input type="number" name="celsius" placeholder="e.g. 10" required>
        <br><br>
        <button type="submit">Check</button>
    </form>

    <div class="result">
        <?php
        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get the temperature input
            $celsius = floatval($_POST['celsius']);

            // Check if temperature is less than 15
            if ($celsius < 15) {
                echo "<span class='cold'>❄️ It is cold outside!</span>";
            } 
            else {
                echo "<span class='hot'>☀️ It is hot outside!</span>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>