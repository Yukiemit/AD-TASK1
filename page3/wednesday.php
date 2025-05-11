<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wednesday</title>
    <link rel="stylesheet" href="/AD-TASK1/page3/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Wednesday Schedule</h1>
        <div class="schedule">
            <?php
            $day = "Wednesday";
            $schedule = [];

            if ($day == "Wednesday") {
                $schedule = [
                "9:00 AM - 10:50 AM | Technopreneur (FTIC)",
                "1:00 PM - 3:00 PM | Physics Laboratory (F1009)",
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