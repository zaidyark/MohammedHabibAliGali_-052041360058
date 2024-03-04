<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetables</title>
    <link rel="stylesheet" href="css\Styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>

<header>
    <h1>Timetables</h1>
</header>

<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="timetables.html">Timetables</a></li> <!-- Link to timetables.html -->
        <!-- Add more navigation links as needed -->
    </ul>
</nav>

<main>
    <section>
        <h2>Spring Semester 2024 Timetable</h2>
        <table class="timetable">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Example data
                $timetable = [
                    ["8:00 AM - 9:00 AM", "Class A", "Class B", "Class C", "", "Class D"],
                    ["9:00 AM - 10:00 AM", "Class B", "Class C", "Class D", "Class E", "Class A"],
                    // Add more rows for each hour of the day
                ];

                // Output timetable rows
                foreach ($timetable as $row) {
                    echo "<tr>";
                    foreach ($row as $cell) {
                        echo "<td>$cell</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</main>

<footer>
    <p>&copy; 2024 University Name. All rights reserved.</p>
</footer>

</body>
</html>
