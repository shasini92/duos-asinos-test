<?php require('partials/head.php') ?>

<form class='w-50 mx-auto mt-5' method="post" action="/register">
    <?php if (isset($errors['register'])) : ?>
        <div class="alert alert-danger" role="alert">
            <p class="m-auto"><?php echo $errors['register'] ?></p>
        </div>
    <?php endif ?>

    <div class="form-outline mb-4">
        <label class="form-label">Name</label>
        <input type="name" class="form-control" name="name" />
        <?php if (isset($errors['name']))
            echo "<p class='error'>" . $errors['name'] . "</p>";
        ?>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" />
        <?php if (isset($errors['email']))
            echo "<p class='error'>" . $errors['email'] . "</p>";
        ?>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" />
        <?php if (isset($errors['password']))
            echo "<p class='error'>" . $errors['password'] . "</p>";
        ?>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" />
        <?php if (isset($errors['confirm_password']))
            echo "<p class='error'>" . $errors['confirm_password'] . "</p>";
        ?>
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

    <div class="text-center">
        Already a member? <a href="/login">Sign in</a>
    </div>
</form>

<?php require('partials/footer.php') ?>