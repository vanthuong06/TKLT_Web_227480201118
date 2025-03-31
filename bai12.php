<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="banco">
    <h3>Bàn Cờ Vua</h3>
    <div class="chessboard" id="board"></div>
    <script>
        const board = document.getElementById("board");
        for (let row = 0; row < 8; row++) {
            for (let col = 0; col < 8; col++) {
                let square = document.createElement("div");
                square.classList.add("square");
                if ((row + col) % 2 === 1) {
                    square.classList.add("black");
                } else {
                    square.classList.add("white");
                }
                board.appendChild(square);
            }
        }
    </script>
</body>
</html>