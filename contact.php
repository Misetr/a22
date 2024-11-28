<?php
$filePath = 'data.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получение данных из формы
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $street = htmlspecialchars($_POST['street'] ?? '');
    $house = htmlspecialchars($_POST['house'] ?? '');
    $apartment = htmlspecialchars($_POST['apartment'] ?? '');
    $city = htmlspecialchars($_POST['city'] ?? '');
    $birthDate = htmlspecialchars($_POST['birthDate'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');
    $driverLicense = htmlspecialchars($_POST['driverLicense'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? '');
    $notes = htmlspecialchars($_POST['notes'] ?? '');

    // Сохранение данных в файл
    $data = "Imię: $firstName\nNazwisko: $lastName\nUlica: $street\nDom: $house\nMieszkanie: $apartment\nMiasto: $city\nData urodzenia: $birthDate\nTelefon: $phone\nEmail: $email\nPłeć: $gender\nPrawo jazды: $driverLicense\nUwagi: $notes\n\n";
    file_put_contents($filePath, $data, FILE_APPEND);
}

// Чтение и вывод данных из файла
$savedData = file_exists($filePath) ? file_get_contents($filePath) : "Нет сохранённых данных.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Data</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <h1>Lorem ipsum dolor</h1>
        <a href="index.html"><button>Back</button></a>
    </header>
    <form action="" method="POST">
        <label for="firstName">Imię:</label>
        <input type="text" id="firstName" name="firstName" required><br><br>
        <label for="lastName">Nazwisko:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>
        <label for="street">Ulica:</label>
        <input type="text" id="street" name="street"><br><br>
        <label for="house">Dom:</label>
        <input type="text" id="house" name="house"><br><br>
        <label for="apartment">Mieszkanie:</label>
        <input type="text" id="apartment" name="apartment"><br><br>
        <label for="city">Miasto:</label>
        <input type="text" id="city" name="city"><br><br>
        <label for="birthDate">Data urodzenia:</label>
        <input type="date" id="birthDate" name="birthDate"><br><br>
        <label for="phone">Telefon:</la
