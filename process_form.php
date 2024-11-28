<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $street = htmlspecialchars($_POST['street']);
    $house = htmlspecialchars($_POST['house']);
    $apartment = htmlspecialchars($_POST['apartment']);
    $city = htmlspecialchars($_POST['city']);
    $birthDate = htmlspecialchars($_POST['birthDate']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $driverLicense = htmlspecialchars($_POST['driverLicense']);
    $password = htmlspecialchars($_POST['password']);
    $notes = htmlspecialchars($_POST['notes']);

    // Отображение данных
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Submitted Data</title>
        
    </head>
    <body>
        <div class='container'>
            <h2>Wprowadzone dane:</h2>
            <div class='data-item'><span class='label'>Imię:</span> $firstName</div>
            <div class='data-item'><span class='label'>Nazwisko:</span> $lastName</div>
            <div class='data-item'><span class='label'>Ulica:</span> $street</div>
            <div class='data-item'><span class='label'>Dom:</span> $house</div>
            <div class='data-item'><span class='label'>Mieszkanie:</span> $apartment</div>
            <div class='data-item'><span class='label'>Miasto:</span> $city</div>
            <div class='data-item'><span class='label'>Data urodzenia:</span> $birthDate</div>
            <div class='data-item'><span class='label'>Telefon:</span> $phone</div>
            <div class='data-item'><span class='label'>Email:</span> $email</div>
            <div class='data-item'><span class='label'>Płeć:</span> $gender</div>
            <div class='data-item'><span class='label'>Prawo jazdy:</span> $driverLicense</div>
            <div class='data-item'><span class='label'>Hasło:</span> $password</div>
            <div class='data-item'><span class='label'>Uwagi:</span> $notes</div>
            <a href='index.html' class='back-button'>Powrót</a>
        </div>
    </body>
    </html>";
} else {
    header("Location: index.html");
    exit();
}
?>
