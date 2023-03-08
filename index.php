<?php
    if(isset($_GET)){
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>The Dream</title>
</head>
<body>
    <div class="form-container">
        <form action="./index.php" method="GET">
            <label for="countries">Select destination:</label>
            <select id="countries" name="countries">
                <option value="USD">USA</option>
                <option value="JPY">Japan</option>
                <option value="BRL">Brazil</option>
                <option value="AUD">Australia</option>
                <option value="ZAR">South Africa</option>
            </select>

            <label class="userCurrency" for="userCurrency">Select local currency:</label>
            <select id="userCurrency" name="userCurrency">
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
                <option value="JPY">JPY</option>
                <option value="BRL">BRL</option>
                <option value="AUD">AUD</option>
                <option value="ZAR">ZAR</option>
            </select><br>

            <label for="amount">Enter amount you want to change:</label><br>
            <input type="text" name="amount" id="amount"><br>
            
            <input id="submitBtn" type="submit" value="Submit">
        </form>
    </div>
</body>
</html>