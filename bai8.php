<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Chọn năm</h2>
    <form method="post">
        <label for="year">Năm:</label>
        <select name="year" id="year">
            <?php
            $currentYear = date("Y");
            for ($year = 1900; $year <= $currentYear; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
        <input type="submit" value="Chọn">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedYear = $_POST["year"];
        echo "<p>Bạn đã chọn năm: <strong>$selectedYear</strong></p>";
    }
    ?>
</body>
</html>