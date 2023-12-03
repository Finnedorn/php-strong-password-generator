<?php
include __DIR__ ."/partials/header.php";
include __DIR__.'/functions/functions.php';
$error = pswGenerator();
?>

<main>
    <?php if($error) { ?>
        <div class="alert alert-danger">
            <?php echo $error ?>
        </div>
    <?php } ?>
    <div class="container m-auto text-center">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class="d-flex flex-column justify-content-center align-items-center">
            <div>
                <label for="pswLength" class="mb-3 me-3">Quanti caratteri deve avere?</label>
                <input type="number" min='5' max='20' name="pswLength" style="width: 150px">
            </div>
            <div class="pt-5">
                <button type="submit" class="btn btn-success">Genera Password</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</main>

<?php
include __DIR__ ."/partials/footer.php";
?>