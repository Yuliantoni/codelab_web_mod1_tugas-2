<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Website 2024</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            width: 90%;
            max-width: 700px;
            background: linear-gradient(135deg, #2c2c2c, #1b1b1b);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.8);
        }

        h1 {
            color: #ffffff;
            font-size: 28px;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .output {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
        }

        .output p {
            padding: 12px;
            border-radius: 8px;
            font-size: 18px;
            width: 130px;
            text-align: center;
            color: #ffffff;
            transition: transform 0.2s, background-color 0.3s;
        }

        .output p:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .number {
            background-color: #444;
            color: #ddd;
        }

        .pemrograman {
            background-color: #007acc;
        }

        .website {
            background-color: #ff6f61;
        }

        .both {
            background-color: #8a2be2;
        }

        .num2024 {
            background-color: #32cd32;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pemrograman Website 2024</h1>
        <div class="output">
            <?php
            function cetakBilangan($n) {
                for ($i = 1; $i <= $n; $i++) {
                    if ($i % 4 == 0 && $i % 6 == 0) {
                        echo "<p class='both'>Pemrograman Website 2024</p>";
                    } elseif ($i % 5 == 0) {
                        echo "<p class='num2024'>2024</p>";
                    } elseif ($i % 4 == 0) {
                        echo "<p class='pemrograman'>Pemrograman</p>";
                    } elseif ($i % 6 == 0) {
                        echo "<p class='website'>Website</p>";
                    } else {
                        echo "<p class='number'>$i</p>";
                    }
                }
            }

            // Contoh pemanggilan fungsi
            cetakBilangan(30);
            ?>
        </div>
    </div>
</body>
</html>