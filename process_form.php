<?php
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
    $data = "Imię: $firstName\nNazwisko: $lastName\nUlica: $street\nDom: $house\nMieszkanie: $apartment\nMiasto: $city\nData urodzenia: $birthDate\nTelefon: $phone\nEmail: $email\nPłeć: $gender\nPrawo jazdy: $driverLicense\nUwagi: $notes\n\n";
    file_put_contents('data.txt', $data, FILE_APPEND);

    // Перенаправление на страницу с просмотром данных
    header("Location: view_data.php");
    exit();
} else {
    echo "new";
}

>

