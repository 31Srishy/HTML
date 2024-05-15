<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if ($number <= 1) {
        echo '<div class="container2">';
        echo '<center>' . $number . ' is not a prime number.</center>';
        echo '</div>';
    } else {
        $is_prime = true;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $is_prime = false;
                break;
            }
        }
        if ($is_prime) {
            echo '<div class="container2">';
            echo '<center>' . $number . ' is a prime number.</center>';
            echo '</div>';
        } else {
            echo '<div class="container2">';
            echo '<center>' . $number . ' is not a prime number.</center>';
            echo '</div>';
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
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column-reverse;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            margin-top: 20px;
            justify-content: center;
        }
        
        .container, .container2 {
            background-color: #edb5dd;
            padding: 20px; 
            width: 500px
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
    <div class="container">	
    <h2><center><u>Check if a Number is Prime</u></center></h2><br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <center>Enter a number: <input type="number" name="number" required></center><br>
        <center><input type="submit" value="Check"></center>
    </form>
    </div>
</body>
</html>
