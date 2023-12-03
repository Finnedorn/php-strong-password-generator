<?php
include __DIR__. '/partials/header.php';

if (empty($_SESSION['psw'])) {
    header('Location: login.php');
    die();
}
?>

<main class="container">
    <div class="p-3 bg-success w-50 text-light m-auto text-center fs-3 rounded-4 ">
        La tua Password è : <?php echo $_SESSION['psw'] ?>.
    </div>
</main>

<?php 
include __DIR__. '/partials/footer.php';
?>
