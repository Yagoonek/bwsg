<?php
// Wyświetlanie listy postów z tablicy $_SESSION['posts'] (uproszczony przykład)
if (isset($_SESSION['posts']) && is_array($_SESSION['posts'])) {
    foreach ($_SESSION['posts'] as $post) {
        echo '<div class="post">';
        echo '<div class="author">' . $post['author'] . '</div>';
        echo '<div class="date">' . $post['date'] . '</div>';
        echo '<div class="content">' . $post['content'] . '</div>';
        echo '</div>';
    }
}
?>
