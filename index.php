<?php
include __DIR__. '/partials/header.php';

if (!isset($_SESSION['auth_token'])) {
    header('Location: login.php');
    exit;
}
?>

<main class="container">
    <div>
        psw gENERATA!
    </div>
</main>

<?php 
include __DIR__. '/partials/footer.php';
?>
