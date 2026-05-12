<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #e8f5e9;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            overflow: hidden;
}

        h1 {
            color: #1b5e20;
            font-size: clamp(36px, 5vw, 70px);
            margin-bottom: 20px;
            text-align: center;
        }

        .container-grid {
            display: grid;
            grid-template-columns: repeat(11, min(7vh, 7vw));
            gap: 0;
        }

        .cell {
            width: min(7vh, 7vw);
            height: min(7vh, 7vw);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(14px, 2vw, 26px);
            font-weight: bold;
            border: 2px solid #2e7d32;
        }

        .light {
            background-color: #ffb6c1;
        }

        .dark {
            background-color: #90ee90;
        }
    </style>
</head>
<body>

<h1>Multiplication Table</h1>

<div class="container-grid">
    <?php
    for ($row = 0; $row <= 10; $row++) :
        for ($col = 0; $col <= 10; $col++) :

            $value = $row * $col;
            $color_select = ($row + $col) % 2 == 0 ? "light" : "dark";
    ?>
            <div class="cell <?php echo $color_select; ?>">
                <?php echo $value; ?>
            </div>
    <?php
        endfor;
    endfor;
    ?>
</div>

</body>
</html>