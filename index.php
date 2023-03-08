<?php
declare(strict_types=1);

//Error handling
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if(isset($_GET)){
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
}

//Amount * exchangeRate
$currencies = [
    'euroCountry' => [
        'currency' => '€',
        'exchangeRate' => [
            'EUR' =>  1,
            'USD' =>  0.947165,
            'JPY' =>  0.006927,
            'BRL' =>  0.185271,
            'AUD' =>  0.626727,
            'ZAR' =>  0.051096
        ]
    ],
    'usa' => [
        'currency' => '$',
        'exchangeRate' => [
            'USD' =>  1,
            'EUR' =>  1.053989,
            'JPY' =>  0.007277,
            'BRL' =>  0.192628,
            'AUD' =>  0.660292,
            'ZAR' =>  0.053772
        ]
    ],
    'japan' => [
        'currency' => '¥',
        'exchangeRate' => [
            'JPY' =>  1,
            'EUR' =>  144.353906,
            'USD' =>  137.081988,
            'BRL' =>  26.631537,
            'AUD' =>  90.533592,
            'ZAR' =>  7.391091
        ]
    ],
    'brazil' => [
        'currency' => 'R$',
        'exchangeRate' => [
            'BRL' =>  1,
            'EUR' =>  5.401174,
            'USD' =>  5.148084,
            'JPY' =>  0.037549,
            'AUD' =>  3.399008,
            'ZAR' =>  0.277531
        ]
    ],
    'australia' => [
        'currency' => 'A$',
        'exchangeRate' => [
            'AUD' =>  1,
            'EUR' =>  1.594653,
            'USD' =>  1.514910,
            'JPY' =>  0.011046,
            'BRL' =>  0.294266,
            'ZAR' =>  0.081643
        ]
    ],
    'southAfrica' => [
        'currency' => 'R',
        'exchangeRate' => [
            'ZAR' =>  1,
            'EUR' =>  19.545763,
            'USD' =>  18.554464,
            'JPY' =>  0.135276,
            'BRL' =>  3.603835,
            'AUD' =>  12.245527
        ]
    ]
];

if(isset($_GET["submit"])){
    $currencyAmount = $_GET["amount"];
    $destination = $_GET["countries"];
    $localCurrency = $_GET["userCurrency"];
    $currencyIcon = $currencies[$destination]['currency'];

    $conversion = $currencyAmount*$currencies[$destination]['exchangeRate'][$localCurrency];
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
                <option value="euroCountry">euro country</option>
                <option value="usa">USA</option>
                <option value="japan">Japan</option>
                <option value="brazil">Brazil</option>
                <option value="australia">Australia</option>
                <option value="southAfrica">South Africa</option>
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
            <input type="text" name="amount" id="amount" value="<?php if(isset($_GET["submit"])){echo $currencyIcon.' '.$conversion;}; ?>"><br>
            
            <input id="submitBtn" type="submit" name="submit" value="Submit">
        </form>
    </div>
    <p>
        
    </p>
</body>
</html>