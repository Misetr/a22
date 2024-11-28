<?php
$filePath = 'data.txt';

if (file_exists($filePath)) {
    $content = file_get_contents($filePath);
    echo "<h1>save danych</h1>";
    echo "<pre>$content</pre>";
} else {
    echo "<h1>no danych</h1>";
    echo "<p>Файл с данными ещё не создан.</p>";
}
?>
