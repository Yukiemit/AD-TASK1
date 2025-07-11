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
    $dayFolders = [
        "Monday" => "./page/monday.php",
        "Tuesday" => "./page2/tuesday.php",
        "Wednesday" => "./page3/wednesday.php",
        "Thursday" => "./page4/thursday.php",
        "Friday" => "./page5/friday.php",
        "Saturday" => "./page6/saturday.php",
        "Sunday" => "page7"
    ];

    foreach ($dayFolders as $day => $folder) {
        $dayFile = "./$folder/" . strtolower($day) . ".php";
        echo '<a class="day-link" href="' . $dayFile . '">' . $day . '</a>';
    }
    ?>
</div>
</body>
</html>