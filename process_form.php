<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $firstName = $_POST['first-name'] ?? '';
    $lastName = $_POST['last-name'] ?? '';
   
    
     echo "<!DOCTYPE html>
    <html lang='pl'>
    <head>
        >
        
           
    </head>
    <body>
        <div class='data-container'>
            <h2>Wprowadzone dane:</h2>
            <div class='data-item'><span class='label'>Imię:</span> " . htmlspecialchars($firstName) . "</div>
            <div class='data-item'><span class='label'>Nazwisko:</span> " . htmlspecialchars($lastName) . "</div>
           
            
            <a href='form.html' class='back-button'>Powrót do formularza</a>
        </div>
    </body>
    </html>";
} else {
    
    header("Location: form.html");
    exit();
}
?>