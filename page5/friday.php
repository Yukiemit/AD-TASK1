<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friday</title>
    <link rel="stylesheet" href="/AD-TASK1/page5/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Friday Schedule</h1>
        <div class="schedule">
            <?php
            $day = "Friday";
            $schedule = [];

            if ($day == "Friday") {
                $schedule = [
                "7:00 AM - 8:50 AM | Technopreneur",
                "10:00 AM - 12:50 PM | Business Process",
                ];
            }

        for ($i = 0; $i < count($schedule); $i++) {
            echo "<p>" . $schedule[$i] . '</p>';
        }
            ?>
        </div>
        <a class="day-link" href="/AD-TASK1/index.php">Back to Home</a>
    </div>
</body>
</html>