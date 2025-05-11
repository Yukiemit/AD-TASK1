<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunday</title>
    <link rel="stylesheet" href="/AD-TASK1/page7/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Sunday Schedule</h1>
        <div class="schedule">
            <?php
            $day = "Sunday";
            $schedule = [];

            if ($day == "Sunday") {
                $schedule = [
                "7:00 AM - 9:00 AM | Workout",
                "11:00 AM - 12:00 PM | Lunch",
                "1:00 PM - 3:50 PM | Coding",
                "4:00 PM - 5:00 PM | School works",
                "6:00 PM - 7:00 | Church",
                "8:00 PM - ONWARDS | Rest Time",
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