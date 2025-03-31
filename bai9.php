<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bảng Cửu Chương</title>
<h2>Bảng Cửu Chương</h2>
<body>
<table>
    <tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<td><pre>";
            for ($j = 1; $j <= 10; $j++) {
                echo "$i x $j = " . ($i * $j) . "<br>";
            }
            echo "</pre></td>";
            if ($i % 5 == 0) echo "</tr><tr>"; // Xuống dòng sau 5 cột
        }
        ?>
    </tr>
</table>
</body>
</html>