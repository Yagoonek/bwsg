<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obsługa dodawania nowego posta
    // Sprawdzenie, czy użytkownik jest zalogowany
    // Pobranie treści posta z formularza
    // Zapisanie posta w bazie danych (w przykładzie będzie to tablica PHP, a nie pełnoprawna baza danych)
    // Przekierowanie na stronę główną z potwierdzeniem dodania posta
    if (isset($_SESSION['username']) && !empty($_POST['content'])) {
        $post = array(
            'author' => $_SESSION['username'],
            'content' => $_POST['content'],
            'date' => date('Y-m-d H:i:s')
        );
        // Tutaj możesz zapisać post w bazie danych, na przykład w tablicy PHP:
        $_SESSION['posts'][] = $post;
    }
    header("Location: index.html");
    exit();
}
?>
