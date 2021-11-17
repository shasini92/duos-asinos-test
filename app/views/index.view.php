<?php require('partials/head.php') ?>
<?php if (isset($_SESSION['name'])) : ?>
    <div class="w-50 alert alert-success mx-auto mt-3" role="alert">
        <p class="m-auto text-center">Welcome, <?php echo $_SESSION['name'] ?>!</p>
    </div>
<?php endif ?>

<form class='w-50 mx-auto mt-5' method="post" action="/results">

    <div class="form-outline mb-4">
        <input type="text" class="form-control" name="search" placeholder="Search users by name or email.." />
        <?php if (isset($errors['search']))
            echo "<p class='error'>" . $errors['search'] . "</p>";
        ?>
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Search</button>

</form>

<?php require('partials/footer.php') ?>