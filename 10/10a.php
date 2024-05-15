<!DOCTYPE html>
<html>
<head>
    <title>Today's Date</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .date-container {
            background-color: #edb5dd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        .date {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="date-container">
        <?php
        $date = date("d-m-Y");
        echo "<p class='date'>Today's date is: " . $date . "</p>";
        ?>
    </div>
</body>
</html>
