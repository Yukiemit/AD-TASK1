<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuesday</title>
    <link rel="stylesheet" href="/AD-TASK1/page2/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Tuesday Schedule</h1>
        <div class="schedule">
            <?php
            $day = "Tuesday";
            $schedule = [];

            if ($day == "Tuesday") {
                $schedule = [
                "7:00 AM - 8:50 AM | Professional Development",
                "10:00 AM - 12:50 PM | App Development Laboratory",
                "1:00 PM - 3:40 PM | Physics 1 Lecture"
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