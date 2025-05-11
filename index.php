<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schedule</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>My Schedule</h1>
    <div class="days-container">
        <?php
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        for ($i = 0; $i < count($days); $i++) {
            $dayLower = strtolower($days[$i]);
            $link = $dayLower === 'monday' ? './page/monday.php' : '#';
            echo '<a class="day-link" href="' . $link . '">' . $days[$i] . '</a>';
        }
        ?>
    </div>
</body>
</html>