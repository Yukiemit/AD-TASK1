<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monday</title>
    <link rel="stylesheet" href="../page/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Monday Schedule</h1>
        <div class="schedule">
            <?php
            $day = "Monday";
            $schedule = [];

            if ($day == "Monday") {
                $schedule = [
                "7:00 AM - 8:50 AM | Mobile App Development (F1209)",
                "10:00 AM - 12:50 PM | App Development (F1203)",
                "1:00 PM - 2:50 PM | Purposive Communication (F611)"
                ];
            }

        for ($i = 0; $i < count($schedule); $i++) {
            echo "<p>" . $schedule[$i] . '</p>';
        }
            ?>
        </div>
        <a class="day-link" href="../index.php">Back to Home</a>
    </div>
</body>
</html>