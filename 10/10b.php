<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if ($number <= 1) {
        echo "$number is not a prime number.";
    } else {
        $is_prime = true;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $is_prime = false;
                break;
            }
        }
        if ($is_prime) {
            echo "$number is a prime number.";
        } else {
            echo "$number is not a prime number.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Check Prime Number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            margin-top: 20px;
        }

        input[type="number"] {
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <h2>Check if a Number is Prime</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>
